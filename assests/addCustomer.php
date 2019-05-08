<?php
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
   SELECT * FROM CUSTOMERS;
EOF;
//established connection and retireved the customer table for examination before insertion
$lastid = 0;
$ret = $db->query($sql);
//examin row array
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    $lastid = $lastid + 1;
}
$lastid = $lastid + 1;// generate unique id
$testPword = hash('tiger192,3',$_POST["pword"]);//encrypt password using a hash
$user = $_POST["fullname"];
$email = $_POST["email"];
$date = date("dmY");//get the date for rocord purposes date month year format

$sql =<<<EOF
   INSERT INTO CUSTOMERS (id, name, pword,cDate,email) VALUES ('$lastid','$user','$testPword','$date','$email');
EOF;

$ret = $db->query($sql);
$db->close();
echo "Customer $user Added Successfully";
?>