<?php include 'includes/header.php'; ?>
<section class="translation-section">
    <div class="container px-0">

        <!-- Translation Header -->
        <div class="translation-header">
            <h2 class="translation-chapter">
                CHAPTER 02
            </h2>

            <p class="translation-label">
                Billing details. </p>
        </div>

        <!-- Translation Hero -->
        <div class="translation-hero">
            <div class="translation-title-wrap">
                <h1 class="translation-title">
                    CHECKOUT </h1>
            </div>

            <div class="translation-description">
                <p>
                    Payment is taken on our provider secure page. Veriti Global never sees or stores your card details.
                </p>
            </div>
        </div>

    </div>
</section>

<section class="cart-checkout">

    <div class="container px-0">

        <div class="cart-checkout__layout">

            <!-- =================================================
                 LEFT — CUSTOMER DETAILS
                 ================================================= -->

            <div class="cart-checkout__form">

                <!-- ROW 1 -->
                <div class="cart-checkout__row">

                    <div class="cart-checkout__field">
                        <label for="full-name">
                            FULL NAME
                        </label>

                        <input id="full-name" type="text" value="Amelia Hartley">
                    </div>

                    <div class="cart-checkout__field">
                        <label for="email">
                            EMAIL ADDRESS
                        </label>

                        <input id="email" type="email" value="a.hartley@outlook.com">
                    </div>

                </div>


                <!-- ROW 2 -->
                <div class="cart-checkout__row">

                    <div class="cart-checkout__field">
                        <label for="phone">
                            PHONE NUMBER
                        </label>

                        <input id="phone" type="tel" value="+44 7700 900142">
                    </div>

                    <div class="cart-checkout__field">
                        <label for="dob">
                            DATE OF BIRTH
                        </label>

                        <input id="dob" type="text" value="14/03/1988">
                    </div>

                </div>


                <!-- ROW 3 -->
                <div class="cart-checkout__row">

                    <div class="cart-checkout__field">
                        <label for="address-1">
                            ADDRESS LINE 1
                        </label>

                        <input id="address-1" type="text" value="18 Fitzroy Square">
                    </div>

                    <div class="cart-checkout__field">
                        <label for="address-2">
                            ADDRESS LINE 2 (OPTIONAL)
                        </label>

                        <input id="address-2" type="text" placeholder="Flat, suite or building">
                    </div>

                </div>


                <!-- ROW 4 -->
                <div class="cart-checkout__row">

                    <div class="cart-checkout__field">
                        <label for="city">
                            TOWN OR CITY
                        </label>

                        <input id="city" type="text" value="London">
                    </div>

                    <div class="cart-checkout__field">
                        <label for="postcode">
                            POSTCODE
                        </label>

                        <input id="postcode" type="text" value="W1T 6EU">
                    </div>

                </div>


                <!-- ROW 5 -->
                <div class="cart-checkout__row">

                    <div class="cart-checkout__field cart-checkout__field--country">

                        <label for="country">
                            COUNTRY
                        </label>

                        <div class="cart-checkout__select-wrap">

                            <select id="country">
                                <option selected>
                                    United Kingdom
                                </option>

                                <option>
                                    France
                                </option>

                                <option>
                                    Germany
                                </option>

                                <option>
                                    United States
                                </option>
                            </select>

                            <svg class="cart-checkout__select-arrow" xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M3.5 5.5L7 9L10.5 5.5" stroke="#211E1B" stroke-width="1.4"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>

                    </div>

                </div>


                <!-- TERMS -->
                <label class="cart-checkout__checkbox">

                    <input type="checkbox">

                    <span class="cart-checkout__checkbox-box"></span>

                    <span class="cart-checkout__checkbox-text">
                        I have read and agree to the
                        <a href="#">Terms &amp; Conditions</a>
                        and the
                        <a href="#">Privacy Policy</a>.
                    </span>

                </label>


                <!-- RECAPTCHA -->
                <div class="cart-checkout__captcha">


                </div>

            </div>


            <!-- =================================================
                 RIGHT — ORDER SUMMARY
                 ================================================= -->

            <aside class="cart-summary">

                <!-- SUMMARY TITLE -->

                <div class="cart-summary__title">
                    ORDER SUMMARY
                </div>


                <!-- ITEMS -->

                <div class="cart-summary__details">

                    <div class="cart-summary__row">

                        <div class="cart-summary__item">

                            <span>
                                Certified translation, French to English
                            </span>

                            <small>
                                4 pages, 72 hours
                            </small>

                        </div>

                        <span class="cart-summary__price">
                            $128.00
                        </span>

                    </div>


                    <div class="cart-summary__row">

                        <div class="cart-summary__item">

                            <span>
                                Certified translation, English to Arabic
                            </span>

                            <small>
                                2 pages, 72 hours
                            </small>

                        </div>

                        <span class="cart-summary__price">
                            $64.00
                        </span>

                    </div>


                    <div class="cart-summary__row">

                        <div class="cart-summary__item">

                            <span>
                                Standard translation, English to German
                            </span>

                            <small>
                                1,240 words, 36 to 48 hours
                            </small>

                        </div>

                        <span class="cart-summary__price">
                            $161.20
                        </span>

                    </div>


                    <div class="cart-summary__row">

                        <div class="cart-summary__item">

                            <span>
                                Urgent delivery surcharge
                            </span>

                            <small>
                                On one document
                            </small>

                        </div>

                        <span class="cart-summary__price">
                            $15.83
                        </span>

                    </div>

                </div>


                <!-- DISCOUNT -->

                <div class="cart-summary__discount">

                    <span class="cart-summary__discount-title">
                        DISCOUNT CODE
                    </span>

                    <div class="cart-summary__discount-form">

                        <input type="text" placeholder="Enter your code">

                        <button type="button">
                            Apply
                        </button>

                    </div>

                </div>


                <!-- TOTAL -->

                <div class="cart-summary__total">

                    <span>
                        Total to pay
                    </span>

                    <strong>
                        $369.03
                    </strong>

                </div>


                <!-- PAYMENT -->

                <div class="cart-summary__payment checkout-summary__payment">

                    <div class="cart-summary__payment-info">

                        <span class="cart-summary__payment-title">
                            HOW PAYMENT WORKS
                        </span>

                        <p>
                            Pressing continue takes you to our payment
                            provider secure page to enter your card
                            details. Veriti Global never sees or stores
                            them. You come straight back here once the
                            payment clears.
                        </p>

                    </div>


                    <button class="cart-summary__checkout cart-summary__checkout--payment">
                        Continue to secure payment
                    </button>


                    <div class="cart-summary__accepted">

                        <span>
                            WE ACCEPT
                        </span>

                        <div class="cart-summary__payment-logos">

                            <span class="payment-logo--visa">
                                VISA
                            </span>

                            <span class="payment-logo--mastercard">
                                <span></span>
                            </span>

                        </div>

                    </div>

                </div>

            </aside>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>