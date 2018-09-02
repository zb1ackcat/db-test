
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Feedback_form</title>
	<style type="text/css"
		title="text/css" media="all">
		.error {
			font-wight: bold;
			color; #COO;
		}
	</style>
</head>
<body>
<!-- Script 2.4 - handle form 2.4-->


<?php  # Sript 2.4 - handle_form.php
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$comments = $_REQUEST['comments'];
	$age = $_REQUEST['age'];
// 	$gender = $_REQUEST['gender'];

###### Code below seems unnessisary to the code above#######
	
	if (isset($_REQUEST['gender'])) {
		$gender = $_REQUEST['gender'];
	} else {
		$gender = null;
	}
	
//	Why this one either?	
	
// 	$gender = $_REQUEST['gender'] ?? null;	
	
	echo "<p>Thank you, <strong> $name</strong>, for the following comments:
	<pre>$comments</pre>
	<p>We will reply to you at
	<em>$email</em>.</p>\n <p>Gender = $gender and yous age be $age</p>";
	
	if ($gender == 'M') {
		echo '<p> <strong> What up dude? </strong> <p>';
		
	}elseif ($gender == 'F') {
		echo '<p> <strong> What up Mamm? </strong> <p>';
	}else {
		echo '<p> <strong> Please tell us your gender? I have funny things I like to say based on the gender you select. </strong> <p>';
		}

?>
</body>

</html>