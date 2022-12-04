
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pharmabag</title>

    <!-- FAVICON -->
    <link rel="icon" href="image/logo/favicon.png">

    <!-- FONTS -->
    <link rel="stylesheet" href="fonts/icofont/icofont.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="fonts/icons/fa.css">

    <!-- VENDOR -->
    <link rel="stylesheet" href="vendor/venobox/venobox.min.css">
    <link rel="stylesheet" href="vendor/slickslider/slick.min.css">
    <link rel="stylesheet" href="vendor/niceselect/nice-select.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/user-auth.css">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/product-details.css">

    <!--        <link rel="stylesheet" href="css/wallet.css">-->
</head>

<body>
    <div class="backdrop"></div>
    <a class="backtop fas fa-arrow-up" href="#"></a>
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <ul class="header-top-list header-top-list-left">
                    <!--                    <li><a href="">Chat with us</a></li>-->
                    <li><a href="tel:+420336775664">+420 336 775 664</a></li>
                    <li><a href="mailto:info@pharmabag.in">info@pharmabag.in</a></li>
                </ul>
            </div>

            <div class="col-md-12 col-lg-6">
                <ul class="header-top-list header-top-list-right">
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="help.php">Help</a></li>
                    <li><a href="about-us.php">About us</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group">
                <button class="header-user">
                    <!-- <img src="images/user.png" alt="user"> -->
                    <i class="fa fa-bars"></i>
                </button>
                <a href="index.php">
                    <img src="image/logo/logo-edited.png" alt="logo"></a>
                <button class="header-src"><i class="fas fa-search"></i></button>
            </div>

            <a href="index.php" class="header-logo">
                <img src="image/logo/logo-edited.png" alt="logo">
            </a>

            <form class="header-form">
                <div class="input-group">
                    <div style="width:30%">
                        <select name="" id="" class="form-control">
                            <option value="" selected>All categories</option>
                            <option value="">Ethical</option>
                            <option value="">Generic</option>
                            <option value="">OTC</option>
                            <option value="">Category</option>
                            <option value="">Ayurvedic</option>
                            <option value="">Surgical</option>
                            <option value="">Critical Care</option>
                            <option value="">Others</option>
                        </select>
                    </div>
                    <div class="d-flex" style="width:70%">
                        <input type="text" placeholder="Search anything..." class="w-100">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>

            <div class="header-widget-group">
                <div class="dropdown">
                    <a href="" class="header-widget">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-position-list">
                        <li><a data-bs-toggle="modal" data-bs-target="#login-popup">login</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="wishlist.php">Wishlist</a></li>
                        <li><a href="#">Logout</a></li>
                        <li><a href="pharmabag-seller/index.php">Seller</a></li>
                        <li><a href="pharmabag-admin/index.php">Admin</a></li>
                        <!-- <li><a href="change-password.html">change password</a></li> -->
                    </ul>
                </div>

                <a href="notification.php" class="header-widget" title="Wishlist">
                    <i class="fas fa-bell"></i>
                    <sup>2</sup>
                </a>
                <button class="header-widget header-cart" title="Baglist">
                    <i class="fas fa-shopping-basket"></i>
                    <sup>9+</sup>
                </button>
            </div>

        </div>
    </div>
</header>

<!--login popup-->

<div class="modal fade" id="login-popup">
    <div class="modal-dialog">
        <div class="modal-content">
            <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
            <div class="modal-body">
                <div class="user-form-card">

                    <div class="user-form">
                        <!--
                        <ul class="user-form-social">
                            <li class="text-center text-primary">Social Login</li>
                            <li>
                                <hr>
                            </li>

                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>login with facebook</a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>login with twitter</a></li>
                            <li><a href="#" class="google"><i class="fab fa-google"></i>login with google</a></li>
                        </ul>
                        <div class="user-form-divider">
                            <p>or</p>
                        </div>
-->
                        <div class="user-form">

                            <ul class="nav nav-pills" role="tablist" id="nav-pill-background">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="pill" href="#buyer"> Buyer </a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill" href="#seller"> Seller </a> </li>
                            </ul>

                        </div>

                        <div class="tab-content mt-4">

                            <div class="tab-pane active" id="buyer">
                                <div class="user-form">

                                    <ul class="nav nav-pills" role="tablist" id="nav-pill-background">

                                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="pill" href="#email1"> Email or User Id </a> </li>

                                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill" href="#phonenumber"> Phone Number </a> </li>

                                    </ul>

                                    <!--                            tab items-->

                                    <div class="tab-content mt-4">

                                        <div class="tab-pane active" id="email1">
                                            <form class="user-form">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Enter your Registered email or user id">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" id="check">
                                                    <label class="form-check-label" for="check">Remember Me</label>
                                                </div>
                                                <div class="form-button">
                                                    <button type="submit" value="submit">login</button>
                                                    <p>Forgot your password?<a href="reset-password.php">reset here</a></p>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade" id="phonenumber">
                                            <form class="user-form">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Enter your Registered Phone Number">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Enter OTP">
                                                </div>
                                                <div class="form-button">
                                                    <button type="submit" value="submit">login</button>
                                                    <p>Resend <a href="reset-password.php"> OTP </a></p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane" id="seller">

                                <div class="user-form">

                                    <ul class="nav nav-pills" role="tablist" id="nav-pill-background">

                                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="pill" href="#email1"> Email or User Id </a> </li>

                                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill" href="#phonenumber"> Phone Number </a> </li>

                                    </ul>

                                    <!--                            tab items-->

                                    <div class="tab-content mt-4">

                                        <div class="tab-pane active" id="email1">
                                            <form class="user-form">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Enter your Registered email or user id">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" id="check">
                                                    <label class="form-check-label" for="check">Remember Me</label>
                                                </div>
                                                <div class="form-button">
                                                    <button type="submit" value="submit">login</button>
                                                    <p>Forgot your password?<a href="reset-password.php">reset here</a></p>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade" id="phonenumber">
                                            <form class="user-form">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Enter your Registered Phone Number">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Enter OTP">
                                                </div>
                                                <div class="form-button">
                                                    <button type="submit" value="submit">login</button>
                                                    <p>Resend <a href="reset-password.php"> OTP </a></p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="user-form-remind mb-5">
                    <p>Don't have any account?<a href="register.php">register here</a></p>
                    <p>Login as a <a href=""> Seller</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--=====================================
                    HEADER PART END
        =======================================-->
<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">

                        <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">Ethical</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="megamenu-wrap">
                                            <div class="row">
                                                <ul class="megamenu-list row">
                                                    <li class="col-6 col-md-3"><a href="">Syrups</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Capsules</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Creams</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Lotions</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Ointments</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Suppositories</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Drops</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Inhalers</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Injections</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Tablets</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Powders/Granules</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">Generic</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="megamenu-wrap">
                                            <div class="row">

                                                <ul class="megamenu-list row">
                                                    <li class="col-6 col-md-3"><a href="">Syrups</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Capsules</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Creams</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Lotions</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Ointments</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Suppositories</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Drops</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Inhalers</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Injections</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Tablets</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Powders/Granules</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">OTC</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="megamenu-wrap">
                                            <div class="row">

                                                <ul class="megamenu-list row">
                                                    <li class="col-6 col-md-3"><a href="">Syrups</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Capsules</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Creams</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Lotions</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Ointments</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Suppositories</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Drops</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Inhalers</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Injections</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Tablets</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Powders/Granules</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">Ayurvedic</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="megamenu-wrap">
                                            <div class="row">

                                                <ul class="megamenu-list row">
                                                    <li class="col-6 col-md-3"><a href="">Syrups</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Capsules</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Creams</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Lotions</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Ointments</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Suppositories</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Drops</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Inhalers</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Injections</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Tablets</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Powders/Granules</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">Surgical</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="megamenu-wrap">
                                            <div class="row">

                                                <ul class="megamenu-list row">
                                                    <li class="col-6 col-md-3"><a href="">General Surgical</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Gynecology</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Ortho rehabs</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Disposable</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Catheter</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Others</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">Critical Care</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="megamenu-wrap">
                                            <div class="row">

                                                <ul class="megamenu-list row">
                                                    <li class="col-6 col-md-3"><a href="">Oncology</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Nephrology</a></li>
                                                    <li class="col-6 col-md-3"><a href="">PFS </a></li>
                                                    <li class="col-6 col-md-3"><a href="">Injections</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Insulins</a></li>
                                                    <li class="col-6 col-md-3"><a href="">HIV</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Others</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">Others</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="megamenu-wrap">
                                            <div class="row">

                                                <ul class="megamenu-list row">
                                                    <li class="col-6 col-md-3"><a href="">Syrups</a></li>
                                                    <li class="col-6 col-md-3"><a href="">Capsules</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<aside class="category-sidebar">
    <div class="category-header">
        <h4 class="category-title">
            <i class="fas fa-align-left"></i>
            <span>categories</span>
        </h4>
        <button class="category-close"><i class="icofont-close"></i></button>
    </div>
    <ul class="category-list">
        <li class="category-item">
            <a class="category-link dropdown-link" href="#">
                <i class="fa-solid fa-pills"></i>
                <span>Ethical</span>
            </a>
            <ul class="dropdown-list">
                <li><a href="#">Syrups</a></li>
                <li><a href="#">Capsules</a></li>
                <li><a href="#">Creams</a></li>
                <li><a href="#">Lotions</a></li>
                <li><a href="#">Ointments</a></li>
                <li><a href="#">Suppositories</a></li>
                <li><a href="#">Drops</a></li>
                <li><a href="#">Inhalers</a></li>
                <li><a href="#">Injections</a></li>
                <li><a href="#">Tablets</a></li>
                <li><a href="#">Powders/Granules</a></li>
            </ul>
        </li>

        <li class="category-item">
            <a class="category-link dropdown-link" href="#">
                <i class="fa-solid fa-pills"></i>
                <span>Generic</span>
            </a>
            <ul class="dropdown-list">
                <li><a href="#">Syrups</a></li>
                <li><a href="#">Capsules</a></li>
                <li><a href="#">Creams</a></li>
                <li><a href="#">Lotions</a></li>
                <li><a href="#">Ointments</a></li>
                <li><a href="#">Suppositories</a></li>
                <li><a href="#">Drops</a></li>
                <li><a href="#">Inhalers</a></li>
                <li><a href="#">Injections</a></li>
                <li><a href="#">Tablets</a></li>
                <li><a href="#">Powders/Granules</a></li>
            </ul>
        </li>

        <li class="category-item">
            <a class="category-link dropdown-link" href="#">
                <i class="fa-solid fa-pills"></i>
                <span>OTC</span>
            </a>
            <ul class="dropdown-list">
                <li><a href="#">Syrups</a></li>
                <li><a href="#">Capsules</a></li>
                <li><a href="#">Creams</a></li>
                <li><a href="#">Lotions</a></li>
                <li><a href="#">Ointments</a></li>
                <li><a href="#">Suppositories</a></li>
                <li><a href="#">Drops</a></li>
                <li><a href="#">Inhalers</a></li>
                <li><a href="#">Injections</a></li>
                <li><a href="#">Tablets</a></li>
                <li><a href="#">Powders/Granules</a></li>
            </ul>
        </li>

        <li class="category-item">
            <a class="category-link dropdown-link" href="#">
                <i class="fa-solid fa-pills"></i>
                <span>Ayurvedic</span>
            </a>
            <ul class="dropdown-list">
                <li><a href="#">Syrups</a></li>
                <li><a href="#">Capsules</a></li>
                <li><a href="#">Creams</a></li>
                <li><a href="#">Lotions</a></li>
                <li><a href="#">Ointments</a></li>
                <li><a href="#">Suppositories</a></li>
                <li><a href="#">Drops</a></li>
                <li><a href="#">Inhalers</a></li>
                <li><a href="#">Injections</a></li>
                <li><a href="#">Tablets</a></li>
                <li><a href="#">Powders/Granules</a></li>
            </ul>
        </li>

        <li class="category-item">
            <a class="category-link dropdown-link" href="#">
                <i class="fa-solid fa-pills"></i>
                <span>Surgical</span>
            </a>
            <ul class="dropdown-list">
                <li><a href="#">General Surgical</a></li>
                <li><a href="#">Gynecology</a></li>
                <li><a href="#">Ortho Rehabs</a></li>
                <li><a href="#">Disposable</a></li>
                <li><a href="#">Catheter</a></li>
                <li><a href="#">Others</a></li>
            </ul>
        </li>

        <li class="category-item">
            <a class="category-link dropdown-link" href="#">
                <i class="fa-solid fa-pills"></i>
                <span>Critical Care</span>
            </a>
            <ul class="dropdown-list">
                <li><a href="#">Oncology</a></li>
                <li><a href="#">Nephrology</a></li>
                <li><a href="#">PFS</a></li>
                <li><a href="#">Injections</a></li>
                <li><a href="#">Insulins</a></li>
                <li><a href="#">HIV</a></li>
                <li><a href="#">Others</a></li>
            </ul>
        </li>

        <li class="category-item">
            <a class="category-link dropdown-link" href="#">
                <i class="fa-solid fa-pills"></i>
                <span>Others</span>
            </a>
            <ul class="dropdown-list">
                <li><a href="#">Others 1</a></li>
            </ul>
        </li>

    </ul>
</aside>
<aside class="cart-sidebar">
    <div class="cart-header">
        <div class="cart-total">
            <i class="fas fa-shopping-basket"></i>
            <span>total item</span><span> (5) </span>
        </div>
        <button class="cart-close"><i class="icofont-close"></i></button>
    </div>
    <ul class="cart-list">
        <li class="cart-item">
            <div class="cart-media">
                <a href="#"><img src="image/products/01.jpg" alt="product"></a>
                <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
            </div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">Product name</a></h6>
                    <p>PTR - ₹ 10.00</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action">
                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="10">
                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                    </div>
                    <h6>₹ 100.00</h6>
                </div>
            </div>
        </li>
    </ul>
    <div class="cart-footer">

        <a class="cart-checkout-btn mb-2" href="cart.php">
            <span class="checkout-label">View on Bag </span>
        </a>

        <a class="btn w-100" href="billing-info.php">
            <span class="">Proceed to Checkout</span>
            <span class="">₹ 112.00</span>
        </a>
    </div>
</aside>
<aside class="nav-sidebar">
    <div class="nav-header">
        <a href="index.php"><img src="image/logo/logo-edited.png" alt="logo"></a>
        <button class="nav-close"><i class="icofont-close"></i></button>
    </div>
    <div class="nav-content">
        <!-- This commentable code show when user login or register -->
        <div class="nav-profile">
            <a class="nav-user" href="#"><img src="image/profile/avatar-1.png" alt="user"></a>
            <h4 class="nav-name"><a href="profile.php">John Doe</a></h4>
        </div>
        <ul class="nav-list">
            <li><a class="nav-link" href="profile.php"><i class="icofont-info-circle"></i>My Profile</a></li>
            <li><a class="nav-link" href="tickets.php"><i class="icofont-support-faq"></i>Create Tickets</a></li>
            <li><a class="nav-link" href="about-us.php"><i class="icofont-info-circle"></i>About us</a></li>
            <li><a class="nav-link" href="contact-us.php"><i class="icofont-contacts"></i>Contact us</a></li>
            <li><a class="nav-link" href="pharmabag-seller/index.php"><i class="icofont-contacts"></i>Login as Seller</a></li>
            <li><a class="nav-link" href="pharmabag-admin/index.php"><i class="icofont-contacts"></i>Login as Admin</a></li>
            <li><a class="nav-link" href="privacy-policy.php"><i class="icofont-warning"></i>Privacy Policy</a></li>
            <li><a class="nav-link" href="terms-of-use.php"><i class="icofont-warning"></i>Terms of use</a></li>
            <li><a class="nav-link" href=""><i class="icofont-logout"></i>Logout</a></li>
        </ul>
    </div>
</aside>
<div class="mobile-menu">
    <a href="index.php" title="Home Page">
        <i class="fas fa-home"></i>
        <span>Home</span>
    </a>
    <button class="cate-btn" title="Category List">
        <i class="fas fa-list"></i>
        <span>category</span>
    </button>
    <button class="cart-btn" title="Cartlist">
        <i class="fas fa-shopping-basket"></i>
        <span>cartlist</span>
        <sup>9+</sup>
    </button>
    <a href="wishlist.php" title="Wishlist">
        <i class="fas fa-heart"></i>
        <span>wishlist</span>
        <sup>0</sup>
    </a>
    <a href="profile.php" title="Compare List">
        <i class="fas fa-user"></i>
        <span>Profile</span>
        <sup>0</sup>
    </a>
</div>


<main class="page-content">

    <section class="inner-section single-banner" style="background: url(https://images.newscientist.com/wp-content/uploads/2019/06/18153152/medicineshutterstock_1421041688.jpg) no-repeat center;">
        <div class="container">
            <h2>check out</h2>
        </div>
    </section>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-md-7 col-12 p-2">

                    <!-- Billing info -->

                    <div class="card p-4">
                        <p class="mb-2"> <b> Delivery Address </b></p>
                        <div class="row">

                            <div class="col-12 col-sm-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="displayAddressDiv">
                                            <ul class="displayAddressUL">
                                                <li>Kamolesh Das</li>
                                                <li>72</li>
                                                <li>Kodalia</li>
                                                <li>KOLKATA, WEST BENGAL 700146</li>
                                                <li>India</li>
                                                <li>Phone: <span dir="ltr"> 9874653898</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-12 p-2">

                    <!-- billing info-payment option -->

                    <div class="card p-4">
                        <p> <b>Pay - </b> <span> ₹ 20120.00 </span></p>

                        <div class="col-12 mt-2">
                            <div class="bill-select">
                                <div> <input type="radio" name="pay1"> &nbsp; Easebuzz <span class="badge alert-success"> Pay Online </span> </div>

                                <div>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="" height="35" viewBox="0 0 144 35">
                                            <defs>
                                                <clipPath id="clip-path">
                                                    <rect id="Rectangle_2336" data-name="Rectangle 2336" width="144" height="35" transform="translate(6292 -233)" fill="none"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="Mask_Group_1" data-name="Mask Group 1" transform="translate(-6292 233)" clip-path="url(#clip-path)">
                                                <g id="Easebuzz_Logo_Unit_-_White_Text" data-name="Easebuzz Logo Unit - White Text" transform="translate(6291.25 -226.348)">
                                                    <path id="Path_7063" data-name="Path 7063" d="M31.885,21.044V2.063A1.137,1.137,0,0,1,33.018.93H45.967l-.015,3.421H36.259V9.235h8.418v3.354H36.229v4.989l9.873.015v3.451Z" fill="#091B49"></path>
                                                    <path id="Path_7064" data-name="Path 7064" d="M51.946,21.322a5.256,5.256,0,0,1-3.451-1.14,3.978,3.978,0,0,1-1.388-3.256,4.107,4.107,0,0,1,1.748-3.586c1.178-.825,3.031-1.253,5.574-1.283l1.786-.03v-.863a1.934,1.934,0,0,0-.585-1.515,2.439,2.439,0,0,0-1.778-.525,3.852,3.852,0,0,0-1.7.42,2.163,2.163,0,0,0-1.08,1.4H47.715A4.033,4.033,0,0,1,49.59,7.495a8.187,8.187,0,0,1,4.449-1.11q3.3,0,4.674,1.223A4.19,4.19,0,0,1,60.1,10.931V21.044H56.388V18.568a4.489,4.489,0,0,1-1.846,2.153A5.351,5.351,0,0,1,51.946,21.322ZM53.3,18.651a3.12,3.12,0,0,0,2.483-1.223,1.9,1.9,0,0,0,.428-1.185V14.112l-1.455.03a7.835,7.835,0,0,0-1.883.24,3.1,3.1,0,0,0-1.418.75,1.855,1.855,0,0,0-.525,1.388,1.916,1.916,0,0,0,.683,1.568A2.59,2.59,0,0,0,53.3,18.651Z" fill="#091B49"></path>
                                                    <path id="Path_7065" data-name="Path 7065" d="M67.754,21.322a8.649,8.649,0,0,1-2.888-.488,5.8,5.8,0,0,1-2.341-1.56A5.122,5.122,0,0,1,61.3,16.505h3.511a2.185,2.185,0,0,0,1.163,1.6,4.351,4.351,0,0,0,3.624.068,1.212,1.212,0,0,0,.72-1.14,1.136,1.136,0,0,0-.428-.93,3.092,3.092,0,0,0-1.388-.525l-2.521-.525a7.023,7.023,0,0,1-3.068-1.365,3.452,3.452,0,0,1-1.163-2.753A4.041,4.041,0,0,1,63.275,7.69a6.816,6.816,0,0,1,4.494-1.305A6.921,6.921,0,0,1,72,7.57a3.889,3.889,0,0,1,1.621,3.279H70.237A1.9,1.9,0,0,0,69.4,9.565a2.882,2.882,0,0,0-1.681-.458,3.573,3.573,0,0,0-1.733.375,1.228,1.228,0,0,0-.683,1.14,1.007,1.007,0,0,0,.555.9,6.113,6.113,0,0,0,1.718.555l2.333.525a5.564,5.564,0,0,1,2.431,1.14,3.9,3.9,0,0,1,1.14,1.583,4.3,4.3,0,0,1,.308,1.47,3.846,3.846,0,0,1-1.681,3.339A7.372,7.372,0,0,1,67.754,21.322Z" fill="#091B49"></path>
                                                    <path id="Path_7066" data-name="Path 7066" d="M78.85,14.78a3.961,3.961,0,0,0,.788,2.626,2.776,2.776,0,0,0,2.258.975,3.636,3.636,0,0,0,1.816-.443,2.37,2.37,0,0,0,1.1-1.463h3.646a4.913,4.913,0,0,1-1.223,2.618,6.428,6.428,0,0,1-2.356,1.658,7.446,7.446,0,0,1-2.881.57,7.612,7.612,0,0,1-3.744-.893,6.357,6.357,0,0,1-2.513-2.543,7.925,7.925,0,0,1-.9-3.864,8.887,8.887,0,0,1,.818-3.879A6.486,6.486,0,0,1,78.024,7.4a7.6,7.6,0,0,1,7.435-.083A5.685,5.685,0,0,1,87.7,9.9a8.908,8.908,0,0,1,.765,3.8V14.78Zm-.015-2.416h5.852a3.512,3.512,0,0,0-.72-2.228,2.588,2.588,0,0,0-2.176-.915,2.736,2.736,0,0,0-1.606.458,3,3,0,0,0-1,1.185A3.247,3.247,0,0,0,78.835,12.364Z" fill="#091B49"></path>
                                                    <path id="Path_7067" data-name="Path 7067" d="M97.853,21.322a5.117,5.117,0,0,1-2.341-.473,4.267,4.267,0,0,1-1.455-1.223,5.6,5.6,0,0,1-.788-1.53v2.948h-3.4V.375h3.271a.8.8,0,0,1,.8.8V8.613a4.235,4.235,0,0,1,1.636-1.568,5.286,5.286,0,0,1,2.678-.653,5.028,5.028,0,0,1,4.186,1.936,8.6,8.6,0,0,1,1.523,5.454,8.931,8.931,0,0,1-1.553,5.492A5.387,5.387,0,0,1,97.853,21.322ZM96.968,18.4a2.658,2.658,0,0,0,2.161-1.073,5.8,5.8,0,0,0,.878-3.616,5.366,5.366,0,0,0-.833-3.309,2.669,2.669,0,0,0-2.236-1.073q-2.982,0-3.008,4.381a6.509,6.509,0,0,0,.75,3.616A2.583,2.583,0,0,0,96.968,18.4Z" fill="#091B49"></path>
                                                    <path id="Path_7068" data-name="Path 7068" d="M110.645,21.322a6.5,6.5,0,0,1-2.581-.54A5.205,5.205,0,0,1,106,19.2a4.09,4.09,0,0,1-.818-2.588V6.662h4.051v9.43a2.2,2.2,0,0,0,.653,1.643,2.619,2.619,0,0,0,1.913.638,2.771,2.771,0,0,0,1.891-.615,2.2,2.2,0,0,0,.705-1.741V6.662H118.4V21.044h-3.526V18.193a3.648,3.648,0,0,1-.945,1.951,3.585,3.585,0,0,1-1.568.915A6.012,6.012,0,0,1,110.645,21.322Z" fill="#091B49"></path>
                                                    <path id="Path_7069" data-name="Path 7069" d="M119.73,21.044V19.161a1.121,1.121,0,0,1,.233-.683L126.8,9.505H120.09V6.662h11.621V8.928l-7.09,9.273h7.127v2.836H119.73Z" fill="#091B49"></path>
                                                    <path id="Path_7070" data-name="Path 7070" d="M132.731,21.044V19.161a1.121,1.121,0,0,1,.233-.683l6.842-8.973h-6.715V6.662h11.621V8.928l-7.09,9.273h7.127v2.836H132.731Z" fill="#091B49"></path>
                                                    <path id="Path_7071" data-name="Path 7071" d="M3.3,9.31H20.249l-1.906,3.466a2.267,2.267,0,0,1-1.988,1.178H.75Z" fill="#85E6C4"></path>
                                                    <path id="Path_7072" data-name="Path 7072" d="M10.211,16.213H27.158l-1.906,3.466a2.267,2.267,0,0,1-1.988,1.178H7.66Z" fill="#6d44e5"></path>
                                                    <path id="Path_7073" data-name="Path 7073" d="M10.211,2.4H27.158L25.253,5.867a2.267,2.267,0,0,1-1.988,1.178H7.66Z" fill="#517CE3"></path>
                                                </g>
                                            </g>
                                        </svg>

                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <div class="bill-select">
                                <div> <input type="radio" name="pay1"> &nbsp; Cash on Delivery </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="35" viewBox="0 0 140 110">

                                        <path class="cls-1" d="M111.83,70.4h10.06a1,1,0,0,1,1,1V95.8a1,1,0,0,1-1,1H111.83a1,1,0,0,1-1-1V71.38a1,1,0,0,1,1-1ZM74.23,41.54a5.71,5.71,0,1,1-4,7,5.71,5.71,0,0,1,4-7Zm34.69,11.67L89.6,70.81l-2.36-2.53L101,55.7l.19-.16a3.28,3.28,0,0,0,.16-4.63L78.94,23.59l3.27-3,26.71,32.62ZM.68,15,9.74,12.6a.93.93,0,0,1,1.13.66l5.89,22a.92.92,0,0,1-.65,1.13L7.05,38.8a.92.92,0,0,1-1.13-.65L0,16.16A.92.92,0,0,1,.68,15ZM14,15.68a1.78,1.78,0,0,1,0-1.14c.38-.95,1.85-1.09,2.76-1.34a13.34,13.34,0,0,0,2.72-1,32.71,32.71,0,0,0,3.62-2.38C26.1,7.74,28.89,6,31.81,4,38.31-.52,36-.51,44.3.65A85.94,85.94,0,0,1,54.88,2.82a5.93,5.93,0,0,1,1.41.54,5.62,5.62,0,0,1,1.21,1c4,3.37,7.51,6.9,11,10.47,1.18,1.26,1.87,2.57,1.57,3.59-1.23,4.2-6.56.12-11.73-2.15-2.17-1-5-1.58-7.44-2.47-3-.41-4.53-1.14-7.57-1-4.53.8-3.2,7.25,2.69,5.92,4-.9,13.09.5,16.25,3.19,3,2.5,2.59,5.85-1.78,6.9l-3.81.29c-6.07.47-6,.2-11.68,2.93-3.07,1.47-6.29,3-9.79,3.27-2.12.17-3.41-.36-5.59-1.25a16.31,16.31,0,0,0-3.42-1.24,10.9,10.9,0,0,0-2.94-.42c-1.48,0-3.3,1-4.43,0a2.28,2.28,0,0,1-.65-1.09L14,15.68Zm58.59,6.54L99.38,53.37,78.78,72.14l-29-33.67,6.33-5.76,5.4-.42.47-.08a9.67,9.67,0,0,0,3.78-1.74l-6.44,5.87a4.12,4.12,0,0,1-.27,5.82L76,62.55a4.12,4.12,0,0,1,5.81.27l8.14-7.43a4.11,4.11,0,0,1,.27-5.81l-16.9-20.4h0a4.11,4.11,0,0,1-5.82-.27l-1,.92a3.58,3.58,0,0,0,.26-.29A5.94,5.94,0,0,0,68,27a6,6,0,0,0,0-2.8,7.27,7.27,0,0,0-.31-1c2,.4,3.65.19,4.89-1Zm35.06,72.43V72.6H97.69c-4.2.75-8.4,3-12.61,5.68h-7.7c-3.49.21-5.32,3.74-1.93,6.06,2.7,2,6.27,1.87,9.92,1.55,2.52-.13,2.63,3.26,0,3.27-.91.07-1.9-.15-2.77-.15C78,89,74.29,88.14,72,84.54l-1.15-2.7L59.37,76.16c-5.73-1.89-9.8,4.11-5.58,8.29a150.31,150.31,0,0,0,25.52,15c6.33,3.84,12.65,3.71,19,0l9.33-4.82Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- confirmation -->

                        <div class="col-12 mt-4">
                            <div>
                                <input type="checkbox" name="confirmation"> I agree with our <a href="">terms and conditions</a> and <a href="">privacy policy</a>.
                            </div>
                        </div>

                        <div class="mt-3">
                            <button class="btn btn-primary border-0">
                                <i class="fas fa-shopping-basket"></i>
                                <span>Complete Order</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

<!--=====================================
                     FOOTER PART START
        =======================================-->
<footer class="footer-part">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xl-3">
                <div class="footer-widget">
                    <a class="footer-logo" href="index.php">
                        <img src="image/logo/logo-edited.png" alt="logo">
                    </a>
                    <p class="footer-desc">Pharmabag: soluzioni intelligenti per il vostro packaging !
                        Azienda leader in Italia nei sevizi per</p>
                    <ul class="footer-social">
                        <li><a class="icofont-facebook" href="#"></a></li>
                        <li><a class="icofont-twitter" href="#"></a></li>
                        <li><a class="icofont-linkedin" href="#"></a></li>
                        <li><a class="icofont-instagram" href="#"></a></li>
                        <!--                        <li><a class="icofont-pinterest" href="#"></a></li>-->
                    </ul>
                </div>
            </div>

            <div class="col-sm-4 col-6 col-xl-2">
                <div class="footer-widget">
                    <h3 class="footer-title">Quick Links</h3>
                    <div class="footer-links">
                        <ul>
                            <li><a href="terms-of-use.php">Terms & Conditions</a></li>
                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                            <li><a href="return-cancellation.php">Return Policy</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4 col-6 col-xl-2">
                <div class="footer-widget">
                    <h3 class="footer-title">Read More</h3>
                    <div class="footer-links">
                        <ul>
                            <li><a href="login.php">Login/Register</a></li>
                            <li><a href="order-details.php">Track Order</a></li>
                            <li><a href="shop.php">New Arrivals</a></li>
                            <li><a href="area-search.php">Nearest Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-12 col-xl-3">
                <div class="footer-widget contact">
                    <h3 class="footer-title">contact us</h3>
                    <ul class="footer-contact">
                        <li><a href="mailto:info@pharmabag.in">
                                <p>
                                    <i class="icofont-ui-email"></i>
                                    <span>info@pharmabag.in</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <p>
                                <i class="icofont-ui-touch-phone"></i>
                                <a href="tel:+420336775664">
                                    <span> +420 336 775 664</span>
                                </a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="icofont-location-pin"></i>
                                <span> 13A/4, Ariff Road, Ultadanga Main Road, Kolkata - 700067, West Bengal </span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-12 col-xl-2">
                <div class="footer-widget">
                    <h3 class="footer-title">Download App</h3>
                    <div class="footer-app">
                        <a href="#"><img src="image/google-play.png" alt="google"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer-bottom">
                    <p class="footer-copytext">&copy; 2022 Pharmabag | All right reserved</p>
                    <div class="footer-card">
                        <a><img src="image/payments.png" alt="payment"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--=====================================
                      FOOTER PART END
        =======================================-->

<script src="vendor/bootstrap/jquery-1.12.4.min.js"></script>
<script src="vendor/bootstrap/popper.min.js"></script>
<script src="vendor/bootstrap/bootstrap.min.js"></script>
<script src="vendor/countdown/countdown.min.js"></script>
<script src="vendor/niceselect/nice-select.min.js"></script>
<script src="vendor/slickslider/slick.min.js"></script>
<script src="vendor/venobox/venobox.min.js"></script>

<!-- CUSTOM -->
<script src="js/nice-select.js"></script>
<script src="js/countdown.js"></script>
<script src="js/accordion.js"></script>
<script src="js/venobox.js"></script>
<script src="js/slick.js"></script>
<script src="js/main.js"></script>
<!--=====================================
                    JS LINK PART END
        =======================================-->

<script>

    $(document).ready(function() {
        $(".fa-heart").click(function() {
            // $("#wish-icon").css("font-weight", "900");
            $(".fa-heart").toggleClass("fa-heart2");
        });
    });

</script>

<script>
    
    $(".digit").keyup(function() {
        $(this).next('input').focus();
    });

    let inputs = document.getElementById('inputs');

    function otp() {
        inputs.style.display = "block";
    }

    let reg = document.getElementById('reg');

    function verify() {
        reg.style.display = "flex";
    }
    
    let inputs1 = document.getElementById('inputs1');

    function otp1() {
        inputs1.style.display = "block";
    }

    let reg1 = document.getElementById('reg1');

    function verify1() {
        reg1.style.display = "flex";
    }

</script>

</body>

</html>
