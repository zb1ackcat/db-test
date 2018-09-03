<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Multidimensional arrays</title>
</head>
<body>
<?php # Script 2.7 - multi.php #2
	
	//Mexico

$mexico = [
	'YU' => 'Yucatan',
	'BC' => 'Baja California',
	'OA' => 'Oaxaca'
];
// USA USA USA:
$us = [
	'MD' => 'Maryland',
	'IL' => 'Illinois',
	'PA' => 'Pennsylvania',
	'IA' => 'Iowa'
];
// America's hat, the maple leaf state:
$canada = [
	'QC' => 'Quebec',
	'AB' => 'Alberta',
	'NT' => 'Northwest Territories',
	'YT' => 'Yukon',
	'PE' => 'Prince Edward Island'
];

//With their powers combined

$n_america = [
	'Mexico' => $mexico,
	'United States' => $us,
	'Canada' => $canada
];

foreach ($n_america as $country => $list) {
	// Print a heading:
	echo "<h2>$country</h2>";
	
		foreach ($list as $k => $v) {
		echo "<li>$k - $v</li>\n";
	}
	
	echo "</li>";
	};

	?>
	
</body>
</html>
