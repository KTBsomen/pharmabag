<!DPCTYPE html>
    <html lang="en">

    <head>

        <title>Admin </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />

        <!--plugins-->
        <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
        <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
        <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

        <!--    <link href="assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />-->
        <link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/icons.css" rel="stylesheet">
        <link href="assets/fonts/fontawesome/fontawesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- loader-->
        <link href="assets/css/pace.min.css" rel="stylesheet" />

        <!--Theme Styles-->
        <link href="assets/css/dark-theme.css" rel="stylesheet" />
        <link href="assets/css/light-theme.css" rel="stylesheet" />
        <link href="assets/css/semi-dark.css" rel="stylesheet" />
        <link href="assets/css/header-colors.css" rel="stylesheet" />

    </head>

    <body>
<div class="wrapper">

    <header class="top-header">
    <nav class="navbar navbar-expand gap-3">
        <div class="mobile-toggle-icon fs-3">
            <i class="bi bi-list"></i>
        </div>
        <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
            <input class="form-control" type="text" placeholder="Type here to search">
            <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
        </form>
        <div class="top-navbar-right ms-auto">
           
            <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                    <a class="nav-link" href="#">
                        <div class="">
                            <i class="bi bi-search"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center">
                            <img src="assets/images/avatars/avatar-1.png" class="user-img" alt="">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                                        <small class="mb-0 dropdown-user-designation text-secondary">Seller</small>
                                        <small class="mb-0 dropdown-user-designation badge alert-success ">Verified</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="user-profile.php">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-person-fill"></i></div>
                                    <div class="ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>                        
                        <li>
                            <a class="dropdown-item" href="">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-lock-fill"></i></div>
                                    <div class="ms-3"><span>Logout</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown dropdown-large">
    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
        <div class="messages">
            <span class="notify-badge">5</span>
            <i class="bi bi-chat-right-fill"></i>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end p-0">
        <div class="p-2 border-bottom m-2">
            <h5 class="h5 mb-0">Messages</h5>
        </div>
        <div class="header-message-list p-2">
            <a class="dropdown-item" href="#">
                <div class="d-flex align-items-center">
                    <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                    <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="p-2">
            <div>
                <hr class="dropdown-divider">
            </div>
            <a class="dropdown-item" href="tickets-pending.php">
                <div class="text-center">View All Messages</div>
            </a>
        </div>
    </div>
</li>
                <li class="nav-item dropdown dropdown-large">
    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
        <div class="notifications">
            <span class="notify-badge">8</span>
            <i class="bi bi-bell-fill"></i>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end p-0">
        <div class="p-2 border-bottom m-2">
            <h5 class="h5 mb-0">Notifications</h5>
        </div>
        <div class="header-notifications-list p-2">
            <a class="dropdown-item" href="#">
                <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                    <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have received new orders</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="p-2">
            <div>
                <hr class="dropdown-divider">
            </div>
            <a class="dropdown-item" href="notification.php">
                <div class="text-center">View All Notifications</div>
            </a>
        </div>
    </div>
</li>

            </ul>
            
        </div>
    </nav>
</header>

    <aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Pharma Bag</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>

    <!-- ================================================navigation START=================================================-->

    <ul class="metismenu" id="menu">
        <li>
            <a href="index.php">
                <div class="parent-icon"><i class="bi bi-house-fill"></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
                </div>
                <div class="menu-title">Products</div>
            </a>
            <ul>
                <li> <a href="all-products.php"><i class="bi bi-circle"></i> All Products </a>
                </li>
                <!--
                <li> <a href="widgets-data-widgets.html"><i class="bi bi-circle"></i> Add Inventory</a>
                </li>
-->
                <li> <a href="products-categories.php"><i class="bi bi-circle"></i>Category</a>
                </li>
                <li> <a href="products-sub-categories.php"><i class="bi bi-circle"></i>Sub-Category</a>
                </li>

            </ul>
        </li>

        <li>
            <a class="" href="settelement.php">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Settelement</div>
            </a>
        </li>
        <li>
            <a class="" href="profit.php">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Profit</div>
            </a>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
            <ul>
                <li> <a href="orders.php"><i class="bi bi-circle"></i>All Orders</a>
                </li>
                <li> <a href="custom-orders.php"><i class="bi bi-circle"></i>Custom Orders</a>
                </li>
                <li> <a href="cancel-order.php"><i class="bi bi-circle"></i>Canceled Orders</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Tickets &nbsp; &nbsp;
                    <span class="badge bg-primary"> 10 </span>
                </div>
            </a>
            <ul>
                <li> <a href="tickets-pending.php"><i class="bi bi-circle"></i>Pending</a>
                </li>
                <li> <a href="tickets-resolved.php"><i class="bi bi-circle"></i>Resolved</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="notification.php">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Notifications &nbsp; &nbsp;
                    <span class="badge bg-primary"> 10 </span>
                </div>
            </a>

        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-person-fill"></i>
                </div>
                <div class="menu-title">Users &nbsp; &nbsp;
                    <span class="badge bg-primary"> 10 </span>
                </div>
            </a>
            <ul>
                <li> <a href="users-all.php"><i class="bi bi-circle"></i>All User</a>
                </li>
                <li> <a href="users-buyer-requested.php"><i class="bi bi-circle"></i>Buyer Requested</a>
                </li>
                <li> <a href="users-buyer.php"><i class="bi bi-circle"></i>Approved Buyer</a>
                </li>
                <li> <a href="users-seller-requested.php"><i class="bi bi-circle"></i>Seller Requested</a>
                </li>
                <li> <a href="users-seller.php"><i class="bi bi-circle"></i>Approved Seller</a>
                </li>
                <li> <a href="users-admin.php"><i class="bi bi-circle"></i>Admin</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-person-fill"></i>
                </div>
                <div class="menu-title">Marketing &nbsp; &nbsp;
                </div>
            </a>
            <ul>
                <li> <a href="referral-code.php"><i class="bi bi-circle"></i>Referral Codes</a>
                </li>
                <li> <a href="referral-details.php"><i class="bi bi-circle"></i>Referral Details</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Product Requested
                </div>
            </a>
            <ul>
                <li> <a href="requested-product.php"><i class="bi bi-circle"></i>Requested</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="backup.php">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Backup</div>
            </a>        
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-gear"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
                <li> <a href="city.php"><i class="bi bi-circle"></i> City </a>
                <li> <a href="place.php"><i class="bi bi-circle"></i> Place </a>
                <li> <a href="homepage-slider.php"><i class="bi bi-circle"></i> Banner (Home) </a>
                <li> <a href="logo.php"><i class="bi bi-circle"></i> Logos </a>
                <li> <a href="contact-details.php"><i class="bi bi-circle"></i> Contact Details </a> </li>
                <li> <a href="home-testimonials.php"><i class="bi bi-circle"></i> Testimonials </a> </li>
                <li> <a href="home-subscriber.php"><i class="bi bi-circle"></i> Subscriber Settings </a> </li>
                <li> <a href="contactus-leads.php"><i class="bi bi-circle"></i> Contact Us Leads </a> </li>
                <li> <a href="subscribers.php"><i class="bi bi-circle"></i> Subscribers List </a> </li>
                <!--                <li> <a href="payment-settings.php"><i class="bi bi-circle"></i> Payment Settings </a> </li>-->
                <li> <a href="admin-signin.php"><i class="bi bi-circle"></i> Signin </a> </li>
                <li> <a href="admin-signup.php"><i class="bi bi-circle"></i> Signup </a> </li>
                <li> <a href="admin-reset-password.php"><i class="bi bi-circle"></i> Reset Password </a> </li>
                <li> <a href="admin-forgot-password.php"><i class="bi bi-circle"></i> Forgot Password </a> </li>
            </ul>
        </li>
        <li>
            <a class="" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-exclamation-triangle-fill"></i>
                </div>
                <div class="menu-title">Log Out</div>
            </a>
        </li>

    </ul>
    <!--end navigation-->
</aside>

    <!--start content-->
    <main class="page-content">

        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="card shadow-sm border-0 overflow-hidden">
                    <div class="card-header">
                        <div class="text-end">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit1"><i class="fa fa-pencil"></i></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit1"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="profile-avatar text-center">
                            <img src="assets/images/avatars/avatar-1.png" class="rounded-circle shadow" width="120" height="120" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-around mt-3 gap-3">
                            <div class="text-center">
                                <h4 class="mb-0">John Doe</h4>
                                <p class="mb-0"> Seller id / Buyer id
                                    <span class="resolved1"> Pending </span>
                                    <span class="active1"> Active </span>
                                </p>
                            </div>
                        </div>
                        <!--                        business address-->
                        <div class="text-center mt-2">
                            <p class="mb-0 text-secondary">Address, India</p>
                            <p class="mb-0 text-secondary">Address line 2</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="text-end">
                            <a href="" data-bs-toggle="modal" data-bs-target="#edit2"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-start">
                            <h5 class="">Business Details</h5>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                Business Name :
                                <span class="">Apollo Clinic</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                PAN No.
                                <span class="">GGXXXXXXXX</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                GST No.
                                <span class="">GSTIN********</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                Referral Code.
                                <span class="">#448445</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                D.L. No. 20B
                                <span class="">LIC********</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                Valid Till
                                <span class="">27-05-2023</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                D.L. No. 21B
                                <span class="">LIC********</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                Valid Till
                                <span class="">27-05-2023</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="text-end">
                            <a href="" data-bs-toggle="modal" data-bs-target="#edit3"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-start">
                            <h5 class="">Bank Details</h5>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Account Number
                            <span class="">8985XXXXXXX</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            IFSC Code. :
                            <span class="">XXXX****</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Bank Name :
                            <span class="">Swiss Bank</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Branch Name :
                            <span class="">Delhi</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Account Holder Name :
                            <span class="">Chota Bheem</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-lg-7">
                <div class="card shadow-sm border-0">
                    <div class="card-header">
                        <div class="text-end">
                            <a href="" data-bs-toggle="modal" data-bs-target="#edit4"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="mb-0">Licence Details</h5>
                        <hr>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">D.L. No. 20B</h6>
                            </div>
                            <div class="card-body">
                                <img src="assets/images/drag_lic/1.png" alt="" width="100%">
                            </div>
                        </div>
                        <hr>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">D.L. No. 21B</h6>
                            </div>
                            <div class="card-body">
                                <img src="assets/images/drag_lic/1.png" alt="" width="100%">
                            </div>
                        </div>
                        <hr>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">Cancelled Cheque</h6>
                            </div>
                            <div class="card-body">
                                <img src="assets/images/drag_lic/2.png" alt="" width="100%">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--end row-->

    </main>
    <!--end page main-->

    <!--    profile edit1 modal-->
    <div class="modal fade" id="edit1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Edit Profile name, address
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value="John Doe" required>
                        </div>
                        <div class="mb-3">
                            <label>Address Line 1</label>
                            <input type="text" class="form-control" value="John Doe" required>
                        </div>
                        <div class="mb-3">
                            <label>Address Line 2</label>
                            <input type="text" class="form-control" value="John Doe" required>
                        </div>

                        <input id="image-uploadify" type="file" accept="image/*,.pdf" multiple>

                        <input type="submit" value="submit" name="submit" class="form-control btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--    profile edit Business Details modal-->
    <div class="modal fade" id="edit2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Edit Business Details
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="mb-3">
                            <label>Business Name :</label>
                            <input type="text" class="form-control" value="Apollo Clinic" required>
                        </div>
                        <div class="mb-3">
                            <label>PAN No.</label>
                            <input type="text" class="form-control" value="GGXXXXXXXX" required>
                        </div>
                        <div class="mb-3">
                            <label>GST No.</label>
                            <input type="text" class="form-control" value="GSTIN********" required>
                        </div>
                        <div class="mb-3">
                            <label>Referral Code.</label>
                            <input type="text" class="form-control" value="#448445" required>
                        </div>
                        <div class="mb-3">
                            <label>D.L. No. 20B</label>
                            <input type="text" class="form-control" value="LIC********" required>
                        </div>
                        <div class="mb-3">
                            <label>Valid Till</label>
                            <input type="date" class="form-control" value="27-05-2023" required>
                        </div>
                        <div class="mb-3">
                            <label>D.L. No. 21B</label>
                            <input type="text" class="form-control" value="LIC********" required>
                        </div>
                        <div class="mb-3">
                            <label>Valid Till</label>
                            <input type="date" class="form-control" value="27-05-2023" required>
                        </div>

                        <input type="submit" value="submit" name="submit" class="form-control btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--    profile edit Bank Details modal-->
    <div class="modal fade" id="edit3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Edit Bank Details
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="mb-3">
                            <label>Account Number :</label>
                            <input type="text" class="form-control" value="8985XXXXXXX" required>
                        </div>
                        <div class="mb-3">
                            <label>IFSC Code. :</label>
                            <input type="text" class="form-control" value="XXXX****" required>
                        </div>
                        <div class="mb-3">
                            <label>Bank Name :</label>
                            <input type="text" class="form-control" value="Swiss Bank" required>
                        </div>
                        <div class="mb-3">
                            <label>Branch Name :</label>
                            <input type="text" class="form-control" value="Delhi" required>
                        </div>
                        <div class="mb-3">
                            <label>Account Holder Name :</label>
                            <input type="text" class="form-control" value="Chota Bheem" required>
                        </div>


                        <input type="submit" value="submit" name="submit" class="form-control btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--    profile edit Licence modal-->
    <div class="modal fade" id="edit4">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Upload Licence Picture
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="mb-3">
                            <label>D.L. No. 20B</label>
                            <input type="file" accept="image/*" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>D.L. No. 21B</label>
                            <input type="file" accept="image/*" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Canceled Cheque</label>
                            <input type="file" accept="image/*" class="form-control">
                        </div>

                        <input type="submit" value="submit" name="submit" class="form-control btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>


        <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">Theme Variation</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
                    <label class="form-check-label" for="LightTheme">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                    <label class="form-check-label" for="DarkTheme">Dark</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
                    <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
                    <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                </div>
                <hr />
                <h6 class="mb-0">Header Colors</h6>
                <hr />
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator headercolor1" id="headercolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor2" id="headercolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor3" id="headercolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor4" id="headercolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor5" id="headercolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor6" id="headercolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor7" id="headercolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor8" id="headercolor8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    </div>

    <!-- Bootstrap bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/pace.min.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>

    <script src="assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
    <script src="assets/js/form-file-upload.js"></script>
    <!--app-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/index.js"></script>

    <script src="assets/mainn.js"></script>

    <!--    pdf-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>

    <script>
        new PerfectScrollbar(".best-product")

    </script>

    <script>
        
        $(document).ready(function() {
            $.ajax({
                url: "json/country.json",
                type: "GET",
                success: function(data) {
                    $.each(data, function(key, value) {
                        $("#countries").append("<option>" + value.name + "</option>");
                    });
                }
            });
        });

    </script>

    </body>

    </html>
