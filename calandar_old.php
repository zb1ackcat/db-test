<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Calendar</title>
</head>
<body>
<form action="calendar.php" method="post">
<?php # Script 2.9 - calendar.php #2
	
	$months = [1 => 'January', 
	'February', 'March', 'April', 'May', 
	'June', 'July', 'August', 'September', 
	'October', 'November', 'December'];	
	
	$days = range(1, 31);
	$years = range(2018, 2022);
	//months
	echo '<select name="months">';
	foreach ($months as $key => $value) {
		echo "<option value=\"$key\">
		$value</options>\n";
	}
	echo '</select>';
	
	# Days
	
		echo '<select name="days">';
	foreach ($days as $value) {
		echo "<option value=\"$key\">
		$value</options>\n";
	}
	echo '</select>';
	
	
	#years
	
	echo '<select name="years">';
	foreach ($years as $value) {
		echo "<option value=\"$key\">
		$value</options>\n";
	}
	echo '</select>';
	
	for ($i = 1; $i <= 10; $i++) {
		echo $i . ' ';
	}
	
	?>
	
	
	
	
	
	
	
	
	
	
</form>
</body>
</html>
