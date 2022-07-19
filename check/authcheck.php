<?php

 $login = $_POST['login'];
 $password = $_POST['password'];
 $email = $_POST['email'];

  $password_accept = $_POST['password_accept'];
  if ($password_accept != $password)
  {
    echo 'Подтверждение пароля неверно';
  }
  else
  {


$connect = mysqli_connect('localhost','root','root','test');
if (!$connect) {
  die('Error connect to DataBase');
}
mysqli_query($connect,"INSERT INTO `client` (`login`, `password`, `email`)
VALUES('$login', '$password', '$email')");
header('Location: ../User_Page/signin.php');
  }
 ?>
