<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travigo - Travel for everyone</title>
	<link rel="stylesheet" type="text/css" href="view/style.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<!--header--->
	<header>
		<a href="#" class="logo">traviGO</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
        <li><a href="index.php">Home</a></li>
			<li><a href="index.php?action=tour">Tours</a></li>
			<li><a href="index.php?action=about">About</a></li>
			<li><a href="index.php?action=contact">Contact Us</a></li>
            <li><a href="index.php?action=board">Dashboard</a></li>
			<li><a id="logoutbutton" href="index.php?action=login" style="display:none">Logout</a></li>
			<li><a href="index.php?action=login">Login</a></li>
		</ul>
	</header>

	<!--Home section--->
	<section class="home" id="home">
		<div class="home-text">
			<h1>Travigo <br> Travel</h1>
			<p>Explore our trips and live The Good Life with Travigo <br> Tours that make you fall in love with the world.</p>
			<a href="#" class="home-btn">Let's go now</a>
		</div>
	</section>
	<!-- contact -->
    <section class="contact">
		<div class="text">
			<h2>Contact us</h2>
		</div>
		<div class="container">
			<div>
				<p class="title1">Get in touch and our expert support team
					will answer all your questions.</p>
			</div>
			<div class="groupe">
				<div class="inputs">
					<div class="name">
						<div>
							<p>First Name</p>
							<input placeholder=" Example" type="text">
						</div>
						<div>
							<p>Last Name</p>
							<input placeholder=" Example" type="text">
						</div>
					</div>
					<div class="email-num">
						<div>
							<p>Email</p>
							<input placeholder=" Example@example.com" type="text">
						</div>
						<div>
							<p>Phone Number</p>
							<input placeholder=" +123 123 123 123" type="text">
						</div>
					</div>
					<div>
						<p>Message</p>
						<textarea placeholder=" Type your message here" class="area" cols="30" rows="10"></textarea>
					</div>
					<div class="sub">
						<button class="btn">Submit</button>
					</div>
				</div>
				<div class="img">
					<img src="./img/pic.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
		
    <!--Newsletter--->
	<section class="newsletter">
		<div class="news-text">
			<h2>Newsletter</h2>
			<p>Subscribe For more HTML, CSS, and <br> coding tutorials</p>
		</div>

		<div class="send">
			<form>
				<input type="email" placeholder="Write Your Email" required>
				<input type="submit" value="Submit">
			</form>
		</div>
	</section>

	<!--footer--->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Tours</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Tour</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Contact Info</h4>
					<ul>
						<li><a href="#">98 West 21th Street</a></li>
						<li><a href="#">New York NY 10016</a></li>
						<li><a href="#">+(123)-123-1234</a></li>
						<li><a href="#">info@travigo.com</a></li>
						<li><a href="#">+(123)-123-1234</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Connect</h4>
					<div class="social">
						<a href="#"><i class='bx bxl-facebook' ></i></a>
						<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="#"><i class='bx bxl-twitter' ></i></a>
						<a href="#"><i class='bx bxl-linkedin' ></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="end-text">
			<p>Copyright ©2022 All rights reserved | Travigo</p>
		</div>
	</section>

	<!--link to js--->
	<script type="text/javascript" src="view/js/login.js"></script>
	<script type="text/javascript" src="view/js/script.js"></script>

</body>
</html>