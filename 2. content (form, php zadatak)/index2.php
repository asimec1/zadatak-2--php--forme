<html>
<head>
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
		<style>
		body{
			font-family: 'Open Sans Condensed', arial, sans;
			font-size: 110%;
			color: #232323;
		}
			
		input[type="number"]{
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			outline: none;
			display: block;
			width: 100%;
			padding: 7px;
			border: none;
			border-bottom: 1px solid #ddd;
			background: transparent;
			margin-bottom: 10px;
			font: 16px Arial, Helvetica, sans-serif;
			height: 45px;
			font-family: 'Open Sans Condensed', arial, sans;
		}	
		label {
			width: 140px;
			display:inline-block;
		}
		.block {
			margin: 4px 0;
		}
		input[type="submit"] {
			-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
			-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
			box-shadow: inset 0px 1px 0px 0px #45D6D6;
			background-color: #2CBBBB;
			border: 1px solid #27A0A0;
			display: inline-block;
			cursor: pointer;
			color: #FFFFFF;
			font-family: 'Open Sans Condensed', arial, sans;
			font-size: 14px;
			padding: 8px 18px;
			text-decoration: none;
			text-transform: uppercase;
		}
		</style>
	</head>
<body>
<?php 
	if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
print '
<form action="" method="post">
	<input type="hidden" id="_action_" name="_action_" value="TRUE" /><br />
		<div class="block">
			<label for="a">Vrijednost a: </label>
			<input type="number" id="a" name="a" required />
		</div>
		<div class="block">
			<label for="b">Vrijednost b: </label>
			<input type="number" id="b" name="b" required />
		</div>
		<div class="block">
			<input type="submit" value="Pošalji" /> 
		</div>
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