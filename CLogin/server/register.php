<html>
<body>

<?php
	
	//Receive input from client side
	$input1 = $_POST['user'];
	$input2 = $_POST['input'];
	
	//check if the input exist
	$exist = 0;

//read the file line by line
	
	/*foreach(file('users.txt') as $line) {
		//compare the content of the input and the line
		if($line == $input1."\n")*/
		$line = '../database/users.txt';
		if (strpos(file_get_contents($line), $input1) !== false) 
			$exist = 1;	
	
	if($exist == 1){
		echo "The input is exist! <br/><br/>Please register via <a href='../client/register.html'>register</a>";
	}
	else
	{
		//open a file named "users.txt"
		$file = fopen("../database/users.txt","a");
		//insert this input (plus a newline) into the users.txt
		fwrite($file,$input1);
		fwrite($file,",".$input2."\n");
		//close the "$file"
		fclose($file);
		echo "The input is added to the users.txt. <br/><br/>Please log in via <a href='../client/login.html'>login</a>";
	}
?>

</body>
</html>
	
