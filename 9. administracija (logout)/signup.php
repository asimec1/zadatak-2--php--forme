<?php
	# Stop Hacking attempt
	if(!defined('__APP__')) {
		die("Hacking attempt");
	}

print '
		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
				
					<div class="wrapper style3">';
					if (isset($_SESSION['message'])) {
						print $_SESSION['message'];
						unset($_SESSION['message']);
					}
					print '<h2>Forma za prijavu</h2>
						<form action="trigger.php" name="myForm" id="myForm" method="POST">
							<input type="hidden" id="_action_" name="_action_" value="sign_up">
									
							<label for="username">Korisničko ime:*</label>
							<input type="text" id="username" name="username" value="" pattern=".{5,10}" required>
									
							<label for="password">Lozinka:*</label>
							<input type="password" id="password" name="password" value="" pattern=".{4,}" required>
									
							<input type="submit" value="Pošalji" class="icon">
					</form>
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
			</section>';
