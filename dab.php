<?php
include 'conflag.php';
?>
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

	</style>
	<header class="header">
	
<input type="checkbox" id="m" style="display: none;">
	<a href="#" class="logo"><i class="fas fa-shopping-basket"></i>olanshile</a>
	<nav class="navbar">
		<a href="#">Home</a>
		<a href="#features">features</a>
		<a href="#">products</a>
		<a href="#">categories</a>
		<a href="contact.php">contact</a>
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
	<input type="email" name="email" id="email" placeholder="your email" class="box">
	<input type="password" name="password" id="password" placeholder="your password" class="box"> 
	<p>forget your password?<a href="">click here</a> </p>
	<p>don't have an account?<a href="">create now</a> </p>
	<input type="submit" value="login now" id="submit" name="submit" class="btn">
</form>
</header>
</form>
<section class="home" id="home">
	<div class="content" #features>
		<h3>fresh and <span>organic</span> products for your</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		</p>
		<a href="" class="btn">shop now</a>
	</div>
</section>
<section class="features" id="features">
	<h1 class="heading"> our <span>features</span></h1>
	<div class="box-container">
		<div class="box">
			<img src="images/bike.jpg" alt="">
			<h3>fresh and organic</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
			<a href="" class="btn">read more</a>
		</div>
		<div class="box">
			<img src="images/bike.jpg" alt="">
			<h3>free delivery</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
			<a href="" class="btn">read more</a>
		</div>
		<div class="box">
			<img src="images/bike.jpg" alt="">
			<h3>easy payments</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
			<a href="" class="btn">read more</a>
		</div>
	</div>
</section>
<section class="products">
	<h1 class="heading">our <span> products</span></h1>
<div class="swiper products-slider">
	<div class="swiper-wrapper">
		<div class=" swiper-slide box">
			<img src="images/apple2.jpg" alt="">
			<h3>fresh orange</h3>
			<div class="price"> $4.99/- - 10.99/- </div>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
			<a href="" class="btn">add to cart</a>
		</div>
		<div class="swiper-slide box">
			<img src="images/apple2.jpg" alt="">
			<h3>fresh orange</h3>
			<div class="price"> $4.99/- - 10.99/- </div>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
			<a href="" class="btn">add to cart</a>
		</div>
		<div class="swiper-slide box">
			<img src="images/apple2.jpg" alt="">
			<h3>fresh orange</h3>
			<div class="price"> $4.99/- - 10.99/- </div>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
			<a href="" class="btn">add to cart</a>
		</div>
		<div class="swiper-slide box">
			<img src="images/apple2.jpg" alt="">
			<h3>fresh orange</h3>
			<div class="price"> $4.99/- - 10.99/- </div>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
			<a href="" class="btn">add to cart</a>
		</div>
	</div>
</div>
<div class="products-slider">
	<div class="swiper-wrapper">
		<div class=" swiper-slide box">
			<img src="images/apple2.jpg" alt="">
			<h3>fresh orange</h3>
			<div class="price"> $4.99/- - 10.99/- </div>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
			<a href="" class="btn">add to cart</a>
		</div>
		<div class="swiper-slide box">
			<img src="images/apple2.jpg" alt="">
			<h3>fresh orange</h3>
			<div class="price"> $4.99/- - 10.99/- </div>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
			<a href="" class="btn">add to cart</a>
		</div>
		<div class="swiper-slide box">
			<img src="images/apple2.jpg" alt="">
			<h3>fresh orange</h3>
			<div class="price"> $4.99/- - 10.99/- </div>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
			<a href="" class="btn">add to cart</a>
		</div>
		<div class="swiper-slide box">
			<img src="images/apple2.jpg" alt="">
			<h3>fresh orange</h3>
			<div class="price"> $4.99/- - 10.99/- </div>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
			<a href="" class="btn">add to cart</a>
		</div>
	</div>
</div>

</section>
<section class="categories" id="categories">
	<h1 class="heading">product<span>categories</span></h1>
	<div class="box-container">
	<div class="box">
		<img src="images/apple2.jpg">
		<h3>vegetables</h3>
		<p>upto 45% off</p>
		<a href="" class="btn">shop now</a>
	</div>
	<div class="box">
		<img src="images/apple2.jpg">
		<h3>vegetables</h3>
		<p>upto 45% off</p>
		<a href="" class="btn">shop now</a>
	</div>
	<div class="box">
		<img src="images/apple2.jpg">
		<h3>vegetables</h3>
		<p>upto 45% off</p>
		<a href="" class="btn">shop now</a>
	</div>
</div>
</section>

<section class="review" id="review">
	<h1 class="heading"> customer <span> review</span></h1>
	<div class="swiper review-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide box">
				<img src="images/apple2.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim a</p>

				<h3>ridwan ola</h3>
				<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
		</div>
		<div class="swiper-slide box">
				<img src="images/apple2.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim a</p>

				<h3>ridwan ola</h3>
				<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
		</div>
		<div class="swiper-slide box">
				<img src="images/apple2.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim a</p>

				<h3>ridwan ola</h3>
				<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
		</div>
		<div class="swiper-slide box">
				<img src="images/apple2.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim a</p>
				<h3>ridwan ola</h3>
				<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
		</div>
	</div>
</section>


<section class="blogs" id="blogs">
	<h1 class="heading">our <span>blogs</span></h1>

	<div class="box-container">
		<div class="box">
			<img src="images/c18a.jpg">
			<div class="content">
				<div class="icons">
					<a href=""><i class="fas fa-user"></i> by users </a>
					<a href=""><i class="fas fa-calendar"></i>1st may 2021</a>
				</div>
				<h3>fresh and organic vegeytables</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
				<a href="" class="btn">read more</a>
			</div>
		</div>
		<div class="box">
			<img src="images/c18a.jpg">
			<div class="content">
				<div class="icons">
					<a href=""><i class="fas fa-user"></i> by users </a>
					<a href=""><i class="fas fa-calendar"></i>1st may 2021</a>
				</div>
				<h3>fresh and organic vegeytables</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
				<a href="" class="btn">read more</a>
			</div>
		</div>
		<div class="box">
			<img src="images/c18a.jpg">
			<div class="content">
				<div class="icons">
					<a href=""><i class="fas fa-user"></i> by users </a>
					<a href=""><i class="fas fa-calendar"></i>1st may 2021</a>
				</div>
				<h3>fresh and organic vegeytables</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo</p>
				<a href="" class="btn">read more</a>
			</div>
		</div>
	</div>
</section>

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















<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript">
	var swiper = new Swiper(".products-slider", {
      loop:true,
      spaceBetween: 20,
      autoplay: {
        delay: 7500,
        disableOnInteraction: false,
      },
      centeredSlides: true,
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1020: {
          slidesPerView: 3,
        },
      },
    });



    var swiper = new Swiper(".review-slider", {
      loop:true,
      spaceBetween: 20,
      autoplay: {
        delay: 7500,
        disableOnInteraction: false,
      },
      centeredSlides: true,
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1020: {
          slidesPerView: 3,
        },
      },
    });
</script>
</body>
</html>