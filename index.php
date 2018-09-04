<?php # script 3.6 - index.php
	$page_title = 'Welcome to this Site!';
	include('includes/header.html');
	
	
	### AD ####
	
	function create_ad() {
  echo '<div class="alert alert-info" role="alert"><p>This is an annoying ad! This is an annoying ad! This is an annoying ad! This is an annoying ad!</p></div>';
}

	#### PRINT AD ####

create_ad();
	
?>

<div class="page-header">
	<h1>Content Header</h1>
	<p> Stuff and things go here.</p>
	
<?php create_ad(); ?>
	
<?php include('includes/footer.html');?>