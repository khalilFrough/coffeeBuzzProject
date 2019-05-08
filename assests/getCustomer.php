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

   $email = $_POST["email"];

   $sql =<<<EOF
   SELECT * FROM CUSTOMERS WHERE email = '$email';
EOF;
//established connection and retireved the customer table for examination before insertion
$lastid = 0;
$ret = $db->query($sql);

$testPword = hash('tiger192,3',$_POST["pword"]);//encrypt password using a hash
$user = NULL;
//examin row array
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    if ($testPword == $row['pword']){
        $user = $row['name'];
        echo "match";
    }
}


$db->close();
if ($user == NULL){
    echo "Customer not found";
}else{
    echo "Customer $user found";
}
?>