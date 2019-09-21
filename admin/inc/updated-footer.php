<?php
session_start();
require '../../database/config.db.php';


$fooHeading = $_POST['footer_heading'];
$fooDesc = $_POST['footer_desc'];
$fooLocation = $_POST['location'];
$fooPhone = $_POST['phone'];
$fooEmail = $_POST['email'];
$fooCopyright = $_POST['copyright'];
$devName = $_POST['devname'];
$devLink = $_POST['devlink'];


if(isset($_POST['update_footer'])){
  if(!empty($fooHeading) || !empty($fooDesc) || !empty($fooLocation) || !empty($fooPhone) || !empty($fooEmail) || !empty($fooCopyright) || !empty($devName)){
    $updateFooter = "UPDATE footers SET foo_heading='$fooHeading', foo_desc='$fooDesc', foo_location='$fooLocation', foo_phone='$fooPhone', foo_email='$fooEmail', foo_copyright='$fooCopyright', foo_devname='$devName', foo_devlink='$devLink'";
    $updateSuccess = mysqli_query($connect, $updateFooter);
    $_SESSION['emptyfields'] = "Footer Updated";
    header('location: ../footer-configure.php?footer=updated');
  }else{
    $_SESSION['emptyfields'] = "Required Feilds Are Empty";
    header('location: ../footer-configure.php?fields=empty');
  }
}
?>
