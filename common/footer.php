<footer class="section-p1" style="background: #E3E6F3;">
    <div class="col">
        <div class="text-rainbow-animation">SHOP-GENIE</div>
        <h4>Contact</h4>
        <p> <strong>Address:</strong> Sri Nivasa Reddy Layout, AECS Layout, Marathahalli, Bengaluru, Karnataka 560037
        </p>
        <p> <strong>Phone:</strong> 63 7689 3673 / (+91) 75 4976 5831 </p>
        <p> <strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
        <div class="follow">
            <h4>Follow Us </h4>
            <div class="icon">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-whatsapp"></i>
                <i class="fa fa-youtube"></i>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign-In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="img/pay/app.jpg" alt="">
            <img src="img/pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="img/pay/pay.png" alt="">
    </div>

    <!-- <div class="copyright">
        <p>$ 2023, Tech2 etc - HTML CSS Ecommerce Template</p>
    </div> -->



</footer>
<!-- script to handle popup -->
<script>
$(document).ready(function() {
    $(".swap-button").click(function() {
        $("#login-form").toggle();
        $("#register-form").toggle();
        // if ($("#login-form").is(":visible")) {
        //     $(this).text("Not registered? Click here to sign up.");
        // } else {
        //     $(this).text("Already registered? Click here to login.");
        // }
    });
});
$(document).ready(function() {
    // when the user clicks the button, show the popup
    $(".myBtn").click(function() {
        $("#myModal").show();
    });

    // when the user clicks on the close button or outside the popup, hide the popup
    $(".close, .modal").click(function() {
        $("#myModal").hide();
    });

    // when the user clicks inside the popup, don't hide the popup
    $(".modal-content").click(function(e) {
        e.stopPropagation();
    });
});
</script>

<script src="js/script.js"></script>

</body>



</html>