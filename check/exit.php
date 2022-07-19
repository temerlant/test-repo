<?php
setcookie('user', $user['login'],  time() - 3600, "/");
header('Location: ../User_Page/signin.php');
 ?>
