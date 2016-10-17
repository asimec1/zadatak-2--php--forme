<!DOCTYPE HTML>
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
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#">Ion</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Početna</a></li>
						<li><a href="#">O nama</a></li>
						<li><a href="#">Kontakt</a></li>
						<li><a href="#">Proizvodi</a></li>
						<li><a href="signup.php" class="button special">Prijava</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
				
					<div class="wrapper style3">
						<?php
							if ($_POST['_action_'] == 'TRUE') {
								echo '<h2>Hvala na prijavi</h2>
								<p>Korisničko ime: ' . $_POST['username'] . '</p>
								<p>Lozinka: ' . $_POST['password'] . '</p>
								<p>Država: ' . $_POST['country'] . '</p>
								<p>Napomena: ' . $_POST['note'] . '</p>';
							}
							else {
								print '<h2>Forma za prijavu</h2>
								<form action="" name="myForm" id="myForm" method="POST">
									<input type="hidden" id="_action_" name="_action_" value="TRUE">
									<label for="username">Korisničko ime:</label>
									<input type="text" id="username" name="username" value="">
									
									<label for="password">Lozinka:</label>
									<input type="password" id="password" name="password" value="">
									
									<label for="country">Država:</label>
									<select name="country" id="country">
										<option value="">molimo odaberite</option>
										<option value="HR">Hrvatska</option>
										<option value="DE">Njemačka</option>
										<option value="US">Sjedinjene Američke Države</option>
									</select>
																
									<label for="note">Napomena:</label>
									<textarea id="note" name="note"></textarea>
									
									<input type="submit" value="Pošalji" class="icon">
								</form>';
							}
						?>
					</div>
				</header>
				<div class="container">
					<section>
						<h2>Mollis ut adipiscing</h2>
						<a href="#" class="image fit"><img src="images/banner.jpg" alt="" /></a>
						<p>Vis accumsan feugiat adipiscing nisl amet adipiscing accumsan blandit accumsan sapien blandit ac amet faucibus aliquet placerat commodo. Interdum ante aliquet commodo accumsan vis phasellus adipiscing. Ornare a in lacinia. Vestibulum accumsan ac metus massa tempor. Accumsan in lacinia ornare massa amet. Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan commodo odio cubilia ac eu interdum placerat placerat arcu commodo lobortis adipiscing semper ornare pellentesque.</p>
						<p>Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus. In amet magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam id ante adipiscing commodo integer arcu amet blandit adipiscing arcu ante.</p>
					</section>
					<hr class="major">
				</div>
			</section>

		<!-- Footer -->
		<footer id="footer">
		<div class="container">
			<ul class="copyright">
				<li>&copy; Ion design. All rights reserved.</li>
				<li>Design: <a href="#" target="_blank">Ion</a></li>
				<li>Images: <a href="#" target="_blank">Unsplash</a></li>
			</ul>
		</div>
	</footer>

	</body>
</html>