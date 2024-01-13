<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin dashboard</title>
	<link rel="stylesheet" type="text/css" href="Css/dab.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
	<style type="text/css">
		.home{
	display: flex;
	align-items: center;
	justify-content: center;
	background: url(images/back.avif) no-repeat;
	background-position: center;
	background-size: cover;
	padding-top: 17rem;
	padding-bottom: 10rem;
}
.blogs .box-container .box a{
	font-size: 1.9rem;
	text-decoration: underline;
}
.blogs .box-container .box img{
	margin-left: 20%;
}
.message {
	position: absolute;
			background-color: whitesmoke;
			left: 27%;
			top: 110%;
}
.message h2{
	font-size: 3rem;
			text-align: center;
			color: black;
			font-weight: 900px;
}
.message input{
			margin: 10px;
			padding: 10px;
			border-radius: 10px;
			width: 600px;
			font-weight: 900;
			background-color: #eee;
		}
		@media(max-width: 768px){
		.message{
position: absolute;
			background-color: whitesmoke;
			left: 6%;
			top: 650px;
}
.message input{
	margin: 6px;
			padding: 7px;
			border-radius: 10px;
			width: 430px;
			font-weight: 900;
			background-color: #eee;
8
}
	</style>
	<header class="header">
	
<input type="checkbox" id="m" style="display: none;">
	<a href="#" class="logo"><i class="fas fa-shopping-basket"></i>olanshile</a>
	<nav class="navbar">
		<a href="dab.php">Home</a>
		<a href="">features</a>
		<a href="#">products</a>
		<a href="#">categories</a>
		<a href="">contact</a>
		<a href="#">blogs</a>
	</nav>
	<div class="icons">
		<label for="m"><div class="fas fa-bars"></div></label>
		<label for="menu"><div class="fas fa-search"></div></label>
		<label for="men"><div class="fas fa-shopping-cart"></div></label>
		<label for="me"><div class="fas fa-user"></div></label>
	</div>
	<input type="checkbox" id="menu"  style="display: none; ">
	<form action="" class="search-form">
		<input type="search" id="search-box" placeholder="search here....">
		<label for="search-box" class="fas fa-search"></label>
	</form>
	<input type="checkbox" id="men"  style="display: none; ">
<div class="shopping-cart">
	<div class="box">
		<i class="fas fa-trash"></i>
		<img src="images/water1.jpg" alt="">
		<div class="content">
			<h3>watermelon</h3>
			<span class="price">$4.99/-</span>
			<span class="quantity">qty : 1</span>
		</div>
	</div>
	<div class="box">
		<i class="fas fa-trash"></i>
		<img src="images/water.jpg" alt="">
		<div class="content">
			<h3>watermelon</h3>
			<span class="price">$4.99/-</span>
			<span class="quantity">qty : 1</span>
		</div>
	</div>
	<div class="box">
		<i class="fas fa-trash"></i>
		<img src="images/water.jpg" alt="">
		<div class="content">
			<h3>watermelon</h3>
			<span class="price">$4.99/-</span>
			<span class="quantity">qty : 1</span>
		</div>
	</div>
	<div class="total"> total : $19.69/-</div>
	<a href="" class="btn">check out</a>	
</div>
<input type="checkbox" id="me" style="display: none;">
<form action="" class="login-form">
	<h3>login now</h3>
	<input type="email" name="" placeholder="your email" class="box">
	<input type="password" name="" placeholder="your password" class="box"> 
	<p>forget your password?<a href="">click here</a> </p>
	<p>don't have an account?<a href="">create now</a> </p>
	<input type="submit" value="login now" class="btn">
</form>
</header>
<section class="home" id="home">
	<div class="content">
		<h3 style="font-size: 50px;">Contact <span>us</span></h3>
	</div>
</section>
<section class="blogs" id="cnt">
	<div class="box-container">
		<div class="box">
			<img src="images/envelope.avif" width="300px">
			<div class="content">
				<a href="yusufridwan2006@gmail.com" class="bt">yusufridwan2006@gmail.com</a>
			</div>
		</div>
		<div class="box">
			<img src="images/phone.jpg" width="300px">
			<div class="content">
				<a href="+234-815-507-6339" class="bt">+234-815-507-6339</a>
			</div>
		</div>
		<div class="box">
	     <img src="images/whats.png" width="500px">
			<div class="content">
				<a href="https://wa.me/message/MP773PCIUK2OL1" class="bt">olanshile</a>
			</div>
		</div>
	</div>
</section>
<section class="message">
	<form action="" class="message">
		<h2>Leave us a message</h2>
	<input type="email" name="" placeholder="your first name" class="box"><br><br>
	<input type="email" name="" placeholder="your email" class="box"><br>
	<input type="text" name="" placeholder="write your text..." style="padding-bottom: 200px;">
	<input type="submit" value="submit" class="btn">
</form>
</section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3>olanshile<i class="fas fa-shopping-basket"></i></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
			<div class="share">
				<a href="" class="fab fa-facebook"></a>
				<a href="" class="fab fa-twitter"></a>
				<a href="" class="fab fa-instagram"></a>
				<a href="" class="fab fa-linkedin"></a>
			</div>
		</div>
		<div class="box">
			<h3>quick links</h3>
			<a href="" class="links"><i class="fas fa-phone"></i>+234-815-507-6339</a>
			<a href="" class="links"><i class="fas fa-phone"></i>+234-815-507-6339</a>
			<a href="" class="links"><i class="fas fa-envelope"></i>yusufridwan2006@gmail.com</a>
			<a href="" class="links"><i class="fas fa-map-marker-alt"></i>lagos nigeria</a>

		</div>
		<div class="box">
			<h3>contact info</h3>
			<a href="" class="links"><i class="fas fa-arrow-right"></i>Home</a>
			<a href="" class="links"><i class="fas fa-arrow-right"></i>features</a>
			<a href="" class="links"><i class="fas fa-arrow-right"></i>products</a>
			<a href="" class="links"><i class="fas fa-arrow-right"></i>reviews</a>
			<a href="" class="links"><i class="fas fa-arrow-right"></i>blogs</a>
		</div>
		<div class="box">
			<h3>news letter</h3>
			<p>subscribe for latest updates</p>
			<input type="email" name="email" placeholder="your email" class="input">
			<input type="submit" value="subscribe" class="btn">
			<img src="images/visa.jpg" class="payment-img" alt="">
		</div>
	</div>
	<div class="credit"> created by <span>olanshile</span> | all rights reserved </div>
</section>







