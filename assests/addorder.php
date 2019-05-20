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
   SELECT * FROM ORDERS;
EOF;
$Customer_id = $_SESSION['Customer_id'];
//established connection and retireved the order table for examination before insertion
$lastid = 0;
$ret = $db->query($sql);
//examin row array
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    $lastid = $lastid + 1;
}
$lastid = $lastid + 1;// generate unique id
$order = $_POST["coffee"];
$size = $_POST["size"];
$quantity = $_POST["quantity"];
$user = $_SESSION['Customer'];
$sql =<<<EOF
   INSERT INTO ORDERS (ID, item, size, quantity, Customer_ID, status, customer) VALUES ($lastid,'$order','$size','$quantity',$Customer_id,'queued','$user');
EOF;
$ret = $db->query($sql);
$db->close();
header("Location:customer.php");
?>