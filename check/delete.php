DELETE FROM `retest` WHERE `retest`.`id` = 8

<?php

 $texttext = $_POST['texttext'];
 $idotzv = $_POST['idotzv'];
 $date = date("Y-n-d");

$connect = mysqli_connect('localhost','root','root','test');
if (!$connect) {
  die('Error connect to DataBase');
}

mysqli_query($connect, "DELETE FROM `retest` WHERE `retest`.`id` = '$idotzv' ");
header('Location: ../Otvz.php');

 ?>
