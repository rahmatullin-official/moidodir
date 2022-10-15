<?php session_start();
if($_SESSION['user']){
		header('Location: ../authorized.php');
	}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Регистрация</title>
</head>
<body>
	<?php  if($_SESSION['message']){
			echo '<p class="msg"> ' . $_SESSION["message"] . ' </p>';
		}
		unset($_SESSION['message']);
	?>
	<form action="auth/register.php" method="POST" class="edit">
		<div class="form-group">
			<label>Login</label>
			<input type="text" name="login" placeholder="Введите логин">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Введите пароль">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="Введите email">
		</div>
		<button type="submit" class="btn btn-primary" name="doGo">Зарегистрироваться</button>
		<p><a href="index.php">Авторизация</a></p>
	</form>
</body>
</html>