<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sorting Arrays</title>
</head>
<body>
<table border="0" cellspacing="3" cellpadding="3" align="center">
<thead>
	<tr>
		<th><h2>Rating</h2></th>
		<th><h2>Title</h2></th>
	</tr>
</thead>
<tbody>
<?php # Script 2.8 - sorting.php
// Create the array:
$movies = [
	'Casablanca' => 3,
	'To Kill a Mockingbird' => 4,
	'The English Patient' => 3,
	'Stranger Than Fiction' => 9,
	'Story of the Weeping Camel' => 5,
	'Donnie Darko' => 7,
	'Wizard of Oz' => 10,
	'The Matrix' => 10,
	'The Fifth Element' => 10	
	];
	
	echo '<tr><td colspan="2">
	<Strong> In Their OG Order:
	</stron></td></tr>';
	
	foreach ($movies as $title => $rating) {
		echo "<tr><td>$rating</td>
		<td>$title</td></tr>\n";
	};
	
	#Ksort
	
	ksort($movies);
	
		echo '<tr><td colspan="2">
	<Strong> In Alpha Order:
	</stron></td></tr>';
	
	foreach ($movies as $title => $rating) {
		echo "<tr><td>$rating</td>
		<td>$title</td></tr>\n";
	};
	
	##ARsort
	arsort($movies);
		echo '<tr><td colspan="2">
	<Strong> In Ratings order:
	</stron></td></tr>';
	
	foreach ($movies as $title => $rating) {
		echo "<tr><td>$rating</td>
		<td>$title</td></tr>\n";
	};
	
?>
</tbody>
</table>
</body>
</html>