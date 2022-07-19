<?php

 $textUs = $_POST['textUs'];
 $userID = $_COOKIE['userID'];
 $date = date("Y-n-d");

$connect = mysqli_connect('localhost','root','root','test');
if (!$connect) {
  die('Error connect to DataBase');
}
mysqli_query($connect,"INSERT INTO `retest` (`text`, `userid`, `date`)
VALUES('$textUs', '$userID', '$date')");
header('Location: ../Otvz.php');

 ?>
