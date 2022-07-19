<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Registration</title>
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
<main class="form-signin">

	<div class=" pt-md-5  mx-auto">
    <h1 class="h3 mb-3 fw-normal">Заполните поля</h1>
</div>

<form action="../check/authcheck.php" method="post">
<div class="mt-4 ">
<div class="form-floating">
  <input type="text" class="form-control" name="login"  placeholder="">
  <label >Логин</label><br>
</div>

<div class="form-floating">
  <input type="password" class="form-control" name="password"  placeholder="">
  <label >Пароль</label><br>
</div>

<div class="form-floating">
  <input type="password_accept" class="form-control" name="password_accept"  placeholder="">
  <label >Подтвердите пароль</label>
	 <br>
</div>

<div class="form-floating">
  <input type="email" class="form-control" name="email" placeholder="">
  <label >Email</label> <br>
</div>
    <button class="w-100 btn btn-lg btn-primary" >Зарегистрироваться</button>
<div class="container mt-4 mb-3">
	<nav class = "my-2 my-md-0 mr-md-3">
	<a class = "p-2 text-dark" href="signin.php">Уже зарегистрированы?</a><br>
	<br>
	<a class = "p-2 text-dark" href="../index.php"><-На главную</a>
</nav>
	</div>

  </form>
</main>
</body></html>
