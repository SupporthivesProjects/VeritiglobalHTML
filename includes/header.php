<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritiglobal</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/tg-icon.svg">
    <link rel="stylesheet" href="css/mainBase.css">
  </head>
  <body>
  
  <div class="main-div">
    <header class="header-top fixed-top" id="header-top">
      <nav class="navbar navbar-expand-lg">
        <div class="container p-mo p-0">
         <div class="logo-mo-div">
            <a class="navbar-brand" href="#">
              <img src="./img/m-logo.svg" alt="" class="img-fluid d-lg-none d-md-blocks d-block  brand-logo-mo" id="logo">
              <img src="./img/brand.svg" alt="" class="img-fluid d-lg-block d-md-none d-none  brand-logo">
            </a>
            <div class="cart-mo-top-btn">
              <div class="cart-mo-top">
                <a class="cart-dec" href="cart.php">
                  <img src="./img/cart.svg" class="img-fluid">
                  <div class="count-cart">3</div>
                </a>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <!-- <div class="hamburger hamburger--3dy">
                    <div class="hamburger-box">
                      <div class="hamburger-inner"></div>
                    </div>
                  </div> -->
                  <span class="navbar-toggler-icon" id="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-nav-one m-auto">
              <li class="nav-item">
                <div class="dropdown services-drop">
                  <button class="nav-link btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                  </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">Certified translation</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Standard translation</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Supported languages</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Supported documents</a>
                      </li>
                    </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">Our process</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ourstory.php">Our story</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_us.php">Faqs</a>
              </li>
            </ul>
            <div class="navbar-mo d-block d-lg-none d-md-block">
              <ul class="navbar-nav navbar-nav-two m-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">Join us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact</a>
                  </li>
              </ul>
            </div>
            <div class="d-flex d-right-mo" role="search">
              <div class="nav-item dropdown d-currency-mo dropdown-toggle-cur">
                <h5 class="d-lg-none d-md-none d-block">CURRENCY</h5>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 GBP 
                </a>
                <ul class="dropdown-menu">
                  <li class="">
                    <a class="dropdown-item active" href="#">
                        <span>USD</span>
                        <p>
                        US Doller
                      </p>
                    </a>
                    
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                        <span>EUR</span>
                      <p>
                        Euro
                      </p>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="#">
                      <span>GBP</span>
                     <p>
                      Pound
                    </p>
                    </a>
                  </li>
                </ul>
              </div>
              <a class="nav-link cart-dec" href="cart.php">
                 <img src="./img/cart.svg" class="img-fluid ">
                 <div class="count-cart">3</div>
              </a>
              <a class="btn btn-login" href="signup.php">Log-in / Sign-up</a>
            </div>
          </div>
        </div>
      </nav>
   </header>
  
  