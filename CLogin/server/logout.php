<?php
	session_start();
	
	unset($_SESSION['login']);
	
	echo "You have logged out";
	
	echo "<br/><br/>Go back to the <a href='http://titan.csit.rmit.edu.au/~s3504057/SEPM/Index.html'>menu</a> ";
?>
