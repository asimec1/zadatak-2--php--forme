<!DOCTYPE HTML>
<html>
	<head>
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="refresh" content="1"> 
		<style>
			h1 { color: #111; font-family: 'Helvetica Neue', sans-serif; font-size: 27px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center; }

			p { color: #685206; font-family: 'Helvetica Neue', sans-serif; font-size: 14px; line-height: 5px; margin: 0 0 24px; text-align: justify; }
		</style>
	</head>
<body>
<?php
$a = 8;
$b = 20;

function getDatetimeNow() {
  $tz_object = new DateTimeZone('Europe/Belgrade');
  $datetime = new DateTime();
  $datetime->setTimezone($tz_object);
  return $datetime->format('h:i:s');
}
$currentDate = getDatetimeNow();
echo "<h1>Radno vrijeme</h1>
<p>Radno vrijeme dućana je svaki dan od 8:00 do 20:00</p>
<p>Sada je $currentDate</p>";

if ( $currentDate >= $a & $currentDate < $b ){
	echo "<p>dučan je otvoren</p>";
	}
else {
	echo "<p>dučan je zatvoren</p>";
}
	?>
</body>
</html>