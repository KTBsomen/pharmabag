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
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Inventory</div>

            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Products List</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <div class="row align-items-center m-0">
                    <div class="col-md-3 col-6 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option>All category</option>
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
                    <div class="col-md-3 col-6 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option>All</option>
                            <option>Expired</option>
                            <option>Usable</option>
                            <option>Near Expiry </option>
                        </select>
                    </div>

                    <div class="col-md-3 col-6">
                        <button data-bs-toggle="modal" data-bs-target="#upload" id="theme-button">
                            &#43; Add inventory</button>
                    </div>

                    <div class="col-md-3 col-6">
                    <form class="ms-auto position-relative">
                        <a href="" class="btn btn-primary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#add-csv">Import CSV</a>
                        <a href="" class="btn btn-success btn-sm mt-2">Export CSV</a>
                    </form>
                    </div>

                    <div class="modal fade" id="upload">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <center>
    <div class="justify-content-center alert " style="background: #EDF0FF;">
        <span style="color: var(--primary)"> Best market rates </span>
        <p class="market-rates">
            <span class=""> By XYZ </span>
            <span class="" style="var(--red)"> Rate is rs 1239 </span>
            <span class="" style="var(--orange)"> By XYZ </span>
            <span class="" style="var(--orange)"> Rate is rs 1239
            </span>
        </p>
    </div>
</center>

<form>
    <div class="row add-inventory">
        <div class="col-sm-12 col-12">
            <label>Product Name <span class="required"> *</span></label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-sm-6 col-12">
            <label>Company name <span class="required"> *</span> </label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-sm-6 col-12">
            <label>Chemical combination </label>
            <input type="text" class="form-control" value="Pantoprazole 40 MG+">
        </div>
        <div class="col-sm-4 col-12">
            <label>Country of Origin</label>
            <select class="form-control" id="countries" name="countries">
                <option value=""></option>
            </select>

        </div>
        <div class="col-sm-4 col-6">
            <label>Batch Number </label>
            <input type="text" class="form-control">
        </div>
        <div class="col-sm-4 col-6">
            <label>HSN Number</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-sm-12 col-12">
            <label>Product description</label>
            <textarea class="form-control" placeholder="Full description" rows="2" cols="4"></textarea>
        </div>

        <div class="col-sm-4 col-6">
            <label>Medicine Type <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select Medicine Type</option>
                <option>Strip</option>
                <option>Bottle</option>
                <option>Tube</option>
                <option>Vial</option>
                <option>PFS</option>
            </select>
        </div>

        <div class="col-sm-4 col-6">
            <label>Category <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected> Select Category </option>
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

        <div class="col-sm-4 col-6">
            <label>Sub-Category <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select Sub-Category </option>
                <option value="">Syrups</option>
                <option value="">Capsules</option>
                <option value="">Creams</option>
                <option value="">Lotions</option>
                <option value="">Ointments</option>
                <option value="">Suppositories</option>
                <option value="">Drops</option>
                <option value="">Inhalers</option>
                <option value="">Injections</option>
                <option value="">Tablets</option>
                <option value="">Powders/Granules</option>

                <option value="" class="divider"></option>

                <option value="">Colon and rectal surgery</option>
                <option value="">General surgery</option>
                <option value="">Gynecologic oncology</option>
                <option value="">Plastic surgery</option>
                <option value="">Neurological surgery</option>
                <option value="">Ophthalmic surgery</option>
                <option value="">Oral and maxillofacial surgery.</option>

                <option value="" class="divider"></option>

                <option value="">Others</option>
            </select>
        </div>

        <div class="col-sm-4 col-6">
            <label>Total Avaliable Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-4 col-6">
            <label>Min Order Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-4 col-6">
            <label>Max Order Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>MRP (₹) <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>Expiry Date <span class="required"> *</span></label>
            <input type="month" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>GST <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select GST</option>
                <option>5% GST</option>
                <option>12% GST</option>
                <option>18% GST</option>
            </select>
        </div>

        <div class="col-sm-3 col-6">
            <label>Discount Type <span class="required"> *</span></label>
            <select class="form-select" id="discount" required>
                <option value="0">No Discount</option>
                <option value="1">Discount on PTR only</option>
                <option value="2">Same Product Bonus</option>
                <option value="3">Same Product Bonus Plus Discount</option>
                <option value="4">Different Product Bonus</option>
                <option value="5">Diffarent Product Bonus Plus Discount</option>
            </select>
        </div>

        <div class="col-12">
            <hr>
        </div>

        <div class="col-sm-2 col-6" id="ptr">
            <label>Discount on PTR</label>
            <input type="number" class="form-control" placeholder="PTR %">
        </div>

        <div class="col-sm-2 col-6" id="buy">
            <label>Buy</label>
            <input type="number" class="form-control">
        </div>

        <div class="col-sm-2 col-6" id="get">
            <label>Get</label>
            <input type="number" class="form-control">
        </div>

        <div class="col-sm-3 col-6" id="discount-product">
            <label>Discounted Product</label>
            <select class="form-select">
                <option selected>No Product Selected</option>
                <option>Product 1</option>
                <option>Product 2</option>
                <option>Product 3</option>
                <option>Product 4</option>
            </select>
        </div>

        <div class="col-sm-3 col-6" id="buy">
            <label>Final PTR %</label>
            <input readonly type="number" class="form-control">
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <input id="image-uploadify" type="file" accept="image/*,.pdf" multiple>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-12">
            <input type="submit" name="submit" value="submit" class="next  btn btn-primary">
        </div>

    </div>
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-striped">
                        <thead class="table-light">
                            <tr>
                                <th><input class="form-check-input" type="checkbox"></th>
                                <th>Name</th>
                                <th>user</th>
                                <th>Expiry Date</th>
                                <th>Min qty</th>
                                <th>Max qty</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><span>ESLO 2.5MG T</span></td>
                                <td><span>#00112</span></td>
                                <td><span>12/12.21</span></td>
                                <td><span>100</span></td>
                                <td><span>1000</span></td>
                                <td><span>₹ 50/pc</span></td>
                                <td><span class="badge rounded-pill alert-success">Usable</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">

                                        <a href="product.php" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>

                                        <a href="" class="text-warning dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-pencil-fill"></i></a>

                                        <!--dropdown-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#accept-product">Accept</a></li>
                                            <li><a class="dropdown-item" href="#">Pending Review</a></li>
                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#reject-product">Reject</a></li>
                                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit">Edit</a></li>
                                        </ul>

                                        <!--                                       edit inventory modal-->
                                        <div class="modal fade" id="edit">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <h4>Edit Product</h4>
<hr>

<form>
    <div class="row add-inventory">
        <div class="col-sm-12 col-12">
            <label>Product Name <span class="required"> *</span></label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-sm-6 col-12">
            <label>Company name <span class="required"> *</span> </label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-sm-6 col-12">
            <label>Chemical combination </label>
            <input type="text" class="form-control" value="Pantoprazole 40 MG+">
        </div>
        <div class="col-sm-4 col-12">
            <label>Country of Origin</label>
            <select class="form-control" id="countries" name="countries">
                <option value=""></option>
            </select>

        </div>
        <div class="col-sm-4 col-6">
            <label>Batch Number </label>
            <input type="text" class="form-control">
        </div>
        <div class="col-sm-4 col-6">
            <label>HSN Number</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-sm-12 col-12">
            <label>Product description</label>
            <textarea class="form-control" placeholder="Full description" rows="2" cols="4"></textarea>
        </div>

        <div class="col-sm-4 col-6">
            <label>Medicine Type <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select Medicine Type</option>
                <option>Strip</option>
                <option>Bottle</option>
                <option>Tube</option>
                <option>Vial</option>
                <option>PFS</option>
            </select>
        </div>

        <div class="col-sm-4 col-6">
            <label>Category <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected> Select Category </option>
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

        <div class="col-sm-4 col-6">
            <label>Sub-Category <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select Sub-Category </option>
                <option value="">Syrups</option>
                <option value="">Capsules</option>
                <option value="">Creams</option>
                <option value="">Lotions</option>
                <option value="">Ointments</option>
                <option value="">Suppositories</option>
                <option value="">Drops</option>
                <option value="">Inhalers</option>
                <option value="">Injections</option>
                <option value="">Tablets</option>
                <option value="">Powders/Granules</option>

                <option value="" class="divider"></option>

                <option value="">Colon and rectal surgery</option>
                <option value="">General surgery</option>
                <option value="">Gynecologic oncology</option>
                <option value="">Plastic surgery</option>
                <option value="">Neurological surgery</option>
                <option value="">Ophthalmic surgery</option>
                <option value="">Oral and maxillofacial surgery.</option>

                <option value="" class="divider"></option>

                <option value="">Others</option>
            </select>
        </div>

        <div class="col-sm-4 col-6">
            <label>Total Avaliable Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-4 col-6">
            <label>Min Order Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-4 col-6">
            <label>Max Order Quantity <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>MRP (₹) <span class="required"> *</span></label>
            <input type="number" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>Expiry Date <span class="required"> *</span></label>
            <input type="month" class="form-control" required>
        </div>

        <div class="col-sm-3 col-6">
            <label>GST <span class="required"> *</span></label>
            <select class="form-select" required>
                <option selected>Select GST</option>
                <option>5% GST</option>
                <option>12% GST</option>
                <option>18% GST</option>
            </select>
        </div>

        <div class="col-sm-3 col-6">
            <label>Discount Type <span class="required"> *</span></label>
            <select class="form-select" id="discount" required>
                <option value="0">No Discount</option>
                <option value="1">Discount on PTR only</option>
                <option value="2">Same Product Bonus</option>
                <option value="3">Same Product Bonus Plus Discount</option>
                <option value="4">Different Product Bonus</option>
                <option value="5">Diffarent Product Bonus Plus Discount</option>
            </select>
        </div>

        <div class="col-12">
            <hr>
        </div>

        <div class="col-sm-2 col-6" id="ptr">
            <label>Discount on PTR</label>
            <input type="number" class="form-control" placeholder="PTR %">
        </div>

        <div class="col-sm-2 col-6" id="buy">
            <label>Buy</label>
            <input type="number" class="form-control">
        </div>

        <div class="col-sm-2 col-6" id="get">
            <label>Get</label>
            <input type="number" class="form-control">
        </div>

        <div class="col-sm-3 col-6" id="discount-product">
            <label>Discounted Product</label>
            <select class="form-select">
                <option selected>No Product Selected</option>
                <option>Product 1</option>
                <option>Product 2</option>
                <option>Product 3</option>
                <option>Product 4</option>
            </select>
        </div>

        <div class="col-sm-3 col-6" id="buy">
            <label>Final PTR %</label>
            <input readonly type="number" class="form-control">
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <input id="image-uploadify" type="file" accept="image/*,.pdf" multiple>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-12">
            <input type="submit" name="submit" value="submit" class="next  btn btn-primary">
        </div>

    </div>
</form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="" class="text-danger" data-bs-toggle="modal" data-bs-target="#delete-product"><i class="bi bi-trash-fill"></i></a>

                                    </div>
                                    
                                    <!-- accept product modal-->
                                    <div class="modal fade" id="accept-product">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to accept this product.</p>
                                                    <a href="" class="btn btn-primary">Yes</a>
                                                    <a class="btn btn-danger" class="btn-close" data-bs-dismiss="modal" aria-label="Close">No</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- reject product modal-->
                                    <div class="modal fade" id="reject-product">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to Reject this product.</p>
                                                    <a href="" class="btn btn-primary">Yes</a>
                                                    <a class="btn btn-danger" class="btn-close" data-bs-dismiss="modal" aria-label="Close">No</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- delete product modal-->
                                    <div class="modal fade" id="delete-product">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete the product permanenlty.</p>
                                                    <a href="" class="btn btn-primary">Yes</a>
                                                    <a class="btn btn-danger" class="btn-close" data-bs-dismiss="modal" aria-label="Close">No</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <nav class="float-end mt-4" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

            </div>
        </div>

    </main>
    <!--end page main-->

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
