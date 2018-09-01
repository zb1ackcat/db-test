<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> PreDefined Varible </title>
</html>


<?php # Script 1.5 - predefinded.php

	// Create a shorthand version of the cariable names:
	
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];

echo "<p>You are running the 
file:<br /><strong>$file
</strong>.</p>\n";

echo "<p>You are visiting this page 
using:<br><strong>$user</strong>.
</p>\n";

// Print the server's information:
echo "<p>This server is running:<br><strong>$server</strong>.</p>\n";

?>
<body>



</body>
</html>