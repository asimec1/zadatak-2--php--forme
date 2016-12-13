<?php
	# Stop Hacking attempt
	if(!defined('__APP__')) {
		die("Hacking attempt");
	}
	print '
		<!-- Main -->
			<section id="main" class="wrapper style1">
				<div class="container">
					<section>
					<h1>Administrator: <img src="userspic/' . $_SESSION['user']['pic'] . '" width="18" alt="' . $_SESSION['user']['name'] . '"> '.$_SESSION['user']['name'].'</h1>';
					if (isset($_SESSION['message'])) { 
						print $_SESSION['message'];
						unset($_SESSION['message']);
					}
						if ($_GET['menu'] == 100) {
							print '
							<h2>Popis svih korisnika</h2>
							<table>
							  <thead>
								<tr>
									<th width="16"></th>
									<th width="16"></th>
									<th width="16"></th>
									<th width="16"></th>
									<th>Korisničko ime</th>
									<th>E mail</th>
									<th>Država</th>
								</tr>
							  </thead>
							  <tbody>
									';
									$query  = "SELECT * FROM users";
									$result = @mysql_query($query);
									while($row = @mysql_fetch_array($result)) {
										print '
									<tr>
										<td><a href="index.php?menu=101&amp;id=' .$row['user_id']. '"><img src="images/user.png" alt="user"></a></td>
										<td><a href="index.php?menu=102&amp;edit=' .$row['user_id']. '"><img src="images/edit.png" alt="uredi"></a></td>
										<td><a href="index.php?menu=103&amp;delete=' .$row['user_id']. '"><img src="images/delete.png" alt="obriši"></a></td>
										<td><img src="userspic/' . $row['user_picture'] . '" width="16" alt="' . $_SESSION['user']['name'] . '"></td>
										<td><strong>' . $row['user_name'] . '</strong></td>
										<td>' . $row['user_email'] . '</td>
										<td>';
											$_query  = "SELECT * FROM countries";
											$_query .= " WHERE country_code='" . $row['user_country'] . "'";
											$_result = @mysql_query($_query);
											$_row = @mysql_fetch_array($_result);

										print $_row['country_name'] . '</td>
									</tr>';
									}
								print '</tbody>							
							</table>';
						}
						else if ($_GET['menu'] == 101) {
							$query  = "SELECT * FROM users";
							$query .= " WHERE user_id=".$_GET['id'];
							$result = @mysql_query($query);
							$row = @mysql_fetch_array($result);
							print '<h2>Profil korisnika ' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '</h2>
							<p>
								<img src="userspic/' . $row['user_picture'] . '" alt="' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '"><br>
								<b>Ime:</b> ' . $row['user_firstname'] . '<br>
								<b>Prezime:</b> ' . $row['user_lastname'] . '<br>
								<b>Korisnikčko ime:</b> ' . $row['user_name'] . '<br>';
									$_query  = "SELECT * FROM countries";
									$_query .= " WHERE country_code='" . $row['user_country'] . "'";
									$_result = @mysql_query($_query);
									$_row = @mysql_fetch_array($_result);
									print '<b>Država:</b> ' .$_row['country_name'] . '<br>
								<b>Datum registracije:</b> ' . $row['user_date'] . '
							</p>
							<p><a href="index.php?menu=100">Povratak</a></p>';
						}
						else if ($_GET['menu'] == 102) {
							include "signin.php";
						}
						else if ($_GET['menu'] == 103) {
							# Delete
							$query  = "SELECT user_picture FROM users";
							$query .= " WHERE user_id=".(int)$_GET['delete']." LIMIT 1";
							$result = mysql_query($query);
							$row = mysql_fetch_array($result);
							@unlink("../userspic/". $row['user_picture']);

							# delete from
							$query  = "DELETE FROM users";
							$query .= " WHERE user_id=".(int)$_GET['delete'];
							$query .= " LIMIT 1";
							$result = @mysql_query($query);

							$_SESSION['message'] = '<p>Uspješno ste obrisali korisnika!';

							$redirect = "index.php?menu=100";
							header("Location: " . $redirect);
						}
					print '
					</section>
					<hr class="major">
				</div>
			</section>';