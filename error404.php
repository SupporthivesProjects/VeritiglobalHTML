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
    <link rel="stylesheet" href="css/diksha.css">
    <!-- Motion -->
    <link rel="stylesheet" href="css/motion.css">
    <link rel="stylesheet" href="css/tokens.css">
  </head>
  <body>
  
  <div class="main-div">
    <header class="header-top fixed-top" id="header-top">
      <nav class="navbar navbar-expand-lg">
        <div class="container p-mo">
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
                <a class="nav-link" href="contact_us.php">Our story</a>
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

   
  <section class="error404-section">
    <div class="error404-inner">
      <div class="error404-card">
        <img class="error404-stamp" src="./img/stamp.png" alt="Not found">
        <div class="error404-kicker">Error 404
        </div>
        <h1>This page did not survive<br>the translation.</h1>
        <p class="error404-copy">The address you followed does not exist, or it did once and no longer does. Everything that does exist is one of these.</p>
        <div class="error404-actions">
          <a class="error404-primary" href="contact_us.php">Request a translation</a>
          <a class="error404-secondary" href="index.php">Back to the homepage</a>
        </div>
      </div>
    </div>
   </section>

  <section class="error404-followup">
    <div class="error404-followup-inner">
      <div class="error404-followup-opener">
        <span>Chapter 01</span>
        <span>Where to go instead</span>
      </div>
      <div class="error404-followup-links">
        <div>
          <h2>Services</h2>
          <a href="#">Certified translation</a>
          <a href="#">Standard translation</a>
          <a href="#">Supported languages</a>
          <a href="#">Supported documents</a>
        </div>
        <div>
          <h2>Company</h2>
          <a href="#">Our story</a>
          <a href="#">Our process</a>
          <a href="#">Join us</a>
          <a href="#">Contact</a>
        </div>
        <div>
          <h2>Support</h2>
          <a href="#">Faqs</a>
          <a href="#">Log in</a>
          <a href="terms.php">Terms &amp; Conditions</a>
          <a href="terms.php">Privacy Policy</a>
        </div>
      </div>
    </div>
  </section>
   
<footer class="footer">
    <div class="container p-mo">
        <div class="col-footer col-footer-one">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="footer-logo">
                        <img src="./img/logo.svg" class="img-fluid footer-logo-img">
                        <div>
                            <p>
                                Corp name. 123 Street, somewhere road,
                                City, ABC 123. Support@Veritiglobal.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="footer-link">
                        <div class="footer-menu-list">
                            <h6>Services</h6>
                            <ul>
                                <li>
                                    <a href="#">Certified translation</a>
                                </li>
                                <li>
                                    <a href="#">Standard translation</a>
                                </li>
                                <li>
                                    <a href="#">Supported languages</a>
                                </li>
                                <li>
                                    <a href="#">Supported documents</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-menu-list">
                            <h6>COMPANY</h6>
                            <ul>
                                <li>
                                    <a href="#">Our story</a>
                                </li>
                                <li>
                                    <a href="#">Our process</a>
                                </li>
                                <li>
                                    <a href="#">Join us</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-menu-list">
                            <h6>SUPPORT</h6>
                            <ul>
                                <li>
                                    <a href="#">Faqs</a>
                                </li>
                                <li>
                                    <a href="#">Log in</a>
                                </li>
                                <li>
                                    <a href="faqs.php">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="faqs.php">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-footer col-footer-two">
            <div class="row footer-bottom m-0">
                <div class="col-lg-6 col-sm-12 col-12 col-md-6 p-0 order-lg-0 order-1">
                    <p>© Veriti Global 2026. All rights reserved.</p>
                </div>
                <div class="col-lg-6 col-sm-12 col-12 col-md-6 p-0">
                    <div>
                        <img src="./img/payment.svg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
    <script src="uiframe/js/jquery.min.js"></script>
    <script src="uiframe/js/bootstrap.bundle.min.js"></script>
    <script src="uiframe/js/popper.min.js"></script>
    <script src="uiframe/js/slick.js"></script>
    <script src="uiframe/js/owl.carousel.js"></script>
    <script src="uiframe/js/swiper-bundle.min.js"></script>
    <script src="uiframe/js/flickity.pkgd.min.js"></script>   
    <script src="uiframe/js/aos.js"></script>
    <script src="./uiframe/js/home-js.js"></script>
    <!-- Motion -->
    <script src="./uiframe/js/motion.js"></script>
    <script>
      $(document).ready(function () {
          $(".navbar-toggler").click(function () {
              $(this).toggleClass("is-active");
              $("header").toggleClass("header-is-active");

              let logo = $("#logo");
              if (logo.attr("src") === "./img/m-logo.svg") {
                  logo.attr("src", "./img/c-logo.svg");
              } else {
                  logo.attr("src", "./img/m-logo.svg");
              }
          });
      });
    </script>
    <script>
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
     <script>
        const dropdownBtns = document.querySelectorAll(
            '.dropdown-toggle-cur, .dropdown-toggle-cart'
        );

        function updateOverlay() {
            const anyOpen =
                document.querySelector('.dropdown-menu.show') !== null;

            document.body.classList.toggle('dropdown-open', anyOpen);
        }

        dropdownBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                setTimeout(updateOverlay, 50);
            });
        });

        document.addEventListener('click', () => {
            setTimeout(updateOverlay, 50);
        });
    </script>

    <script>
      AOS.init();
    </script>
</body>
</html>
  