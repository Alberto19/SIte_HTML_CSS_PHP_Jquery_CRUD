<?php
	session_start();
	
	session_destroy();
	$_SESSION = ARRAY ();	
	header("location:index.php")

?>