<?php
session_start();
require '../../database/config.db.php';

$menuName = $_POST['menu_name'];
$menuCategory = $_POST['menu_cat'];
$menuDesp = $_POST['menu_desc'];
$menuPrice = $_POST['menu_price'];

$_SESSION['icehead'] = $appName;
$_SESSION['icedes'] = $appDesc;


$menuImg = $_FILES['menu_img'];
$menuImgName = $_FILES['menu_img']['name'];
$menuImgTemp = $_FILES['menu_img']['tmp_name'];
$menuImgSize = $_FILES['menu_img']['size'];
$menuImgError = $_FILES['menu_img']['error'];

if(!isset($_POST['add_menu'])){
    $_SESSION['notset'] = "SUBMIT IS NOT SET";
    header('Location: ../add-to-menu.php?submission=notst');
}else{
    if(empty($menuName) || empty($menuDesp) || empty($menuPrice)){
        $_SESSION['empty'] = "Inputed Fields Are Empty";
        header('Location: ../add-to-menu.php?fields=empty');
        exit();
      }else if($menuCategory == "0"){
        $_SESSION['emcategory'] = "No Category Mentioned";
        header('Location: ../add-to-menu.php?category=null');
        exit();
      }
       else{
         $imgExt = explode('.', $menuImgName);
         $actualImgExt = strtolower(end($imgExt));
         $allowedImgExt = array('jpg', 'jpeg', 'png', 'gif');

         if(in_array($actualImgExt, $allowedImgExt)){
             if($menuImgSize < 500000){
                 if($menuImgError == 0){
                   $insertMenu = "INSERT INTO menus (menu_category, menu_name, menu_desc, menu_price, menu_img) VALUES ( '$menuCategory', '$menuName', '$menuDesp', '$menuPrice', '' ) ";
                   $insertImgResult = mysqli_query($connect, $insertMenu);

                     $lastId = mysqli_insert_id($connect);
                     $newIceImgName = $lastId.".".$actualImgExt;
                     $destinationInServer = '../uploads/images/menus/'.$newIceImgName;
                     move_uploaded_file($menuImgTemp, $destinationInServer);

                     $updateImg = "UPDATE menus SET menu_img='$newIceImgName' WHERE menu_id='$lastId'";
                     $updateImgResult = mysqli_query($connect, $updateImg);

                     $_SESSION['addedmenu'] = "Menu Added Successful.";
                     header('Location: ../menus.php?menu=added');
                     exit();

        }
    }
  }
}
  }
?>
