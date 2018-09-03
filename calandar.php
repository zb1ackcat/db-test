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
	

	//months
	echo '<select name="month">';
foreach ($months as $key => $value) {
	echo "<option value=\"$key\">$value</option>\n";
}
echo '</select>';
// Mdays
echo '<select name="day">';
for ($day = 1; $day <= 31; $day++) {
	echo "<option value=\"$day\">$day</option>\n";
}
echo '</select>';
// Year
echo '<select name="year">';
for ($year = 2018; $year <= 2022; $year++) {
	echo "<option value=\"$year\">$year</option>\n";
}
echo '</select>';	
	?>
	
	
	
	
	
	
	
	
	
	
</form>
</body>
</html>
