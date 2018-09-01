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
	
// Double Quotes

	echo "<h3 style='color: red'>Using double quotation marks:</h3>";
	
	echo "<p>You are purchasing <strong>$quantity</strong> 			widget(s) at a cost of <strong>\$$price</strong> each. With
	tax, the total comes to <strong>\$$total</strong>.</p>\n";

	// Singles Ladies
	
	echo '<h3>Using single quotation marks:</h3>';
	echo '<p>You are purchasing <strong>$quantity</strong>
	widget(s) at a cost of <strong>\$$price</strong> each. With
	tax, the total comes to <strong>\$$total</strong>.</p>\n';


?>
<body>



</body>
</html>