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
//established connection and retireved the customer table for examination before insertion
$ret = $db->query($sql);

$testPword = hash('tiger192,3',$_POST["pword"]);//encrypt password using a hash
$username = $_POST["username"];
$id = $_POST["staff_id"];
//examine row array
$count = 
$sql =<<<EOF
    UPDATE STAFF SET user_name = '$username', password = '$testPword' WHERE staff_id = $id;
EOF;
$ret = $db->query($sql);
$db->close();
header("Location:admin.php");
?>