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
      <button class="btn-white-small"onclick="window.location.href='index.php'">Log Out</button>
    </header>
    <main>
      <div class="container">
        <div class="u-center-text umargin-bottom-big">
          <h2 class="heading-secondary u-margin-bottom-medium">
            Staff Order Page
          </h2>
          <div class="row">
          <div class="card">
              <div class="card__side card__side--front">
                      <?php
                      $id = $_POST["staff_id"];
                      echo("<form action='changeStaff.php' method='POST'><table>
                      <tr>
                      <th>USERNAME</th>
                      <th>PASSWORD</th>
                      <th></th>
                      </tr>
                      <tr>
                      <td><input type='text' name='username' autocomplete='on'></td>
                      <td><input type='password' name='pword' autocomplete='off'></td>
                      <td><button class ='button' name = 'staff_id' value = '$id'>SUBMIT</button></td>
                      </tr></form>
                      </table>");
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
