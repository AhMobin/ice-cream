<?php
session_start();
require '../../database/config.db.php';

$iceId = $_POST['ice_id'];
$iceHeading = $_POST['ice_heading'];
$iceDesc = $_POST['ice_desc'];

$_SESSION['iceheading'] = $iceHeading;
$_SESSION['icedesc'] = $iceDesc;


$iceImg = $_FILES['ice_cream_img'];
$iceImgName = $_FILES['ice_cream_img']['name'];
$iceImgTemp = $_FILES['ice_cream_img']['tmp_name'];
$iceImgSize = $_FILES['ice_cream_img']['size'];
$iceImgError = $_FILES['ice_cream_img']['error'];

if(!isset($_POST['update_icecream'])){
    $_SESSION['notset'] = "SUBMIT IS NOT SET";
    header('Location: ../ice-cream-update.php?submission=invalid');
}else{
    if(empty($iceHeading) || empty($iceDesc)){
        $_SESSION['empty'] = "Inputed Fields Are Empty";
        header('Location: ../ice-cream-update.php?fields=empty');
        exit();
    }else if(!empty($iceImgName)){
        
        $selectImg = "SELECT $iceImgName FROM galleris WHERE gl_img_id='$iceId'";
        $selectImgResult = mysqli_query($connect, $selectImg);
        $assocImg = mysqli_fetch_assoc($selectImgResult);
        $currentImgPath = '../uploads/images/icecream/'.$assocImg['gl_img_name'];
        unlink($currentImgPath);

        $iceExt = explode('.', $iceImgName);
        $actualIceExt = strtolower(end($iceExt));
        $allowedIceExt = array('jpg', 'jpeg', 'png');

        if(in_array($actualIceExt, $allowedIceExt)){
            if($iceImgSize < 300000){
                if($iceImgError == 0){
                    $updateImg = "UPDATE galleries SET gl_img_heading='$iceHeading', gl_img_desc='$iceDesc' WHERE gl_img_id='$iceId' ";
                    $updateApp_Result = mysqli_query($connect, $updateImg) ;

                    $newImgName = $iceId.".".$actualIceExt;
                    $destinationInServer = '../uploads/images/icecream/'.$newImgName;
                    move_uploaded_file($iceImgTemp, $destinationInServer);

                    $updateImg = "UPDATE galleries SET gl_img_name='$newImgName' WHERE gl_img_id='$iceId'";
                    $updateImgResult = mysqli_query($connect, $updateImg);

                    $_SESSION['update'] = "Ice Cream Updated Successful.";
                    header('Location: ../galleries.php?updated=success');
                    exit();
                }else{
                    $_SESSION['error'] = "Error During Upload. Please Try Again.";
                    header('Location: ../ice-cream-update.php?upload=failed');
                    exit();
                }
            }else{
                $_SESSION['size'] = "Image Size Is Too Large. Maximum Size 300KB";
                header('Location: ../ice-cream-update.php?size=large');
                exit();
            }
        }else{
            $_SESSION['format'] = "Image Format Not Allowed. Try JPG, JPEG, PNG.";
            header('Location: ../ice-cream-update.php?format=invalid');
            exit();
        }
    }else{
      $updateImg = "UPDATE galleries SET gl_img_heading='$iceHeading', gl_img_desc='$iceDesc' WHERE gl_img_id='$iceId' ";
      $updateApp_Result = mysqli_query($connect, $updateImg) ;

        $_SESSION['upload'] = "APP Updated Successfully.";
        header('Location: ../galleries.php?upload=success');
        exit();
    }
}

?>
