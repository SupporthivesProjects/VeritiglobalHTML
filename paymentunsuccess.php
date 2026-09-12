<?php include 'includes/header.php'; ?>
<section class="payment-confirmation">

    <div class="container px-0">

        <div class="payment-confirmation__card">

            <!-- RECEIVED IMAGE -->
            <div class="payment-confirmation__stamp">
                <img
                    src="./img/redstamp.svg"
                    alt="Received"
                >
            </div>

            <!-- ORDER NUMBER -->
            <div class="payment-confirmation__order payment_red_not">
                NOTHING HAS BEEN CHARGED
            </div>

            <!-- TITLE -->
            <h1 class="payment-confirmation__title"> The payment did not <br>
go through.  </h1>

            <!-- DESCRIPTION -->
            <p class="payment-confirmation__description">
              Your cart is exactly as you left it and no money has left your account. Our payment provider did not complete the transaction, and it is almost always one of the reasons below.
            </p>

            <!-- BUTTONS -->
            <div class="payment-confirmation__actions unsucess_btn_div ">

                <a
                    href="#"
                    class="payment-confirmation__button payment-confirmation__button--primary brn_uncuuse"
                >
                   Try the payment again
                </a>

                <a
                    href="#"
                    class="payment-confirmation__button payment-confirmation__button--secondary brn_uncuuse"
                >
                  Contact us
                </a>

            </div>

        </div>

    </div>

</section>

<section class="next-steps">

    <div class="container px-0">

        <div class="next-steps__inner">

            <h2 class="next-steps__title">
                The usual causes.
            </h2>

            <div class="next-steps__list">

                <!-- ITEM 01 -->
                <article class="next-steps__item">

                    <div class="next-steps__number">
                        No. 01
                    </div>

                    <h3 class="next-steps__heading">
                        The card was declined
                    </h3>

                    <p class="next-steps__text">
                        An issuing bank will sometimes block a first payment to a new merchant. A call to them usually clears it in a minute.
                    </p>

                </article>


                <!-- ITEM 02 -->
                <article class="next-steps__item">

                    <div class="next-steps__number">
                        No. 02
                    </div>

                    <h3 class="next-steps__heading">
                        A detail did not match
                    </h3>

                    <p class="next-steps__text">
                       If the billing address or postcode does not match what the bank holds, the payment fails at the provider.
                    </p>

                </article>


                <!-- ITEM 03 -->
                <article class="next-steps__item">

                    <div class="next-steps__number">
                        No. 03
                    </div>

                    <h3 class="next-steps__heading">
                        The session timed out
                    </h3>

                    <p class="next-steps__text">
                        If the secure page sat open too long the provider ends the session. Starting again is safe.
                    </p>

                </article>

            </div>

        </div>

        <div class="lower_unsucces_box">
            <h3 class="red_typo">
                IF IT KEEPS FAILING
            </h3>

            <p class="beloww_line">
                Send us a message and we will invoice you directly instead. Quote the order reference on screen and we will pick it up from there. We never see or store your card details, so there is nothing on our side to correct.
            </p>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>