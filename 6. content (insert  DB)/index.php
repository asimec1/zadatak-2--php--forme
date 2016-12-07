<?php
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Database connection
	include "dbconn.php";
		
	# Variables MUST BE INTEGERS
	if(!isset($_GET['menu'])) { $_GET['menu'] =  1; $menu = (int)$_GET['menu']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = 'FALSE';  }
print '<!DOCTYPE HTML>
<html>
	<head>
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Alen Šimec">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
	</head>
<body>

	<!-- Header -->
	<header id="header">
		<h1><a href="#">Ion</a></h1>';
			include "menu.php";
	print '
	</header>';
	if ($_GET['menu'] == 1) {
		print '
		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<h2>This is Ion</h2>
				<p>A free responsive template</p>
				<ul class="actions">
					<li><a href="index.php?menu=2" class="button big special">Prijava</a></li>
					<li><a href="#elements" class="button big alt">Learn More</a></li>
				</ul>
			</div>
		</section>
		<section id="two" class="wrapper style2">
			<header class="major">
				<h2>Commodo accumsan aliquam</h2>
				<p>Amet nisi nunc lorem accumsan</p>
			</header>
			<div class="container">
				<div class="row">
					<div class="6u">
						<section class="special">
							<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
							<h3>Mollis adipiscing nisl</h3>
							<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</section>
					</div>
					<div class="6u">
						<section class="special">
							<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
							<h3>Neque ornare adipiscing</h3>
							<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</section>';
	}
	else if ($_GET['menu'] == 3) { include "contact.php"; }
	else if ($_GET['menu'] == 5) { include "signup.php"; }
	else if ($_GET['menu'] == 6) { include "signin.php"; }
	# Include Footer Banner
	include "footer.php";
	print '
</body>
</html>';