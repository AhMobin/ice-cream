<?php
session_start();
require '../../database/config.db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(!isset($_POST['submit'])){
  $_SESSION['notset'] = "Submission Error";
  header('location: ../../contact.php?submission=error');
}else{
  if(empty($name) || empty($email) || empty($subject) || empty($message)){
    $_SESSION['fields'] = "Required Fields Empty";
    header('location: ../../contact.php?fields=empty');
  }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['email'] = "Invalid Email Address";
    header('location: ../../contact.php?email=invalid');
  }else{
    $insertContact = "INSERT INTO contacts (contact_name, contact_email, contact_subject, contact_message) VALUES ('$name', '$email', '$subject', '$message')";
    $insertResult = mysqli_query($connect, $insertContact);
    $_SESSION['success'] = "Message Has Benn Sent";
    header('location: ../../contact.php?msg=sent');
  }
}

?>
