<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body onload="createCaptcha()">

<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" onsubmit="validateCaptcha()" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="username" class="login__input" placeholder="Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="password" class="login__input" placeholder="Password"
					required="true">
				</div>
				<div id="captcha">
   			    </div>
    			<input type="text" placeholder="Captcha" id="cpatchaTextBox" required="true">
				<button class="button login__submit" type="submit" name="submit"> 
					<span class="button__text">Sign in</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">
				<div class="social-icons">
					<a href="https://instagram.com/isikabatay06" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="https://twitter.com/isikabatay06" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

<script src="JS/Captcha.js"></script>

</body>
</html>

<?php 
// tambah session dan jalankan session
	session_start();
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$_SESSION['login'] = $username;

		if ($username == "admin" && $password == "admin") {
			echo "<script>window.location.href='Dashboard.php'</script>";
		}else{
			echo "<script>alert('wrong username & password')</script>";
		}
	}
?>