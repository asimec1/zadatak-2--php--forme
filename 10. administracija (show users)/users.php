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
						<h2>Popis svih korisnika</h2>
						<table>
						  <thead>
							<tr>
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
									<td><a href=""><img src="images/edit.png" alt="uredi"></a></td>
									<td><a href=""><img src="images/delete.png" alt="obriši"></a></td>
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
						</table>
					</section>
					<hr class="major">
				</div>
			</section>';