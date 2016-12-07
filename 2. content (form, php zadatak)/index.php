<html>
<head>
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
<body>
<?php 
	if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
print '
<form action="" method="post">
	<input type="hidden" id="_action_" name="_action_" value="TRUE" /><br />
		<p>
			<label for="a">Vrijednost a: </label>
			<input type="text" id="a" name="a" /><br />
			<label for="b">Vrijednost b: </label>
			<input type="text" id="b" name="b" /><br />
			<input type="submit" value="Pošalji" /> 
		</p>
</form>';	
	if ($_POST['_action_'] == TRUE) {
		$txt= "<p> rezultat od jednadžbe: c = (3a – b) / 2 je: </p>";
				
		$c=(3*$_POST['a']-$_POST['b'])/2;
		echo $txt.$c;
	}
?>
<p><a href="index.php">Početna stranica</a></p>
</body>
</html>