<?php
session_start();
require '../../database/config.db.php';

$mfname = $_POST['m_fname'];
$memail = $_POST['m_email'];
$mpass = $_POST['m_pass'];
$mrepass = $_POST['m_repass'];
$maintainerole = $_POST['maintainerole'];

$_SESSION['fname'] = $mfname;
$_SESSION['memail'] = $memail;


if(isset($_POST['roledefine'])){
    if(empty($mfname) || empty($memail) || empty($mpass)){
        $_SESSION['field'] = "Field(s) are empty";
        header('Location: ../maintainer.php?fields=empty');
        exit();
    }else if( $maintainerole == 0){
        $_SESSION['role'] = "Maintainer Role Not Declared";
        header('Location: ../maintainer.php?role=not-declared');
        exit();
    }
    else if(!filter_var($memail, FILTER_VALIDATE_EMAIL)){
        $_SESSION['email'] = "Email is not valid";
        header('Location: ../maintainer.php?email=invalid');
        exit();
    }else if(($mpass != $mrepass)){
        $_SESSION['pass'] = "Password Did Not Match";
        header('Location: ../maintainer.php?password=not-match');
        exit();
    }else{
        $mhashpass = md5($mpass);
        $addRole = "INSERT INTO admins (admin_name, admin_email, admin_password, admin_role) VALUES ('$mfname', '$memail', '$mhashpass', '$maintainerole')" ;
        $addRole_result = mysqli_query($connect, $addRole);

        $_SESSION['added'] = "Maintainer added successfully";
        header('Location: ../maintainer.php?maitainer=added');
    }

}else{
    $_SESSION['set'] = "Submission Error";
    header('Location: ../maintainer.php?submission=error');
    exit();
}
