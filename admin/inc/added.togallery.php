<?php
session_start();
require '../../database/config.db.php';

$iceHeading = $_POST['ice_heading'];
$iceDesc = $_POST['ice_desc'];

$_SESSION['icehead'] = $iceHeading;
$_SESSION['icedes'] = $iceHeading;

$iceImg = $_FILES['ice_cream_img'];
$iceImgName = $_FILES['ice_cream_img']['name'];
$iceImgTemp = $_FILES['ice_cream_img']['tmp_name'];
$iceImgSize = $_FILES['ice_cream_img']['size'];
$iceImgError = $_FILES['ice_cream_img']['error'];

if(!isset($_POST['add_icecream'])){
    $_SESSION['notset'] = "SUBMIT IS NOT SET";
    header('Location: ../add-to-gallery.php');
}else{
    if(empty($iceImgName) || empty($iceDesc)){
        $_SESSION['empty'] = "Inputed Fields Are Empty";
        header('Location: ../add-to-gallery.php?fields=empty');
        exit();
       }
       else{
        $imgExt = explode('.', $iceImgName);
        $actualImgExt = strtolower(end($imgExt));
        $allowedImgExt = array('jpg', 'jpeg', 'png', 'gif');

        if(in_array($actualImgExt, $allowedImgExt)){
            if($iceImgSize < 500000){
                if($iceImgError == 0){
                    $insertImg = "INSERT INTO galleries (gl_img_heading, gl_img_desc, gl_img_name) VALUES ( '$iceHeading', '$iceDesc', ' ' ) ";
                    $insertImgResult = mysqli_query($connect, $insertImg);

                    $lastId = mysqli_insert_id($connect);
                    $newIceImgName = $lastId.".".$actualImgExt;
                    $destinationInServer = '../uploads/images/icecream/'.$newIceImgName;
                    move_uploaded_file($iceImgTemp, $destinationInServer);

                    $updateImg = "UPDATE galleries SET gl_img_name='$newIceImgName' WHERE gl_img_id='$lastId'";
                    $updateThumbResult = mysqli_query($connect, $updateImg);

                    $_SESSION['uploaded'] = "Image Added to Gallery Successful.";
                    header('Location: ../add-to-gallery.php?uploaded=success');
                    exit();
                }else{
                    $_SESSION['size'] = "Error During Upload. Please Try Again.";
                    header('Location: ../add-to-gallery.php?upload=failed');
                    exit();
                }
            }else{
                $_SESSION['size'] = "Image Size Is Too Large. Maximum Size 300KB";
                header('Location: ../add-to-gallery.php?size=large');
                exit();
            }
        }else{
            $_SESSION['format'] = "Image Format Not Allowed. Try JPG, JPEG, PNG, GIF.";
            header('Location: ../add-to-gallery.php?format=invalid');
            exit();
        }
    }
}


?>
