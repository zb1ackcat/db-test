
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Feedback_form</title>
	<style type="text/css"
		title="text/css" media="all">
		.error {
			font-weight: bold;
			color: #C00;
		}
	</style>
</head>
<body>
<!-- Script 2.4 - handle form 2.4-->


<?php  # Sript 2.4 - handle_form.php
// 	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$comments = $_REQUEST['comments'];
	$age = $_REQUEST['age'];
// 	$gender = $_REQUEST['gender'];

###### Code below seems unnessisary to the code above#######
	
	if (!empty($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
	} else {
		$name = null;
		echo '<p class="error">Yo! You forgot your name. What are we supposed to yell when we see you in the streets?';
	}
	
	if (!empty($_REQUEST['email'])) {
		$email = $_REQUEST['email'];
	} else {
		$email= null;
		echo '<p class="error">Yo! You forgot your email. That are we supposed to do with not email? This is the internet. Its all we got. With out it you might as well as not filled out the form, hommie.';
	}
	
	if (!empty($_REQUEST['comments'])) {
		$comments = $_REQUEST['comments'];
	} else {
		$comments = null;
		echo '<p class="error">Yo! Give us some comments. You know you want to.';
	}

?>
</body>

</html>