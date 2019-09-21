<?php
session_start();
require '../../database/config.db.php';

$id = $_GET['id'];

$selectImg = "SELECT * FROM galleris WHERE gl_img_id='$id'";
$selectImgResult = mysqli_query($connect, $selectImg);
$assocImg = mysqli_fetch_assoc($selectImgResult);
$currentImgPath = '../uploads/images/icecream/'.$assocImg['gl_img_name'];
unlink($currentImgPath);

$deleteFromGallery = "DELETE FROM galleries WHERE gl_img_id = $id";
$deleteGalleryResult = mysqli_query($connect, $deleteFromGallery);

$_SESSION['gallerydelete'] = "One Item Deleted From Gallery";
header('location: ../galleries.php?delete=success');
exit();

?>
