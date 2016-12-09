<?php
	# Stop Hacking attempt
	if(!defined('__APP__')) {
		die("Hacking attempt");
	}
print '
<nav id="nav">
	<ul>
		<li><a href="index.php?menu=1"'; if($_GET['menu'] == 1) { print ' class="button special"';} print '>Početna</a></li>
		<li><a href="index.php?menu=2"'; if($_GET['menu'] == 2) { print ' class="button special"';} print '>O nama</a></li>
		<li><a href="index.php?menu=3"'; if($_GET['menu'] == 3) { print ' class="button special"';} print '>Kontakt</a></li>
		<li><a href="index.php?menu=4"'; if($_GET['menu'] == 4) { print ' class="button special"';} print '>Proizvodi</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=6"'; if($_GET['menu'] == 6) { print ' class="button special"';} print '>Registracija</a></li>
			<li><a href="index.php?menu=5"'; if($_GET['menu'] == 5) { print ' class="button special"';} print '>Prijava</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '<li><a href="index.php?menu=100"'; if($_GET['menu'] == 100) { print ' class="button special"';} print '>Administracija</a></li>
			<li><a href="logout.php">Odjava</a></li>';
		}
	print '
	</ul>
</nav>';
?>