<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header('Location: login.html');
	}
?>

<html>
<body>

<h2>CoffeeBuzz Main Page</h2>

CoffeeBuzz Main Page
<br/><br/>
<br/><br/>
<br/><br/>
<form action="../server/logout.php" method="POST">
<button type="submit">Logout</button>
</form>


</body>
</html>
