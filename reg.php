<?php
include 'conflag.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>register page</title>
	<link rel="stylesheet" type="text/css" href="Css/dab.css">
</head>
<body>
	<style type="text/css">
		.bod{
			display: flex;
	align-items: center;
	justify-content: center;
	background: url(images/back.avif) no-repeat;
	background-position: center;
	background-size: cover;
	padding-top: 17rem;
	padding-bottom: 10rem;
	height: 110vh;
		}
		.login-form{
			position: absolute;
			background-color: whitesmoke;
			left: 35%;
			top: 30%;
		}
		.login-form h3{
			font-size: 3rem;
			text-align: center;
			color: black;
			font-weight: 900px;
		}
		.login-form input{
			margin: 10px;
			padding: 10px;
			border-radius: 10px;
			width: 360px;
			font-weight: 900;
			background-color: #eee;
		}
		.login-form p {
			font-size: 1.2rem;
			margin: 2% 6%;
		}
		.login-form a{
			text-decoration: underline;
			font-size: 1.2rem;
			color: blue;
		}
		.login-form button{
			background: transparent;
			padding: 10px;
			margin: 1% 20%;
			border-radius: 10px;
			border: 2px solid black;
			width: 300px;
			font-size: 20px;
			font-weight: 800;
			outline: var(--black);

		}
		.login-form button:hover{
			background: orange;
			color: #fff;
		}
	</style>
	<div class="bod">
<div class="login-form">
	<form method="post" action="cd.php">
	<h3>Register here</h3>
	<input type="text" name="firstname" id="firstname" placeholder="your first name" class="box"><br><br>
	<input type="text" name="lastname" id="lastname" placeholder="your lastname" class="box"><br>
	<input type="email" name="email" id="email" placeholder="your email" class="box"><br>
	<input type="password" name="password" id="password" placeholder="your password" class="box">
	<input type="password" name="cpassword" id="cpassword" placeholder="your password" class="box"> 
	<p>forget your password?<a href="">click here</a> </p>
	<p>don't have an account?<a href="">create now</a> </p>
	<button type="submit" name="submit" id="submit">register now</button>
</div>
</form>
</div>
</body>
</html>