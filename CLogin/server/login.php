<?php
	session_start();
?>

<html>
<body>

<?php


	
	//Receive input from client side

	$input1 = $_POST['user'];
	$input2 = $_POST['input'];
	
	//check if the input exist
	$exist = 0;
	
	$file = fopen('../database/users.txt', 'r');

	while(!feof($file))
	{
	
	$line = fgets($file);
	
	list($user, $pass) = explode(',', $line);
	
	$input = explode(",",$line);
	
		
		if(trim($user) == $input1 && trim($pass) == $input2)
		{
		 $exist = 1;	
		 break;	
		}

	}
	
	if($exist == 1)
	{
		$_SESSION['login'] = "YES";
		header('Location: ../client/content.php');
	}

	else
	{
		echo "The username or password is incorrect! <br/><br/>Go <a href=../client/register.html>back</a>! to register, login or check the user.txt";
	}
fclose($file);
?>

</body>
</html>
	
