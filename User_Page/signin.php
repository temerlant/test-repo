<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="cid:css-e4ea9916-9e26-45d6-bb35-16903f1e42f7@mhtml.blink">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<meta name="theme-color" content="#7952b3">
  <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
	</head>
<main class="form-signin">
  <body

<<?php
if($_COOKIE['user'] == ''):
	?>
	class="text-center">
<main>
	<div class=" pt-md-5  mx-auto">
		<h1 class="h3 mb-3 fw-normal">Войдите</h1>
	</div>

  <form action="../check/signcheck.php" method="post">

<div class="mt-4 ">
<div class="form-floating">
  <input type="text" class="form-control" name="login" id="login" placeholder="login">
  <label >Логин</label><br>
</div>

<div class="form-floating">
  <input type="password" class="form-control" name="password" id="password" placeholder="password">
  <label >Пароль</label><br>
</div>
	</div>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>

		<div class="container mt-4 mb-3">
			<nav class = "my-2 my-md-0 mr-md-3">
			<a class = "p-2 text-dark" href="auth.php">зарегистрироваться
			</a><br>
			<br>
			<a class = "p-2 text-dark" href="../index.php"><-на главную</a>
		</nav>
			</div>

	<?php else: ?>
		<form class="" method="post">
		<p>Привет  <?=$_COOKIE['user'] ?> . Чтобы выйти нажмите <a href="../check/exit.php">здесь</a>. </p>
		<br>
		<a class = "p-2 text-dark" href="../index.php"><- на главную</a>
</form>
	<?php endif;?>
</form>
</main>
</body>
</html>
