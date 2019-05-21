<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
  ?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../style/style.css" />
    <title>Customer</title>
  </head>
  <body>
    <header class="customer__header">
      <img class="logo" src="../media/logo.png" alt="Logo goes here" />
      <button class = "button" onclick="window.location.href='customer.php'">Back</button>
      <button class="btn-white-small"onclick="window.location.href='index.php'">Log Out</button>
    </header>
    <main>
      <div class="container">
        <div class="u-center-text umargin-bottom-big">
          <h2 class="heading-secondary u-margin-bottom-medium">
            Archived Orders for <?php 
            echo $_SESSION['Customer'];?>
          </h2>
          <div class="row">
          <div class="card">
              <div class="card__side card__side--front">
                      <?php
                      class MyDB extends SQLite3
                      {
                         function __construct()
                         {
                            $this->open('coffeebuzz.db');
                         }
                      }
                      
                      $database = new MyDB();
                      if(!$database){
                         echo $database->lastErrorMsg();
                      }
                      function maketable($db,$title){
                        echo("<h2 class='table_title'>$title</h2>
                        <form action='changestatus.php' method='POST'><table><tr>
                        <th>Order</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Date</th>
                        </tr>");
                        $customer_id = $_SESSION['Customer_id'];
                        $sql ="SELECT * FROM ORDERS WHERE status = 'archived' and Customer_ID = '$customer_id';";
                        $ret = $db->query($sql);
                        while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
                          $order_id=$row['ID'];
                          $item=$row['Item'];
                          $size=$row['Size'];
                          $Quantity=$row['Quantity'];
                          $customer=$row['customer'];
                          $status = $row['status'];
                          $date = $row['time'];
                          echo("<tr>
                          <td>$item</td>
                          <td>$size</td>
                          <td>$Quantity</td>
                          <td>$date[0]$date[1]/$date[2]$date[3]/$date[4]$date[5]$date[6]$date[7]</td>
                          </tr>");
                        }
                        echo("</table></form>");
                      }
                      maketable($database,"Past Orders");
                      ?>
            </div></div></div>
        </div>
      </div>
    </main>

    <footer>
      <div class="row">
        <div class="col-1-of-2">
          <div class="social-media">
            Follow us on social media:
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter-square"></i>
          </div>
        </div>
        <div class="col-1-of-2">
          <div class="contact">
            <p>Our Contact No: 0450 442 424</p>
            <p>ABN #: 899 888 322</p>
            <P>Address: 80.2.1 </P>
          </div>
        </div>
      </div>
    </footer>
    <script src="../js/main.js"></script>
  </body>
</html>
