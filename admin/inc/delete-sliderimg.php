<?php
session_start();
require '../../database/config.db.php';

$id = $_GET['id'];

$selectImgs = "SELECT * FROM sliders WHERE slider_id = $id";
$selected = mysqli_query($connect, $selectImgs);
$assocImgs = mysqli_fetch_assoc($selected);

$IconPath = '../uploads/images/sliders/icons/'.$assocImgs['slider_ico_img'];
unlink($IconPath);

$BgPath = '../uploads/images/sliders/backgrounds/'.$assocImgs['slider_bg_img'];
unlink($BgPath);

$deleteSliderImg = "DELETE FROM sliders WHERE slider_id = $id";
$deleteSliderImgResult = mysqli_query($connect, $deleteSliderImg);

$_SESSION['sliderdelete'] = "Slider Has Been Deleted Successfully";
header('location: ../sliders.php?delete=success');
exit();

?>
