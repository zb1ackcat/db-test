<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> PreDefined Varible </title>
</html>

<?php # Script 1.8 - numbers.php

	//Varibles that are currently not varible. 

	$quantity = 30022;
	$price = 119.11;
	$taxrate = .05;

	// The mathes go here
	
	$total = $quantity * $price;
	$total = $total * $taxrate;
	$total = number_format($total, 2);

	//The printed HTMML
	
	echo '<p>You are purchasing 
	<strong>' . $quantity . 
	'</strong> widgets(s) at a cost
	of <strong>$' . $price . 
	'</strong> each. With tax, the
	total comes to <strong>$' . 
	$total . '</strong>.</p>';

?>
<body>



</body>
</html>