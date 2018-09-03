
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Feedback form</title>

</head>
<body>
<!-- Script 2.4 - handle form 2.4-->


<?php  # Sript 2.5 - handle_form.php #4

	if( !empty($_POST['name']) &&
	!empty($_POST['email']) &&
	!empty($_POST['comments']) ){
		
	echo "<p>Thank you, <strong>{$_POST['name']}</strong>, for the following things you said:</p>
<pre>{$_POST['comments']}</pre>
<p>We will hit you back at <em>{$_POST['email']}</em>.</p>\n";
} else { // Missing form value.
	echo '<p>Please go back and fill out the form again. Completely this time.</p>';
}
	

?>
</body>

</html>