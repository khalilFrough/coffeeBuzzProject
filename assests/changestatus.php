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
   $order_id = $_POST["order_id"];
   $sql =<<<EOF
   SELECT * FROM ORDERS WHERE ID = '$order_id';
EOF;
echo"$sql";
$ret = $db->query($sql);
//examin row array
$status = null;
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    $status = $row['status'];
}
//get next status code
$new_status = null;
if ($status == 'queued'){//queued -> making
    $new_status = 'making';
}elseif ($status == 'making') {//making -> done
    $new_status = 'done';
}elseif ($status == 'done') {//done -> archived
    $new_status = 'archived';
}
$sql =<<<EOF
   UPDATE ORDERS SET status = '$new_status' WHERE ID = '$order_id';
EOF;
$ret = $db->query($sql);
$db->close();
header("Location:staff.php");
?>