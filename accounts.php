<?php include 'includes/header.php'; ?>

<section class="account-top">
    <div class="account-top-inner container">
        <div class="a-top-bline">
            <p class="r-text">
                CHAPTER 01
            </p>
            <p class="g-text">
                ACCOUNT DETAILS
            </p>
        </div>
        <div class="a-bottom-texts">
            <h1>
                Your details.
            </h1>
            <div class="a-bottom-inner">
                <div class="con-texts">
                    <p class="r-text">
                        SIGNED IN AS
                    </p>
                    <span>
                        Amelia Hartley
                    </span>
                </div>
                <div class="con-texts">
                    <p class="r-text">
                        EMAIL
                    </p>
                    <span>
                        a.hartley@outlook.com
                    </span>
                </div>
                <div class="con-texts">
                    <p class="r-text">
                        MEMBER SINCE
                    </p>
                    <span>
                        November 2025
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="account-tabs">
    <div class="account-tabs-inner container">
        <div class="tabs-buttons">
            <button class="tab-btn active" data-tab="account">
            <span class="dot"></span>
            Account details
            </button>

            <button class="tab-btn" data-tab="translations">
                <span class="dot"></span>
                Your translations
            </button>

            <button class="tab-btn" data-tab="orders">
                <span class="dot"></span>
                Order history
            </button>
        </div>
        <div class="tabs-mob">
    <div class="select-wrapper">
        <span class="dot"></span>

        <select id="mobileTabSelect" class="select-mob form-select">
            <option value="account">Account details</option>
            <option value="translations">Your translations</option>
            <option value="orders">Order history</option>
        </select>
    </div>
</div>
        <button class="logout-btn">
            Log out
        </button>
    </div>
</section>

<section class="accounts-main">
        <!-- ================= ACCOUNT DETAILS ================= -->

        <div class="tab-content active w-100 container accounts-main-inner" id="account">
            <div class="account-wrapper w-100">
            <!-- LEFT SIDE -->
            <form class="your-details">
                <h1 class="yd-head">
                    YOUR DETAILS
                </h1>
                <div class="y-det-line">
                    <div class="your-inp-box">
                        <label for="" class="t-det-inp-label">Full name</label>
                        <input type="text" class="t-det-inp" placeholder="Amelia Hartley">
                    </div>
                    <div class="your-inp-box">
                        <label for="" class="t-det-inp-label">Email address</label>
                        <input type="text" class="t-det-inp" placeholder="a.hartley@outlook.com">
                    </div>
                </div>
                <div class="y-det-line">
                    <div class="your-inp-box">
                        <label for="" class="t-det-inp-label">Phone number</label>
                        <input type="text" class="t-det-inp" placeholder="+44 7700 900142">
                    </div>
                    <div class="your-inp-box">
                        <label for="" class="t-det-inp-label">Date of birth</label>
                        <input type="text" class="t-det-inp" placeholder="14/03/1988">
                    </div>
                </div>
                <div class="y-det-line">
                    <div class="your-inp-box">
                        <label for="" class="t-det-inp-label">Address line 1</label>
                        <input type="text" class="t-det-inp" placeholder="18 Fitzroy Square">
                    </div>
                    <div class="your-inp-box">
                        <label for="" class="t-det-inp-label">Address line 2 (optional)</label>
                        <input type="text" class="t-det-inp" placeholder="Flat, suite or building">
                    </div>
                </div>
                <div class="y-det-line">
                    <div class="your-inp-box">
                        <label for="" class="t-det-inp-label">Town or city</label>
                        <input type="text" class="t-det-inp" placeholder="London">
                    </div>
                    <div class="your-inp-box">
                        <label for="" class="t-det-inp-label">Postcode</label>
                        <input type="text" class="t-det-inp" placeholder="W1T 6EU">
                    </div>
                </div>
                <div class="y-det-line">
                    <div class="your-inp-box">
                        <label for="" class="t-det-inp-label">Country</label>
                        <select class="t-det-inp form-select">
                            <option>United Kingdom</option>
                            <option>India</option>
                            <option>United States</option>
                            <option>Canada</option>
                        </select>
                    </div>
                    <div class="your-inp-box d-md-block d-none">
                        
                    </div>
                </div>
                <button class="sc-red-btn js-button">
                    Save Changes
                </button>
            </form>
            <!-- Right CARD -->
             <div class="password-card">
                <h1 class="yd-head">
                    PASSWORD
                </h1>
                <p class="pass-med">
                    Changing your password signs out every other device on this account. You will stay signed in here.
                </p>
                <button class="change-pass">
                    Change my password
                </button>
                <p class="pass-sm">
                    Invoices keep the billing details they were issued with. Changing anything here applies to your next order only.
                </p>
             </div>
            </div>
        </div>


        <!-- ================= TRANSLATIONS ================= -->
        <div class="tab-content accounts-main-inner container w-100" id="translations">
            <table width="100%">
                <tr style="border-bottom: 2px solid var(--brand-ink, #211E1B);" class="trans-head">
                    <td>
                        <p class="acc-table-head">
                            FILE
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-head">
                            SERVICE
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-head">
                            LANGUAGE PAIR
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-head">
                            DELIVERED
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-head">
                            
                        </p>
                    </td>
                </tr>
                <tr class="trans-data">
                    <td>
                        <p class="acc-table-data">
                            marriage-certificate-EN.docx
                        </p>
                        <span class="acc-table-id">
                            VG-2026-0817
                        </span>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            Certified
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            French to English
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            In progress
                        </p>
                    </td>
                    <td align="right">
                        <p class="acc-table-pending">
                            Pending
                        </p>
                    </td>
                </tr>
                <tr class="trans-data">
                    <td>
                        <p class="acc-table-data">
                            birth-certificate-AR.docx
                        </p>
                        <span class="acc-table-id">
                            VG-2026-0817
                        </span>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            Certified
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            French to English
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            20 Aug 2026
                        </p>
                    </td>
                    <td align="right">
                        <a href="#" class="download-link">Download</a>
                    </td>
                </tr>
            </table>
            

            <!-- empty box -->
             <!-- <div class="empty-box">
                <p class="r-text">
                    NO FILES YET
                </p>
                <h1 class="jss2h">
                    Your first translation lands here.
                </h1>
                <p class="emp-brief">
                    Upload a document and you will see the price and the <br class="d-none md-d-block">
                    delivery date before you commit to anything.
                </p>
                <div class="em-button-box">
                    <a href="" class="js-button">
                        Request a translation
                    </a>
                    <button class="change-pass">
                        See supported documents
                    </button>
                </div>
             </div> -->
            <!-- empty box end-->

        </div>

         <!-- ================= TRANSLATIONS END================= -->



         <!-- ================= ORDER HISTORY ================= -->
    <div class="tab-content accounts-main-inner container w-100" id="orders">

        <table width="100%">
                <tr style="border-bottom: 2px solid var(--brand-ink, #211E1B);" class="trans-head">
                    <td>
                        <p class="acc-table-head">
                            REFERENCE
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-head">
                            DATE
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-head">
                            DOCUMENTS
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-head">
                            STATUS
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-head">
                            TOTAL
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-head">
                            
                        </p>
                    </td>
                </tr>
                <tr class="trans-data">
                    <td>
                        <p class="acc-table-data">
                            VG-2026-0817
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            17 Aug 2026
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            3 documents
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-paid">
                            Paid
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            $332.13
                        </p>
                    </td>
                    <td align="right">
                        <a href="#" class="download-link">Invoice</a>
                    </td>
                </tr>
                <tr class="trans-data">
                    <td>
                        <p class="acc-table-data">
                            VG-2026-0817
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            17 Aug 2026
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            3 documents
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-paid">
                            Paid
                        </p>
                    </td>
                    <td>
                        <p class="acc-table-serv">
                            $332.13
                        </p>
                    </td>
                    <td align="right">
                        <a href="#" class="download-link">Invoice</a>
                    </td>
                </tr>
            </table>

    </div>

</section>


<script>
    document.addEventListener("DOMContentLoaded", function () {

    const tabs = document.querySelectorAll(".tab-btn");
    const contents = document.querySelectorAll(".tab-content");

    tabs.forEach(tab => {

        tab.addEventListener("click", function () {

            const target = this.getAttribute("data-tab");


            // Remove active from all tabs
            tabs.forEach(item => {
                item.classList.remove("active");
            });


            // Remove active from all content
            contents.forEach(content => {
                content.classList.remove("active");
            });


            // Activate clicked tab
            this.classList.add("active");


            // Show corresponding content
            const targetContent = document.getElementById(target);

            if (targetContent) {
                targetContent.classList.add("active");
            }

        });

    });

});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const mobileSelect = document.getElementById("mobileTabSelect");
    const mobileDot = document.querySelector(".dot-mob");

    mobileSelect.addEventListener("change", function () {

        const tabName = this.value;

        // Find the corresponding desktop tab button
        const tabButton = document.querySelector(
            `.tab-btn[data-tab="${tabName}"]`
        );

        if (tabButton) {
            tabButton.click();
        }
    });

});
</script>

<?php include 'includes/footer.php'; ?>