<?php

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', 'root', 'test');
$result = $mysql->query("SELECT * FROM `client` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
echo "Такой пользватель не найден";
exit();
}
setcookie('user', $user['login'] ,time() + 3600, "/");
setcookie('userID', $user['id'] ,time() + 3600, "/");
header('Location: ../index.php');
?>
