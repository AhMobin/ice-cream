<?php
session_start();
require '../../database/config.db.php';

$id = $_GET['id'];

$deleteFromMenu = "DELETE FROM menus WHERE menu_id = $id";
$deleteMenuResult = mysqli_query($connect, $deleteFromMenu);

$_SESSION['menudelete'] = "One Item Deleted From Menu";
header('location: ../menus.php?delete=success');
exit();

?>
