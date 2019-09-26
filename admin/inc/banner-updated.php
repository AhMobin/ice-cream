<?php
session_start();
require '../../database/config.db.php';

$bannerId = $_POST['banner_id'];
$bannerHeading = $_POST['banner_heading'];
$bannerDesc = $_POST['banner_desc'];

$_SESSION['bannerheading'] = $bannerHeading;
$_SESSION['bannerdesc'] = $bannerDesc;


$bannerImg = $_FILES['banimg_update'];
$bannerImgName = $_FILES['banimg_update']['name'];
$bannerImgTemp = $_FILES['banimg_update']['tmp_name'];
$bannerImgSize = $_FILES['banimg_update']['size'];
$bannerImgError = $_FILES['banimg_update']['error'];

if(!isset($_POST['update_banner'])){
    $_SESSION['notset'] = "SUBMIT IS NOT SET";
    header('Location: ../banner-update.php?submission=invalid');
}else{
    if(empty($bannerHeading) || empty($bannerDesc)){
        $_SESSION['empty'] = "Inputed Fields Are Empty";
        header('Location: ../banner-update.php?fields=empty');
        exit();
    }else if(!empty($bannerImgName)){
          $selectBanImage = "SELECT $bannerImgName FROM banners WHERE banner_id='$bannerId'";
          $selectBanImageResult = mysqli_query($connect, $selectBanImage);
          $assocBan = mysqli_fetch_assoc($selectBanImageResult);
          $currentBanImgPath = '../uploads/images/banners/'.$assocBan['banner_img'];
          unlink($currentBanImgPath);

          $BannerExt = explode('.', $bannerImgName);
          $actualBannerExt = strtolower(end($BannerExt));
          $allowedBannerExt = array('jpg', 'jpeg', 'png', 'gif');

          if(in_array($actualBannerExt, $allowedBannerExt)){
              if($bannerImgSize < 300000){
                  if($bannerImgError == 0){
                    $updateBanners = "UPDATE banners SET banner_heading='$bannerHeading', banner_desc='$bannerDesc' WHERE banner_id='$bannerId' ";
                    $updateBannersResult = mysqli_query($connect, $updateBanners) ;

                      $newBanImgName = 'banner-'.$bannerId.".".$actualBannerExt;
                      $destinationInServer = '../uploads/images/banners/'.$newBanImgName;
                      move_uploaded_file($bannerImgTemp, $destinationInServer);

                      $updateBannerImg = "UPDATE banners SET banner_img='$newBanImgName' WHERE banner_id='$bannerId'";
                      $updateBannerImgResult = mysqli_query($connect, $updateBannerImg);

                      $_SESSION['update'] = "Banner Updated Successful.";
                      header('Location: ../banners.php?updated=success');
                      exit();
                }else{
                    $_SESSION['error'] = "Error During Upload. Please Try Again.";
                    header('Location: ../banner-update.php?upload=failed');
                    exit();
                }
            }else{
                $_SESSION['size'] = "Image Size Is Too Large. Maximum Size 300KB";
                header('Location: ../banner-update.php?size=large');
                exit();
            }
        }else{
            $_SESSION['format'] = "Image Format Not Allowed. Try JPG, JPEG, PNG.";
            header('Location: ../banner-update.php?format=invalid');
            exit();
        }
    }else{
        $updateBanners = "UPDATE banners SET banner_heading='$bannerHeading', banner_desc='$bannerDesc' WHERE banner_id='$bannerId' ";
        $updateBannersResult = mysqli_query($connect, $updateBanners) ;

        $_SESSION['updatedban'] = "Banner Updated Successfully.";
        header('Location: ../banners.php?banner=updated');
        exit();
    }
}

?>
