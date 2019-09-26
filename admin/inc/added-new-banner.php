<?php
session_start();
require '../../database/config.db.php';

$bannerHeading = $_POST['banner_heading'];
$bannerDesc = $_POST['banner_desc'];

$_SESSION['bannerhead'] = $bannerHeading;
$_SESSION['bannerdes'] = $bannerDesc;

$bannerImg = $_FILES['banner_img'];
$bannerImgName = $_FILES['banner_img']['name'];
$bannerImgTemp = $_FILES['banner_img']['tmp_name'];
$bannerImgSize = $_FILES['banner_img']['size'];
$bannerImgError = $_FILES['banner_img']['error'];

if(!isset($_POST['add_banner'])){
    $_SESSION['notset'] = "SUBMIT IS NOT SET";
    header('Location: ../add-banner.php');
}else{
    if(empty($bannerHeading) || empty($bannerDesc)){
        $_SESSION['empty'] = "Inputed Fields Are Empty";
        header('Location: ../add-banner.php?fields=empty');
        exit();
       }
       else{
        $imgExt = explode('.', $bannerImgName);
        $actualImgExt = strtolower(end($imgExt));
        $allowedImgExt = array('jpg', 'jpeg', 'gif');

        if(in_array($actualImgExt, $allowedImgExt)){
            if($bannerImgSize < 500000){
                if($bannerImgError == 0){
                    $insertBanner = "INSERT INTO banners (banner_heading, banner_desc, banner_img) VALUES ( '$bannerHeading', '$bannerDesc', '' ) ";
                    $insertBannerResult = mysqli_query($connect, $insertBanner);

                    $lastId = mysqli_insert_id($connect);
                    $newBannerImgName = 'banner-'.$lastId.".".$actualImgExt;
                    $destinationInServer = '../uploads/images/banners/'.$newBannerImgName;
                    move_uploaded_file($bannerImgTemp, $destinationInServer);

                    $updateBanner = "UPDATE banners SET banner_img='$newBannerImgName' WHERE banner_id='$lastId'";
                    $updateBannerResult = mysqli_query($connect, $updateBanner);

                    $_SESSION['uploaded'] = "Banner Uploaded Successfully.";
                    header('Location: ../banners.php?uploaded=success');
                    exit();
                }else{
                    $_SESSION['size'] = "Error During Upload. Please Try Again.";
                    header('Location: ../add-banner.php?upload=failed');
                    exit();
                }
            }else{
                $_SESSION['size'] = "Image Size Is Too Large. Maximum Size 300KB";
                header('Location: ../add-banner.php?size=large');
                exit();
            }
        }else{
            $_SESSION['format'] = "Image Format Not Allowed. Try JPG, JPEG, PNG, GIF.";
            header('Location: ../add-banner.php?format=invalid');
            exit();
        }
    }
}


?>
