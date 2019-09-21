<?php
session_start();
require '../../database/config.db.php';

$aemail = $_POST['a_email'];
$apassword = $_POST['a_password'];
$hashpass = md5($apassword);

//$_SESSION['email'] = $aemail;

$checkMaintainer = "SELECT COUNT(*) AS adminlogin FROM admins WHERE admin_email='$aemail' AND admin_password='$hashpass'";
$checkMaintainer_result = mysqli_query($connect, $checkMaintainer);
$after_assoc_result = mysqli_fetch_assoc($checkMaintainer_result);

if(isset($_POST['signin'])){
    if($after_assoc_result['adminlogin'] == 1){
        $_SESSION['login'] = "Login Successfull";
        header('Location: ../dashboard.php');
    }else{
        $_SESSION['wrong'] = 'Invalid Email or Password';
        header('Location: ../../admin.php?signin=invalid');
    }
}else{
    $_SESSION['set'] = 'submission set error';
    header('Location: ../../admin.php?submission=not-set');
    exit();
}

?>
