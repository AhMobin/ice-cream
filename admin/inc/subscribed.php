<?php
session_start();
require '../../database/config.db.php';

$sEmail = $_POST['s_email'];

if(isset($_POST['sub_mit'])){
  if(!empty($sEmail)){
    if(filter_var($sEmail, FILTER_VALIDATE_EMAIL)){
      $insertSubs = "INSERT INTO subscribers (subs_email) VALUES ('$sEmail')";
      $subscribe = mysqli_query($connect, $insertSubs);
      $_SESSION['subscribed'] = "You Have Been Subscribed";
      header('location: ../../contact.php?subscribed=success');
    }
  }else{
    $_SESSION['empty'] = "Email Required";
    header('location: ../../contact.php?email=empty');
  }
}

 ?>
