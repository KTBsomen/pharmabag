
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Help</title>

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
                    <p>PTR - ??? 10.00</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action">
                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="10">
                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                    </div>
                    <h6>??? 100.00</h6>
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
            <span class="">??? 112.00</span>
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
<div class="modal fade" id="product-view">
    <div class="modal-dialog">
        <div class="modal-content">
            <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
            <div class="product-view">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="view-gallery">
                            <div class="view-label-group">
                                <label class="view-label new">new</label>
                                <label class="view-label off">-10%</label>
                            </div>
                            <ul class="preview-slider slider-arrow">
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                            </ul>
                            <ul class="thumb-slider">
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                                <li><img src="image/products/01.jpg" alt="product"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="view-details">
                            <h3 class="view-name">
                                <a href="product-video.html">product name</a>
                            </h3>
                            <div class="view-meta">
                                <p>SKU:<span> 1234567</span></p>
                                <p>Sold by SLS Pharma</p>
                                <p>
                                    <span class="badge bg-danger text-light">Expiry Soon</span>
                                </p>
                            </div>
                            <div class="view-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3 reviews)</a>
                            </div>
                            <!--
                        <h3 class="view-price">
                            <del>$38.00</del>
                            <span>$24.00<small>/per packet</small></span>
                        </h3>
-->
                            <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora
                                magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                fuga</p>

                            <div class="d-flex justify-content-between">
                                <ul>
                                    <li><b>Expiry: </b> Dec 2022</li>
                                    <li><b>Stock: </b>10000</li>
                                    <li><b>Min qty: </b> 100</li>
                                    <li><b>Max qty: </b> 1000</li>
                                </ul>
                                <ul>
                                    <li><b>Medicine Type: </b> Strip </li>
                                    <li><b>Country: </b> India </li>
                                    <li><b>Buy: </b> 100</li>
                                    <li><b>Get: </b> 1</li>
                                    <li><b>GST: </b> 12%</li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li><b>Chemical Combination: </b> Liquid</li>
                                    <li><b>Discount type: </b> same Product Bonus <span> 100 + 1</span> </li>
                                </ul>
                            </div>

                            <div class="view-add-group">

                                <div class="input-group p-price align-items-start f-flex justify-content-between">

                                    <h4 class="view-price">
                                        <span>MRP:</span><span> ???24.00 <br> <small> </small> </span>
                                        <span> </span>
                                    </h4>
                                    <h4 class="view-price">
                                        <span>PTR:</span><span> ???24.00 <br> <small> ???28.00</small> </span>
                                        <span> (Exclusive of GST)</span>

                                    </h4>

                                </div>
                                <form>
                                    <div class="input-group p-price">

                                        <div class="product-action">
                                            <span class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></span>
                                            <input class="action-input" title="Quantity Number" type="number" min="100" max="500" name="quantity" value="1">
                                            <span class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></span>
                                        </div>

                                        <div><input type="checkbox"> Bulk order</div>

                                    </div>

                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>Add to Bag</span>
                                    </button>

                                    <br>
                                    <p style="font-size:12px">*Custom order will work to place order grater then maximum order quantity</p>
                                    <button class="product-add" title="Custom Order" data-bs-toggle="modal" data-bs-target="#customOrder">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>Custom Order</span>
                                    </button>

                                </form>

                                <div class="py-4">
                                    <p>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-heart"></i>

                                        <span>Add to my wish list</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="inner-section single-banner" style="background: url(https://images.newscientist.com/wp-content/uploads/2019/06/18153152/medicineshutterstock_1421041688.jpg) no-repeat center;">
    <div class="container">
        <h2>contact us</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Help</li>
        </ol>
    </div>
</section>

<section class="inner-section contact-part">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary border-0 " data-bs-toggle="modal" data-bs-target="#raise-ticket" id="theme-button">+ Raise a Ticket </a>
            </div>
        </div>
    </div>
<div class="modal fade" id="raise-ticket">
    <div class="modal-dialog bg-white">
        <div class="modal-content">

            <div class="modal-header border-bottom" style="border: 0px solid">
                <span>Raise a Ticket</span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="p-3 row">
                    <form>
                        <div class="row">
                            <div class="col-xxl-6 col-lg-6 col-md-5 col-6">
                                <div class="">
                                    <label class="form-label"> Reason </label> <br>
                                    <select class="form-control">
                                        <option selected=""> Select your reason here</option>
                                        <option value="1">Reason 1</option>
                                        <option value="2">Reason 2</option>
                                        <option value="3">Reason 3</option>
                                        <option value="4">Reason 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-6 col-md-5 col-6">
                                <div class="">
                                    <label class="form-label"> Subject </label> <br>
                                    <input class="form-control" placeholder="" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="form-label"> Message (MAX 150 words) </label> <br>
                            <textarea placeholder="write your comments here" class="form-control"> </textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary border-0" style="width: 100%">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
  
   
    <div class="container p-4 mt-3">
        <div class="accordion" id="accordionExample">

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How to contact with Customer Service?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, eligendi corrupti veritatis inventore facilis sint repudiandae, blanditiis perspiciatis doloribus iure earum nihil, aut quod sapiente magnam laboriosam impedit voluptates odio aspernatur soluta dolores fugiat. Ad!</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        App installation failed, how to update system information?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis soluta esse praesentium incidunt nihil eveniet sequi culpa delectus in quae et nemo dolore, illum alias rem magnam ipsam ab rerum! Quidem expedita officia, magni veniam?</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Website reponse taking time, how to improve?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia debitis dolorum soluta eius, quas iure quam dolores eos quo! Id fuga facere perferendis. Quaerat cumque, ipsa perferendis consequatur commodi quis reiciendis. Culpa rerum et eum.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        How do I create a account?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia debitis dolorum soluta eius, quas iure quam dolores eos quo! Id fuga facere perferendis. Quaerat cumque, ipsa perferendis consequatur commodi quis reiciendis. Culpa rerum et eum.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                        I cannot find an answer to my question!
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia debitis dolorum soluta eius, quas iure quam dolores eos quo! Id fuga facere perferendis. Quaerat cumque, ipsa perferendis consequatur commodi quis reiciendis. Culpa rerum et eum.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

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
