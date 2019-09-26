<?php
session_start();
require '../../database/config.db.php';

$id = $_GET['id'];
$selectStatus = "SELECT * FROM sliders WHERE slider_id=$id";
$selected = mysqli_query($connect, $selectStatus);
$assocStatus = mysqli_fetch_assoc($selected);

if($assocStatus['slider_status'] == 0){
    $updateStatusActive = "UPDATE sliders SET slider_status=1  WHERE slider_id=$id";
    $updatedStatusActive = mysqli_query($connect, $updateStatusActive);
    $_SESSION['active'] = "Slider Activated";
    header('location: ../sliders.php?slider=activated');
    exit();
}
else{
    $updateStatusActive = "UPDATE sliders SET slider_status=0  WHERE slider_id=$id";
    $updatedStatusActive = mysqli_query($connect, $updateStatusActive);
    $_SESSION['deactive'] = "Slider Dectivated";
    header('location: ../sliders.php?slider=deactivated');
    exit();
}
?>