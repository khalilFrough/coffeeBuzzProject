<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
  session_destroy();
  ?> 
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../style/style.css" />
    <title>CoffeeBuzz</title>
  </head>
  <body>
    <header class="header" id="header">
      <!-- logo starts here -->
      <div class="logo-box">
        <img class="logo" src="../media/logo.png" alt="logo goes here" />
      </div>
      <!-- logo finishes here -->

      <!-- the buttons on the main page starts here -->
      <div class="buttons">
        <a class="btn btn-text" href="#register__popup">Sign Up</a>
        <a class="btn btn-text" href="#signin__popup">Sign In</a>
        <a href="#admin__popup">Admin</a>
        <a href="#staff__popup">Staff</a>
      </div>
      <!-- the button on the main page finishes here -->
      <!-- the text in the center of the page starts here -->
      <div class="text-box">
        <h1 class="heading-primary">
          <span class="heading-primary-main">Welcome to CofeeBuzz Cafe</span>
          <span class="heading-primary-sub">Taste the Real Coffee</span>
        </h1>
        <a href="#register__popup" class="btn btn-white">Sign Up Now</a>
      </div>
      <!-- the page in the center finishes here -->
    </header>

    <main>
      <section class="section-about">
        <div class="u-center-text umargin-bottom-big">
          <h2 class="heading-secondary u-margin-bottom-medium">
            We Offer The Following Services
          </h2>
        </div>

        <div class="row">
          <!-- card No 1 -->
          <div class="col-1-of-4">
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
                <div class="card__details">
                  <ul>
                    <li>Espresson</li>
                    <li>Latte</li>
                    <li>Cappuccino</li>
                    <li>Long Black</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- card No 2 -->
          <div class="col-1-of-4">
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
          <!-- card No 3 -->
          <div class="col-1-of-4">
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

          <!-- Card no 4 -->

          <div class="col-1-of-4">
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
            please register to place your order!
          </h2>
        </div>
      </section>

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

<!-- the pop up sections starts from here -->

<div class="register__popup" id="register__popup">
    <div class="register__popup__content">
      <a href="#header" class="register__popup_close">&times;</a>

      <div class="register__form">
        <form action="addCustomer.php" class="form" method="post">
          <!-- form heading -->
          <div class="u-margin-bottom-medium">
            <h2 class="heading-secondary">
              Please Register Here
            </h2>
          </div>
          <div class="form__group">
            <input
              type="text"
              class="form__input"
              placeholder="Full Name"
              id="full-Name"
              name="fullname"
              required
            />
            <label for="full-Name" class="form__label">Full Name</label>
          </div>
          <div class="form__group">
            <input
              type="email"
              class="form__input"
              placeholder="Email"
              id="email"
              name="email"
              required
            />
            <label for="email" class="form__label">Email</label>
          </div>
          <div class="form__group">
            <input
              type="email"
              class="form__input"
              placeholder="Confirm Email"
              id="confirm-email"
              name="con_email"
              required
            />
            <label for="confirm-email" class="form__label"
              >Confirm Email</label
            >
          </div>

          <div class="form__group">
            <input
              type="password"
              class="form__input"
              placeholder="Password"
              id="password"
              name="pword"
              required
            />
            <label for="password" class="form__label">Password</label>
          </div>

          <div class="form__group">
            <input
              type="password"
              class="form__input"
              placeholder="Confirm Password"
              id="confirm-password"
              name="con_pword"
              required
            />
            <label for="confirm-password" class="form__label"
              >Confirm password</label
            >
          </div>

          <div class="form__group">
              <input class="btn--blue" type="submit" value = "Register &rarr;">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- the sing in pop up starts from here -->
  <div class="signin__popup" id="signin__popup">
    <div class="signin__popup__content">
      <!-- the form starts here -->

      <div class="register__form">
        <form action="getCustomer.php" class="form" method="post">
          <!-- form heading -->
          <div class="u-margin-bottom-medium">
            <h2 class="heading-secondary">
              Users Sign in page
            </h2>
          </div>

          <div class="form__group">
            <input
              type="email"
              class="form__input"
              placeholder="Email"
              id="user-email"
              name="email"
              required
            />
            <label for="user-email" class="form__label">Email</label>
          </div>

          <div class="form__group">
            <input
              type="password"
              class="form__input"
              placeholder="Password"
              id="user-password"
              name="pword"
              required
            />
            <label for="user-password" class="form__label">Password</label>
          </div>

          <div class="form__group">
              <input class="btn--blue" type="submit" value = "Sign In &rarr;">
          </div>
        </form>
      </div>

      <!-- the form finishes here -->

      <a href="#signin" class="signin__popup_close">&times;</a>
    </div>
  </div>
  <!-- the sing in pop up finishes from here -->

  <!-- the admin pop up starts here -->
  <div class="admin__popup" id="admin__popup">
    <div class="admin__popup__content">
      <!-- the admin login form starts here -->
      <div class="register__form">
        <form action="adminLogin.php" class="form" method="POST">
          <!-- form heading -->
          <div class="u-margin-bottom-medium">
            <h2 class="heading-secondary">
              Admin Log in Page
            </h2>
          </div>

          <div class="form__group">
            <input
              type="text"
              class="form__input"
              placeholder="User Name"
              name="username"
              id="admin-username"
              required
            />
            <label for="admin-username" class="form__label"
              >User Name</label
            >
          </div>

          <div class="form__group">
            <input
              type="password"
              class="form__input"
              name="pword"
              placeholder="Password"
              id="admin-password"
              required
            />
            <label for="password" class="form__label">Password</label>
          </div>

          <div class="form__group">
              <input class="btn--blue" type="submit" value = "Log In &rarr;">
          </div>
        </form>
      </div>
      <!-- the admin login form finishes here -->
      <a href="#admin" class="admin__popup_close">&times;</a>
    </div>
  </div>
  <!-- the admin pop up finishes here -->

  <!-- the staff pop up starts here -->
  <div class="staff__popup" id="staff__popup">
    <div class="staff__popup__content">
      <!-- the staff login form starts here  -->
      <div class="register__form">
        <form action="staffLogin.php" class="form" method="POST">
          <!-- form heading -->
          <div class="u-margin-bottom-medium">
            <h2 class="heading-secondary">
              Staff Log in Page
            </h2>
          </div>

          <div class="form__group">
            <input
              type="text"
              class="form__input"
              placeholder="User Name"
              name="username"
              id="staff-username"
              required
            />
            <label for="staff-username" class="form__label"
              >User Name</label
            >
          </div>

          <div class="form__group">
            <input
              type="password"
              class="form__input"
              placeholder="Password"
              name="pword"
              id="staff-password"
              required
            />
            <label for="password" class="form__label">Password</label>
          </div>

          <div class="form__group">
              <input class="btn--blue" type="submit" value = "Log In &rarr;">
          </div>
        </form>
      </div>
      <!-- the staff login form finishes here -->
      <a href="#staff" class="staff__popup_close">&times;</a>
    </div>
  </div>
      <!-- the staff pop up finishes here -->

      <!-- the pop up section finishes here -->

      <!-- the grid testing stars here -->

      <!--section class="grid-test">
        <div class="row">
          <div class="col-1-of-2">
            col 1 of 2
          </div>
          <div class="col-1-of-2">
            col 1 of 2
          </div>
        </div>

        <div class="row">
          <div class="col-1-of-3">
            col 1 of 3
          </div>
          <div class="col-1-of-3">
            col 1 of 3
          </div>
          <div class="col-1-of-3">
            col 1 of 3
          </div>
        </div>

        <div class="row">
          <div class="col-1-of-3">
            col 1 of 3
          </div>
          <div class="col-2-of-3">
            col 2 of 3
          </div>
        </div>

        <div class="row">
          <div class="col-1-of-4">
            col 1 of 4
          </div>
          <div class="col-1-of-4">
            col 1 of 4
          </div>
          <div class="col-1-of-4">
            col 1 of 4
          </div>
          <div class="col-1-of-4">
            col 1 of 4
          </div>
        </div>

        <div class="row">
          <div class="col-1-of-4">
            col 1 of 4
          </div>
          <div class="col-1-of-4">
            col 1 of 4
          </div>
          <div class="col-2-of-4">
            col 2 of 4
          </div>
        </div>

        <div class="row">
          <div class="col-1-of-4">
            col 1 of 4
          </div>
          <div class="col-3-of-4">
            col 3 of 4
          </div>
        </div>
      </section-->

      <!-- the grid testing finishes here -->
    </main>
  </body>
 
</html>
