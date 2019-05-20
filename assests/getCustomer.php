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

   $email = $_POST["email"];

   $sql =<<<EOF
   SELECT * FROM CUSTOMERS WHERE email = '$email';
EOF;
//established connection and retireved the customer table for examination before insertion
$lastid = 0;
$ret = $db->query($sql);

$testPword = hash('tiger192,3',$_POST["pword"]);//encrypt password using a hash
$user = NULL;
$user_id = NULL;
//examine row array
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    if ($testPword == $row['pword']){
        $user = $row['name'];
        $user_id = $row['id'];
        echo "match";
    }
}
//-------------------------
$sql =<<<EOF
   SELECT * FROM ORDERS WHERE status = "queued";
EOF;
$orders = 0;
$ret = $db->query($sql);
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    $orders += 1;
}
$_SESSION['Queued'] = $orders;
//------------------------
$db->close();
if ($user == NULL){
    echo "Customer not found";
    $_SESSION['Customer'] = "-NONE-";
    $message = "Sorry, Account not found or Password is incorrect. Please try again";
    echo "<script>
    alert('$message');
    location ='index.php';
    </script>";
}
else{
    $_SESSION['Customer'] = $user;
    $_SESSION['Queued'] = $orders;
    $_SESSION['Customer_id'] = $user_id;
    header("Location:customer.php");
}
?>