<?php
    session_start();
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('coffeebuzz.db');
      }
   }

   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $username = $_POST["username"];

   $sql =<<<EOF
   SELECT * FROM STAFF WHERE user_name = '$username';
EOF;
//established connection and retireved the customer table for examination before insertion
$lastid = 0;
$ret = $db->query($sql);

$testPword = hash('tiger192,3',$_POST["pword"]);//encrypt password using a hash
$user = NULL;
$user_id = NULL;
//examine row array
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    if ($testPword == $row['password']){
        $user_id = $row['staff_id'];
        $user = $username;
        echo "match";
    }
}
$db->close();
if ($user == NULL){
    echo "Staff Member not found";
    $_SESSION['Customer'] = "-NONE-";
    $message = "Sorry, Account not found or Password is incorrect. Please try again";
    echo "<script>
    alert('$message');
    location ='index.php';
    </script>";
}
else{
    $_SESSION['Staff'] = $user;
    $_SESSION['Queued'] = $orders;
    $_SESSION['staff_id'] = $user_id;
    header("Location:staff.php");
}
?>