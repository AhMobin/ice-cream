<?php

$serverName = 'localhost';
$userName = 'root';
$userPass = 'mysql';
$dbName = 'ice_cream';

$connect = mysqli_connect($serverName, $userName, $userPass, $dbName);

if(!$connect){
  die(mysqli_connect_error());
}

?>
