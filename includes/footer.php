
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
  