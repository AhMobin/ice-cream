<?php
session_start();
require '../../database/config.db.php';

$menuId = $_POST['menu_id'];
$menuName = $_POST['menu_name'];
$menuCategory = $_POST['menu_cat'];
$menuDesc = $_POST['menu_desc'];
$menuPrice = $_POST['menu_price'];

$_SESSION['menuname'] = $menuName;
$_SESSION['menudesc'] = $menuDesc;
$_SESSION['menuprice'] = $menuPrice;


$menuImg = $_FILES['update_img'];
$menuImgName = $_FILES['update_img']['name'];
$menuImgTemp = $_FILES['update_img']['tmp_name'];
$menuImgSize = $_FILES['update_img']['size'];
$menuImgError = $_FILES['update_img']['error'];


if(!isset($_POST['update_menu'])){
    $_SESSION['notset'] = "SUBMIT IS NOT SET";
    header('Location: ../update-menu.php?submission=invalid');
}else{
    if(empty($menuName) || empty($menuDesc) || empty($menuPrice)){
        $_SESSION['empty'] = "Inputed Fields Are Empty";
        header('Location: ../update-menu.php?fields=empty');
        exit();
    }else if( $menuCategory == "0"){
      $_SESSION['menucat'] = "Category Not Selected";
      header('Location: ../update-menu.php?category=none');
      exit();
        }
        else if(!empty($menuImgName)){
          $selectImg = "SELECT $menuImgName FROM menus WHERE menu_id='$menuId'";
          $selectImgResult = mysqli_query($connect, $selectImg);
          $assocImg = mysqli_fetch_assoc($selectImgResult);
          $currentImgPath = '../uploads/images/menus/'.$assocImg['menu_img'];
          unlink($currentImgPath);

          $menuExt = explode('.', $menuImgName);
          $actualMenuExt = strtolower(end($menuExt));
          $allowedMenuExt = array('jpg', 'jpeg', 'png', 'gif');

          if(in_array($actualMenuExt, $allowedMenuExt)){
              if($menuImgSize < 300000){
                  if($menuImgError == 0){
                    $updateMenu = "UPDATE menus SET menu_category='$menuCategory', menu_name='$menuName', menu_desc='$menuDesc', menu_price='$menuPrice' WHERE menu_id='$menuId' ";
                    $updateApp_Result = mysqli_query($connect, $updateMenu) ;

                      $newImgName = $menuId.".".$actualMenuExt;
                      $destinationInServer = '../uploads/images/menus/'.$newImgName;
                      move_uploaded_file($menuImgTemp, $destinationInServer);

                      $updateImg = "UPDATE menus SET menu_img='$newImgName' WHERE menu_id='$menuId'";
                      $updateImgResult = mysqli_query($connect, $updateImg);

                      $_SESSION['update'] = "Menu Item Updated Successful.";
                      header('Location: ../menus.php?updated=success');
                      exit();
                  }else{
                      $_SESSION['error'] = "Error During Upload. Please Try Again.";
                      header('Location: ../update-menu.php?upload=failed');
                      exit();
                  }
              }else{
                  $_SESSION['size'] = "Image Size Is Too Large. Maximum Size 300KB";
                  header('Location: ../update-menu.php?size=large');
                  exit();
              }
          }else{
              $_SESSION['format'] = "Image Format Not Allowed. Try JPG, JPEG, PNG, GIF.";
              header('Location: ../update-menu.php?format=invalid');
              exit();
          }
        }
    else{
        $updateMenu = "UPDATE menus SET menu_category='$menuCategory', menu_name='$menuName', menu_desc='$menuDesc', menu_price='$menuPrice' WHERE menu_id='$menuId' ";
        $updateApp_Result = mysqli_query($connect, $updateMenu) ;

        $_SESSION['upload'] = "Menu Updated Successful.";
        header('Location: ../menus.php?updated=success');
        exit();
    }
}

?>
