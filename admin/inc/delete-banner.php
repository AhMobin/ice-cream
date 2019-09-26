<?php
session_start();
require '../../database/config.db.php';

$id = $_GET['id'];

$bannerImg = "SELECT * FROM banners WHERE banner_id='$id'";
$selectbannerResult = mysqli_query($connect, $bannerImg);
$assocBanner = mysqli_fetch_assoc($selectbannerResult);
$currentBannerPath = '../uploads/images/banners/'.$assocBanner['banner_img'];
unlink($currentBannerPath);

$deleteBanner = "DELETE FROM banners WHERE banner_id = $id";
$deleteBannerResult = mysqli_query($connect, $deleteBanner);

$_SESSION['gallerydelete'] = "Banner Deleted Successfully";
header('location: ../banners.php?delete=success');
exit();

?>
