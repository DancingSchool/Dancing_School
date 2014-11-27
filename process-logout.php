<?php
	require'includes/session.php';
	require'includes/header.php';
	
	$_SESSION = array();
	session_destroy();

	echo "You successfully logged out!"
?>
<br>
<br>
<a href ='index.php'class='btn btn-info col-md-offset-1'>Go back to Home page</a>