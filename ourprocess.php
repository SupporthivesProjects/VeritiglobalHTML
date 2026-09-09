<?php include 'includes/header.php'; ?>

<!-- Section 1 Start -->
<section class="faq_s1">
    <div class="faq_c1 container">
        <div class="chapter" data-reveal="write">
            <div class="rule rule--heavy"></div>
            <div class="faq_s1top">
                <p class="faq_s1topleft">CHAPTER 01</p>
                <p class="faq_s1topright">FAQS</p>
            </div>
            <div class="rule" style="--sd:120ms"></div>
        </div>
        <div class="faq_s1bottom" data-reveal="write">
            <h1 class="faq_s1bottomleft mobile_none" data-write>The questions that come<br>before the first order.</h1>
            <h1 class="faq_s1bottomleft desktop_none" data-write>The questions that come before the first order.</h1>
            <p class="faq_s1bottomright" data-write="word">If the answer you need is not here, ask us directly. We reply within one working day.</p>
        </div>
    </div>
</section>
<!-- Section 1 End -->

<!-- Section 2 Start -->
<!-- Section 2 End -->

<!-- Section 3 Start -->
<section class="faq_s3">
    <div class="faq_c3 container" data-reveal="write">
        <h1 class="faq_s3title" data-write>Still not sure which one you need?</h1>
        <p class="faq_s3subtitle" data-write="word">Send the document and we will tell you which service it needs before you pay for anything.</p>
        <div class="faq_s3btnbar">
            <button type="button" class=" btn faq_s3btnred">Request a translation</button>
            <button type="button" class=" btn faq_s3btntrans">Contact us</button>
        </div>
    </div>
</section>
<!-- Section 3 End -->

<?php include 'includes/footer.php'; ?>
<!-- AccordionJS -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const accordionItems = document.querySelectorAll(".faq_accordion .accordion-item");
        const sidebarItems = document.querySelectorAll(".faq_s2leftitem");
        accordionItems.forEach(function (item) {
            const collapse = item.querySelector(".accordion-collapse");
            collapse.addEventListener("show.bs.collapse", function () {
                const category = item.getAttribute("data-category");
                /* Remove active from all sidebar items */
                sidebarItems.forEach(function (sidebarItem) {
                    sidebarItem.classList.remove("active");
                });
                /* Add active to matching sidebar item */
                const activeSidebar = document.querySelector(
                    '.faq_s2leftitem[data-category="' + category + '"]'
                );
                if (activeSidebar) {
                    activeSidebar.classList.add("active");
                }
            });
        });
    });
</script>