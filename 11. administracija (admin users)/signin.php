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
							if ($_GET['menu'] == 102) { 
								print '<h2>Uređivanje korisnika</h2>';
								$query  = "SELECT * FROM users";
								$query .= " WHERE user_id='" . $_GET['edit'] . "'";
								$result = @mysql_query($query);
								$row = @mysql_fetch_array($result);
							}
							else { print '<h2>Forma za registraciju</h2>'; }
							
							print '
								<form action="trigger.php" name="myForm" id="myForm" method="POST" enctype="multipart/form-data">';
								if ($_GET['menu'] == 102) { 
									print '<input type="hidden" id="_action_" name="_action_" value="edit_user">
									<input type="hidden" id="user_id" name="user_id" value="' . $_GET['edit'] . '">';
								} else {
									print '<input type="hidden" id="_action_" name="_action_" value="registration">';
								}
									print '
									<label for="fname">Ime:*</label>
									<input type="text" id="fname" name="fname" '; if ($_GET['menu'] == 102) { print 'value="' . $row['user_firstname'] . '"'; } else { print 'value=""'; } print ' required>
									
									<label for="lname">Prezime:*</label>
									<input type="text" id="lname" name="lname" '; if ($_GET['menu'] == 102) { print 'value="' . $row['user_lastname'] . '"'; } else { print 'value=""'; } print ' required>
									
									<label for="username">Korisničko ime:*</label>
									<input type="text" id="username" name="username" '; if ($_GET['menu'] == 102) { print 'value="' . $row['user_name'] . '"'; } else { print 'value=""'; } print ' pattern=".{5,10}" required>
									<small>Korisničko ime mora imati minimalno 5, a maksimalno 10 znakova</small>';
									if ($_GET['menu'] <> 102) { 
									print '
										<label for="profile">Slika:</label>
										<input type="file" id="profile" name="profile" value="">
									
										<label for="password">Lozinka:*</label>
										<input type="password" id="password" name="password" value="" pattern=".{4,}" required>
										<small>Lozinka ime mora imati minimalno 4 znaka</small>';
									}
									print '
									<label for="email">Email:*</label>
									<input type="email" id="email" name="email" '; if ($_GET['menu'] == 102) { print 'value="' . $row['user_email'] . '"'; } else { print 'value=""'; } print ' required>
									
									<label for="country">Država:</label>
									<select name="country" id="country">
										<option value="">molimo odaberite</option>';
										$_query  = "SELECT * FROM countries";
										$_result = @mysql_query($_query);
										while($_row = @mysql_fetch_array($_result)) {
											print '<option value="' . $_row['country_code'] . '"';
											if ($_GET['menu'] == 102) {
												if ($row['user_country'] == $_row['country_code']) { print " selected"; }
											}
											print '>' . $_row['country_name'] . '</option>';
										}
										print '
									</select>
									
									<input type="submit" value="Pošalji" class="icon">
								</form>';
				print '
					</div>
				</header>
			</section>';
