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
							print '<h2>Forma za registraciju</h2>
								<form action="trigger.php" name="myForm" id="myForm" method="POST" enctype="multipart/form-data">
									<input type="hidden" id="_action_" name="_action_" value="registration">
									
									<label for="fname">Ime:*</label>
									<input type="text" id="fname" name="fname" value="" required>
									
									<label for="lname">Prezime:*</label>
									<input type="text" id="lname" name="lname" value="" required>
									
									<label for="profile">Slika:</label>
									<input type="file" id="profile" name="profile" value="">
									
									<label for="username">Korisničko ime:*</label>
									<input type="text" id="username" name="username" value="" pattern=".{5,10}" required>
									<small>Korisničko ime mora imati minimalno 5, a maksimalno 10 znakova</small>
									
									<label for="password">Lozinka:*</label>
									<input type="password" id="password" name="password" value="" pattern=".{4,}" required>
									<small>Lozinka ime mora imati minimalno 4 znaka</small>
									
									<label for="email">Email:*</label>
									<input type="email" id="email" name="email" value="" required>
									
									<label for="country">Država:</label>
									<select name="country" id="country">
										<option value="">molimo odaberite</option>';
										$query  = "SELECT * FROM countries";
										$result = @mysql_query($query);
										while($row = @mysql_fetch_array($result)) {
											print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
										}
										print '
									</select>
									
									<input type="submit" value="Pošalji" class="icon">
								</form>';
				print '
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
