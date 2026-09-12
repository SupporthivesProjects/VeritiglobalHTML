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
   <section class="legal-page-section">
         <div class="legal-hero-card">
          <div class="legal-chapter-row">
            <span class="legal-chapter">Chapter 01</span>
            <span class="legal-tag">Legal</span>
          </div>

            <div class="legal-hero-body">
               <div class="legal-hero-copy">
                  <h1>Terms &amp; Conditions<br>and Privacy Policy.</h1>
               </div>

               <aside class="legal-hero-side">
                  <p>Last updated 17 August 2026. These terms apply to every order placed with Veriti Global Ltd.</p>                 
               </aside>
            </div>
         </div>

         <div class="legal-article-wrap">
            <div class="legal-article-grid">
               <aside class="legal-toc">
                <div class="legal-toc-head">Contents</div>
                    <ul>
                      <li><a href="#who-we-are"><span class="legal-toc-number">01</span><span>Who we are</span></a></li>
                      <li><a href="#what-we-provide"><span class="legal-toc-number">02</span><span>What we provide</span></a></li>
                      <li><a href="#placing-an-order"><span class="legal-toc-number">03</span><span>Placing an order</span></a></li>
                      <li><a href="#prices-and-payment"><span class="legal-toc-number">04</span><span>Prices and payment</span></a></li>
                      <li><a href="#delivery"><span class="legal-toc-number">05</span><span>Delivery</span></a></li>
                      <li><a href="#your-responsibilities"><span class="legal-toc-number">06</span><span>Your responsibilities</span></a></li>
                      <li><a href="#certified-translations"><span class="legal-toc-number">07</span><span>Certified translations</span></a></li>
                      <li><a href="#cancellations-and-refunds"><span class="legal-toc-number">08</span><span>Cancellations and refunds</span></a></li>
                      <li><a href="#intellectual-property"><span class="legal-toc-number">09</span><span>Intellectual property</span></a></li>
                      <li><a href="#confidentiality"><span class="legal-toc-number">10</span><span>Confidentiality</span></a></li>
                      <li><a href="#liability"><span class="legal-toc-number">11</span><span>Liability</span></a></li>
                      <li><a href="#governing-law"><span class="legal-toc-number">12</span><span>Governing law</span></a></li>
                      <li><a href="#what-we-collect"><span class="legal-toc-number">13</span><span>What we collect</span></a></li>
                      <li><a href="#how-we-use-it"><span class="legal-toc-number">14</span><span>How we use it</span></a></li>
                      <li><a href="#how-long-we-keep-it"><span class="legal-toc-number">15</span><span>How long we keep it</span></a></li>
                      <li><a href="#how-long-we-keep-it"><span class="legal-toc-number">16</span><span>Your rights</span></a></li>
                      <li><a href="#how-long-we-keep-it"><span class="legal-toc-number">17</span><span>Contacting us</span></a></li>
                    </ul>
               </aside>

               <div class="legal-content">
                  <section id="who-we-are">
                     <h3><span class="legal-section-number">01</span><span>Who we are</span></h3>
                     <p>Veriti Global Ltd is a company registered in England and Wales, trading as Veriti Global, with its registered office in London, United Kingdom. In these terms we, us and our mean Veriti Global Ltd, and you means the person or organisation placing the order.</p>
                  </section>

                  <section id="what-we-provide">
                     <h3><span class="legal-section-number">02</span><span>What we provide</span></h3>
                     <p>We provide human translation in two forms. Certified translation is priced per page and carries a signed statement of accuracy. Standard translation is priced per word and does not. We do not provide legal, immigration, medical or financial advice, and nothing in a translation should be read as such.</p>
                  </section>

                  <section id="placing-an-order">
                     <h3><span class="legal-section-number">03</span><span>Placing an order</span></h3>
                     <p>An order is placed when you upload a document, select a service, a language pair and a delivery option, and complete checkout. The figures shown before checkout are based on the page or word count you enter. If the document you send differs materially from that count, we will tell you and agree a revised price with you before starting work.</p>
                  </section>

                  <section id="prices-and-payment">
                     <h3><span class="legal-section-number">04</span><span>Prices and payment</span></h3>
                    <p>All prices are shown in the currency you have selected and are payable in full before work begins. Payment is processed by an external payment provider on their secure page. We never see, handle or store your card details. Tax is added at billing where it applies.</p>
                  </section>

                  <section id="delivery">
                     <h3><span class="legal-section-number">05</span><span>Delivery</span></h3>
                     <p>Delivery windows are stated in working hours from the point of order confirmation. Standard delivery is 72 hours and urgent delivery is 36 to 48 hours. Where a document proves longer, less legible or more technical than the uploaded file indicated, we will contact you with a revised window before proceeding.</p>
                  </section>

                  <section id="your-responsibilities">
                     <h3><span class="legal-section-number">06</span><span>Your responsibilities</span></h3>
                    <p>You confirm that you have the right to send us the document and to have it translated. You are responsible for telling us the purpose of the translation and the body it is being submitted to, since that determines whether certification is required.</p>
                    </section>

                  <section id="certified-translations">
                     <h3><span class="legal-section-number">07</span><span>Certified translations</span></h3>
                     <p>A certified translation carries a signed declaration that the translation is complete and true, naming the translator and the date. It is a statement about the translation. It is not a guarantee that any particular authority will accept your submission, and we make no such guarantee.</p>
                  </section>

                  <section id="cancellations-and-refunds">
                     <h3><span class="legal-section-number">08</span><span>Cancellations and refunds</span></h3>
                     <p>You may cancel an order at no cost at any point before work begins on it, and we will refund it in full. Once work has begun, a refund reflects the proportion of the work not yet carried out. Where an error is ours, we correct it at no charge, and if a corrected translation is still not fit for its stated purpose we refund it in full.</p>
                  </section>

                  <section id="intellectual-property">
                     <h3><span class="legal-section-number">09</span><span>Intellectual property</span></h3>
                     <p>You may cancel an order at no cost at any point before work begins on it, and we will refund it in full. Once work has begun, a refund reflects the proportion of the work not yet carried out. Where an error is ours, we correct it at no charge, and if a corrected translation is still not fit for its stated purpose we refund it in full.</p>
                  </section>

                  <section id="confidentiality">
                     <h3><span class="legal-section-number">10</span><span>Confidentiality</span></h3>
                    <p>Everyone working on your document is bound by a confidentiality agreement. Documents are shared only with the people working on your order.</p>
                  </section>

                  <section id="liability">
                     <h3><span class="legal-section-number">11</span><span>Liability</span></h3>
                    <p>Our liability in connection with any order is limited to the amount you paid for that order. Nothing in these terms limits liability for death, personal injury or fraud.</p>
                  </section>

                  <section id="governing-law">
                     <h3><span class="legal-section-number">12</span><span>Governing law</span></h3>
                     <p>These terms are governed by the law of England and Wales and the courts of England and Wales have exclusive jurisdiction.</p>
                  </section>

                  <section id="what-we-collect">
                     <h3><span class="legal-section-number">13</span><span>What we collect</span></h3>
                     <p>We collect the details you give us when you create an account or place an order: your name, email address, phone number and billing address, together with the documents you upload and the translations we return.</p>
                  </section>

                  <section id="how-we-use-it">
                     <h3><span class="legal-section-number">14</span><span>How we use it</span></h3>
                     <p>We use your details to carry out your order, to issue invoices, to answer your enquiries and to meet our legal obligations. We do not sell your data and we do not share it with anyone other than the people working on your order and our payment provider.</p>
                  </section>

                  <section id="how-long-we-keep-it">
                     <h3><span class="legal-section-number">15</span><span>How long we keep it</span></h3>
                     <p>Finished translations and their source documents stay available in your account for as long as the account is open. Invoices and order records are kept for as long as UK company and tax law requires.</p>
                  </section>
                  <section id="your-rights">
                     <h3><span class="legal-section-number">16</span><span>Your rights</span></h3>
                     <p>You can ask to see the personal data we hold about you, correct it, or ask us to delete it. Where deletion would conflict with a legal obligation we will tell you which one and why.</p>
                  </section>
                  <section id="contacting-us">
                     <h3><span class="legal-section-number">17</span><span>Contacting us</span></h3>
                     <p>Write to support@veritiglobal.com with the subject line Data Request and we will respond within one working day.</p>
                  </section>
               </div>
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
  
  