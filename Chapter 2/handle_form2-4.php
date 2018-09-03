
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


// Name validation
	if (!empty($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
	} else {
		$name = null;
		echo '<p class="error">Yo! You forgot your name. What are we supposed to yell when we see you in the streets?';
	}
//Email validation
	if (!empty($_REQUEST['email'])) {
		$email = $_REQUEST['email'];
	} else {
		$email= null;
		echo '<p class="error">Yo! You forgot your email. That are we supposed to do with not email? This is the internet. Its all we got. With out it you might as well as not filled out the form, hommie.';
	}
	
//Comments Validation
	if (!empty($_REQUEST['comments'])) {
		$comments = $_REQUEST['comments'];
	} else {
		$comments = null;
		echo '<p class="error">Yo! Give us some comments. You know you want to.';
	}
	
//Gender Validation

if (isset($_REQUEST['gender'])) {
	$gender = $_REQUEST['gender'];
	if ($gender == 'M') {
		$greeting = '<p><strong>Good day, Sir!</strong></p>';
	} elseif ($gender == 'F') {
		$greeting = '<p><strong>Good day, Madam!</strong></p>';
	} elseif ($gender == 'O' || 'P') {
		$greeting = "<p><strong>Good day, $name!</strong></p>";
	} else { // Unacceptable value.
		$gender = NULL;
		echo '<p class="error">You need to ender something in the gender, leave a comment if you think we should include move options.</p>';
	}
	}
		// If everything is OK, print the message:
if ($name && $email && $gender && $comments) {
	echo "<p>Thank you, <strong>$name</strong>, for the following comments:</p>
	<pre>$comments</pre>
	<p>We will reply to you at <em>$email</em>.</p>\n";
	echo $greeting;
} else { // Missing form value.
	echo '<p class="error">Please go back and fill out the form again.</p>';

}
?>
</body>

</html>