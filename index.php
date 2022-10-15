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
	<title>Система отслеживания качества</title>
</head>
<body>
	<h2>Пожалуйста войдите в аккаунт!</h2>
	<form action="auth/login.php" method="POST" class="edit">
		<div class="form-group">
			<input type="text" placeholder="Введите логин" name="login">
		</div>
		<div class="form-group">
			<input type="password" placeholder="Введите пароль" name = "password">
		</div>
		<button type="submit" class = "btn btn-primary">Войти</button><br>
		<a href="reg.php">Зарегестрироваться</a>
		<?php  if($_SESSION['message']){
			echo '<p class="msg"> ' . $_SESSION["message"] . ' </p>';
		}
		unset($_SESSION['message']);
		?>
	</form>
</body>
</html>