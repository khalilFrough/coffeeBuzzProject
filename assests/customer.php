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
      <button class="btn-white-small">Log Out</button>
    </header>
    <main>
      <div class="container">
        <div class="u-center-text umargin-bottom-big">
          <h2 class="heading-secondary u-margin-bottom-medium">
            Customer Menu Page
          </h2>
          <?php
            $user = $_SESSION['Customer'];
            $orders = $_SESSION['Queued'];
            echo("<br>hello $user there are currently $orders orders in the queue");
          ?>
      
        <div class="row">
          <!-- card 1 Coffee order -->
          <div class="col-1-of-2">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">
                  &nbsp;
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span card_heading--span--1"
                    >Coffee</span
                  >
                </h4>
                <form class="card__details" action="addorder.php" class="form" method = "post">
                  <ul>
                    <li><label for="coffee__order">Please Select your Coffee:</label>
                    <select class="select__option" name="coffee" id="coffee__order" onchange="changeOption()">
                      <option value=""></option>
                      <option value="HotCoffee">Hot Coffee</option>
                      <option value="Espresso">Espresso</option>
                      <option value="doulbe_Espresso">Double Espresso</option>
                      <option value="Cappuccino">Cappuccino</option>
                      <option value="long_black">long black</option>
                      <option value="hot_chocolate">Hot Chocolate </option>
                    </select></li>

                    <li>
                    <label for="coffee__size">Which Size Coffee:</label>
                    <select class="select__option" name="size" id="coffee__size">
                    <!-- minipuliting this selection option through javaScript -->
                    </select></li>

                    <li><label for="quantity">Please Select the Quantitiy:</label>
                    <select class="select__option" name="quantity" id="quantity">
                      <option value=""></option>
                      <option value="one">1</option>
                      <option value="two">2</option>
                      <option value="three">3</option>
                      <option value="four">4</option>
                      <option value="five">5</option>
                      <option value="six">6</option>
                    </select></li>
                    <li><input type="submit" value="Submit"></li>
                  </ul>
                </form>
              </div>
            </div>
            
          </div>
          
          <div class="col-1-of-2">
            <!-- card 2 cake order -->
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--2">
                  &nbsp;
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span card_heading--span--2"
                    >Cake</span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>Cheese Cake</li>
                    <li>Cholocate Cake</li>
                    <li>Pineapple Cake</li>
                    <li>Banana Cake</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- the second row starts from here -->

        <div class="row">
          <!-- card 3 tea order -->
          <div class="col-1-of-2">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--3">
                  &nbsp;
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span card_heading--span--3"
                    >Tea</span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>Earl Grey</li>
                    <li>Assam</li>
                    <li>Green</li>
                    <li>Mint</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-1-of-2">
            <!-- card 4 sandwitch order -->
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--4">
                  &nbsp;
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span card_heading--span--4"
                    >Sandwich</span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>Bacon Sandwich</li>
                    <li>Beef Sandwich</li>
                    <li>Cheese Sandwich</li>
                    <li>Tuna Sandwich</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="u-center-text umargin-bottom-big">
          <h2 class="heading-secondary u-margin-bottom-medium">
            please place your order
          </h2>
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
