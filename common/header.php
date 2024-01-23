<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP-GENIE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="pop.css">
    <link rel="stylesheet" href="modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- include jQuery library -->
    <script src="jquery-3.6.0.min.js"></script>
    <style>
    </style>
</head>

<body>
    <section id="header">
        <div class="text-rainbow-animation">SHOP-GENIE</div>
        <div>
            <ul id="navbar">
                <li class='active'><a href="index.php">Home</a></li>
                <!-- <li><a href="shop.php">Shop</a></li> -->
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li> -->
                <li><a href="#" class='myBtn open-btn'><i class="fa fa-user-o"></i></a></li>
                <a href="#" id='close'><i class="fa fa-times"></i></a>

            </ul>
        </div>
        <div id="mobile">
            <!-- <a href="cart.php"><i class="fa fa-shopping-bag"></i></a> -->
            <i id="bar" class="fa fa-outdent"></i>
            <!-- <a href="#" class=" myBtn open-btn"><i class="fa fa-user-o"></i></a> -->
        </div>
    </section>
    <!-- popup -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="form-container">

                <form id='login-form' action="log.php" method="post">
                    <?php if (isset($_GET['error'])) {?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php }?>
                    <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input class="input-field" type="email" placeholder="Email" name="uname" require>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="password" require>
                    </div>

                    <button type="submit" class='btn' id="login-submit">Login</button>
                    <div class='forgot'>
                        <a href="#" class='color'>Forgot Password</a>
                    </div>
                    <div class="swap-button">
                        <a href="#" id="register-button">Don't have an account? Register here</a>
                    </div>
                    <div style="text-align:center;  margin-top: 10px;">
                        <p class="mt text-white">- Sign With -</p>
                        <p class="gap-items-2 mb">
                            <a class="btn-social-icon  btn-facebook color mr" href="#"><i
                                    class="fa fa-facebook"></i></a>
                            <a class="btn-social-icon  btn-twitter color mr" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="btn-social-icon  btn-instagram color mr" href="#"><i
                                    class="fa fa-instagram"></i></a>
                        </p>
                    </div>

                </form>
                <form id="register-form" method="post" action="register.php" style="display: none;">
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Username" name="usrnm" require>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input class="input-field" type="email" placeholder="Email" name="email" require>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="psw" require>
                    </div>
                    <div class="input-container">
                        <i class="fa fa-calendar icon" aria-hidden="true"></i>
                        <input class="input-field color" type="date" placeholder="date of birth" name="dob" require>
                    </div>
                    <div class="input-container">
                        <i class="fa fa-phone icon" aria-hidden="true"></i>
                        <input class="input-field color" type="tel" placeholder="Enter your phone no" name="phoneno"
                            require>
                    </div>
                    <button type="submit" class='btn' name='create' id="rigester-submit">Register</button>

                    <div class="swap-button">
                        <a href="#" id="register-button">Already have an account? Login here</a>
                    </div>
                    <div style="text-align:center;  margin-top: 10px;">
                        <p class="mt text-white">- Sign With -</p>
                        <p class="gap-items-2 mb">
                            <a class="btn-social-icon  btn-facebook color mr" href="#"><i
                                    class="fa fa-facebook"></i></a>
                            <a class="btn-social-icon  btn-twitter color mr" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="btn-social-icon  btn-instagram color mr" href="#"><i
                                    class="fa fa-instagram"></i></a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>