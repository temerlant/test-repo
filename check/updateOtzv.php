<?php

 $texttext = $_POST['texttext'];
 $idotzv = $_POST['idotzv'];
 $date = date("Y-n-d");

$connect = mysqli_connect('localhost','root','root','test');
if (!$connect) {
  die('Error connect to DataBase');
}

//if ( =< 1 )
//{
//  echo 'Подтверждение пароля неверно';
//}
//else
//{

mysqli_query($connect, "UPDATE `retest` SET `text` = '$texttext' WHERE `retest`.`id` = '$idotzv' ");
header('Location: ../Otvz.php');

 ?>
