<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header('Location: login.html');
	}
?>

<html>
<body>

<h2>CoffeeBuzz Staff Page</h2>

<br></br>
<a href="../../SLogin/client/register.html">Add staff member</a>
<br></br>


<br/><br/>
<br/><br/>
<br/><br/>
<form action="../server/logout.php" method="POST">
<button type="submit">Logout</button>
</form>


</body>
</html>
