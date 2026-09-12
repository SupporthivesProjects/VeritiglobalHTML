<?php include 'includes/header.php'; ?>

<!-- Section 1 Start -->
<section class="faq_s1">
    <div class="faq_c1 container">
        <div class="chapter" data-reveal="write">
            <div class="rule rule--heavy"></div>
            <div class="faq_s1top">
                <p class="faq_s1topleft">CHAPTER 01</p>
                <p class="faq_s1topright">CONTACT</p>
            </div>
            <div class="rule" style="--sd:120ms"></div>
        </div>
        <div class="faq_s1bottom" data-reveal="write">
            <h1 class="faq_s1bottomleft" data-write>Tell us what needs<br>translating.</h1>
            <p class="faq_s1bottomright" data-write="word">If you already know the service you need, upload the document instead and the price appears in the same session.</p>
        </div>
    </div>
</section>
<!-- Section 1 End -->

<!-- Section 2 Start -->
<section class="contact_s2">
    <div class="contact_c2 container">
        <div class="contact_s2left">
            <div class="first_last">
                <div class="cont_textboxbar">
                    <label class="contact_label">Full name</label>
                    <input type="text" class="form-control contact_textbox" id="" placeholder="Amelia Hartley" required>
                    <div class="contact_error">Enter a valid value before continuing.</div>
                </div>
                <div class="cont_textboxbar">
                    <label class="contact_label">Email address</label>
                    <input type="email" class="form-control contact_textbox" id="" placeholder="a.hartley@outlook.com" required>
                    <div class="contact_error">Enter a valid value before continuing.</div>
                </div>
            </div>
            <div class="first_last">
                <div class="cont_textboxbar">
                    <label class="contact_label">Phone number (optional)</label>
                    <input type="number" class="form-control contact_textbox" id="" placeholder="+44 7700 900142" required>
                    <div class="contact_error">Enter a valid value before continuing.</div>
                </div>
                <div class="cont_textboxbar">
                    <label class="contact_label">What do you need?</label>
                    <select class="form-select contact_textbox contact_select" id=""  required>
                        <option value="" selected disabled>
                            Certified translation
                        </option>
                        <option value="certified-translation">
                            Certified translation
                        </option>
                        <option value="standard-translation">
                            Standard translation
                        </option>
                        <option value="document-translation">
                            Document translation
                        </option>
                        <option value="other">
                            Other
                        </option>
                    </select>
                    <div class="contact_error">Enter a valid value before continuing.</div>
                </div>
            </div>
            <div class="first_last">
                <div class="cont_textboxbar">
                    <label class="contact_label">Your message</label>
                    <textarea class="form-control contact_textbox contact_textarea" id="" placeholder="Tell us what the document is, the language pair, and when you need it" required></textarea>
                    <div class="contact_error">Enter a valid value before continuing.</div>
                </div>
            </div>
            <div class="c-checkboxR">
                <div class="c-divR">
                    <label class="d-flex justify-content-center justify-content-lg-start">
                        <input type="checkbox" id="terms" name="terms">
                        <label for="terms"></label>
                    </label>
                </div>
                <div class="c-textR">
                    <span class="login_strongR">By ticking this box, you agree to the
                        <a href="" class="link_re_globalR">Terms & Conditions</a> & 
                        <a href="" class="link_re_globalR">Privacy Policy</a>.
                    </span>
                </div>
            </div>
            <img src="./img/recaptcha.png">
            <button type="button" class=" btn faq_s3btnred" id="submitContactForm">Send my enquiry</button>
        </div>
       <div class="contact_s2right">
        <div class="contact_s2rightcard">
            <p class="cdetail_title">EMAIL</p>
            <p class="cdetail_subtitle">support@veritiglobal.com</p>
        </div>
        <div class="contact_s2rightcard">
            <p class="cdetail_title">REGISTERED OFFICE</p>
            <p class="cdetail_subtitle">Veriti Global Ltd London, United Kingdom</p>
        </div>
        <div class="contact_s2rightcard">
            <p class="cdetail_title">REPLY TIME</p>
            <p class="cdetail_subtitle">One working day, Monday to Friday</p>
        </div>
        <div class="contact_s2rightcard">
            <p class="cdetail_title">ALREADY DECIDED?</p>
            <p class="cdetail_subtitle">Upload the document and the price and delivery date appear before you commit.</p>
            <button type="button" class="btn contact_btn">Request a translation</button>
        </div>
       </div>
    </div>
</section>
<!-- Section 2 End -->


<!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered cont_modaldialog">
        <div class="modal-content cont_modalmain">
            <div class="modal-body cont_modalbody" data-reveal="write">
                <label class="success_modal_small">MESSAGE SENT</label>
                <h2 id="successModalLabel" data-write>Thank, we have it.</h2>
                <p data-write="word">We will reply to hello@outlook.com. If your question is about an order you have already placed, include the reference and we can pick it up from there.</p>
                <button type="button" class=" btn faq_s3btnred faq_s3btnredmodal" id="submitContactForm">Back to the homepage</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<!-- JS FOR Validation -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const formArea = document.querySelector(".contact_s2left");
        const fields = formArea.querySelectorAll('input.contact_textbox, textarea.contact_textbox, select.contact_textbox');
        const submitButton = document.getElementById("submitContactForm");
        const successModal = new bootstrap.Modal(document.getElementById("successModal"));

        submitButton.addEventListener("click", function () {
            let isValid = true;

            fields.forEach(function (field) {
                if (field.hasAttribute("required")) {
                    if (!field.checkValidity()) {
                        field.classList.add("is-invalid");
                        isValid = false;
                    } else {
                        field.classList.remove("is-invalid");
                    }
                }
            });

            if (isValid) {
                successModal.show();
            }
        });

        fields.forEach(function (field) {
            field.addEventListener("input", function () {
                if (field.checkValidity()) {
                    field.classList.remove("is-invalid");
                }
            });

            field.addEventListener("change", function () {
                if (field.checkValidity()) {
                    field.classList.remove("is-invalid");
                }
            });
        });
    });
</script>