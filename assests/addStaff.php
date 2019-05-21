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
    $sql =<<<EOF
   SELECT * FROM STAFF;
EOF;
//established connection and retireved the customer table for examination before insertion
$ret = $db->query($sql);

$testPword = hash('tiger192,3',$_POST["pword"]);//encrypt password using a hash
$username = $_POST["username"];
//examine row array
$count = 0;
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    $count += 1;
}

$sql =<<<EOF
    INSERT INTO STAFF(staff_id, user_name, password) VALUES($count,'$username','$testPword');
EOF;
$ret = $db->query($sql);
$db->close();
?>