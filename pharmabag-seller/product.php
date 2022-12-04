
<!doctype html>
<html lang="en">


<head>
    <title> Seller  </title>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://project.pharmabag.in/pharmabag-admin/assets/images/favicon-32x32.png" type="image/png" />

    <!--plugins-->
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!--    <link href="assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />-->
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/css/style.css" rel="stylesheet" />
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/css/icons.css" rel="stylesheet">
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/fonts/fontawesome/fontawesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/css/pace.min.css" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/css/light-theme.css" rel="stylesheet" />
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="https://project.pharmabag.in/pharmabag-admin/assets/css/header-colors.css" rel="stylesheet" />

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
              <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/avatars/avatar-1.png" class="user-img" alt="">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
               <a class="dropdown-item" href="#">
                 <div class="d-flex align-items-center">
                    <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">
                    <div class="ms-3">
                      <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                      <small class="mb-0 dropdown-user-designation text-secondary">Seller</small>
                      <small class="mb-0 dropdown-user-designation badge alert-success">Verified</small>
                    </div>
                 </div>
               </a>
             </li>
             <li><hr class="dropdown-divider"></li>
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
                    <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
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
            <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
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
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
            <ul>
                <li> <a href="orders.php"><i class="bi bi-circle"></i>All Orders</a>
                </li>
                <li> <a href="custom-orders.php"><i class="bi bi-circle"></i>Requested Orders</a>
                </li>
                <li> <a href="cancel-order.php"><i class="bi bi-circle"></i>Cancelled Orders</a>
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
            <a>
                <div class="parent-icon"><i class="bi bi-collection-play-fill"></i>
                </div>
                <div class="menu-title">
                    <span>Vacation Mode </span>

                    <label class="switch">
                        <input type="checkbox" id="aaa" data-bs-target="#myModal" data-bs-toggle="modal">
                        <span class="slider round"></span>
                    </label>

                </div>
            </a>
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



<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">

                    <label class="form-label"> How many days you will go for vacation </label> <br>
                    <div class="input-group">

                        <input class="form-control" placeholder="" type="date">

                        <a href="" class="btn btn-primary">Set</a>
                    </div>

                </form>
                <br>
                <a class="btn btn-danger" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
            </div>
        </div>
    </div>
</div>

    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Product</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <div class="row g-3 align-items-center">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-3 col-8 col-md-3">
                                <span class="text-end badge bg-success">Approved</span>
                            </div>
                            <div class="col-lg-3 col-4 col-md-3">
                                <button hidden type="" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-12 col-12 my-4">
                        <h4>Product Name <span type="button" class="badge bg-danger"> Near to expiry </span> </h4>
                        <hr>
                        <p>Company name</p>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <p>
                                    <span><b>Chemical combination :</b></span>
                                    <span>Pantoprazole 40 MG+</span>
                                </p>
                                <p>
                                    <span><b>Country of Origin :</b></span>
                                    <span>India</span>
                                </p>
                                <p>
                                    <span><b>Batch Number :</b></span>
                                    <span>1234</span>
                                </p>
                                <p>
                                    <span><b>HSN Number :</b></span>
                                    <span>4567</span>
                                </p>
                                <p>
                                    <span><b>Medicine Type :</b></span>
                                    <span>Strip</span>
                                </p>
                                <p>
                                    <span><b>Category :</b></span>
                                    <span>Ethical</span>
                                </p>
                                <p>
                                    <span><b>Sub-Category :</b></span>
                                    <span>Drops</span>
                                </p>
                                <p>
                                    <span><b>Total Avaliable Quantity :</b></span>
                                    <span>10000</span>
                                </p>
                                <p>
                                    <span><b>Min Order Quantity :</b></span>
                                    <span>100</span>
                                </p>

                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <p>
                                    <span><b>Max Order Quantity :</b></span>
                                    <span>1000</span>
                                </p>
                                <p>
                                    <span><b>MRP (₹) :</b></span>
                                    <span>10.00</span>
                                </p>
                                <p>
                                    <span><b>Expiry Date :</b></span>
                                    <span>Jan 2022</span>
                                </p>
                                <p>
                                    <span><b>GST :</b></span>
                                    <span>12%</span>
                                </p>
                                <p>
                                    <span><b>Discount Type :</b></span>
                                    <span>Discount on PTR</span>
                                </p>
                                <p>
                                    <span><b>Discount on PTR :</b></span>
                                    <span>5%</span>
                                </p>
                                <p>
                                    <span><b>Buy :</b></span>
                                    <span>99</span>
                                </p>
                                <p>
                                    <span><b>Get :</b></span>
                                    <span>1</span>
                                </p>
                                <p>
                                    <span><b>Discounted Product:</b></span>
                                    <span>Abacavir / dolutegravir / lamivudine</span>
                                </p>
                                <p>
                                    <span><b>Final PTR % :</b></span>
                                    <span>72.0</span>
                                </p>

                            </div>
                            <hr>
                            <div class="col-12 col-sm-12 col-md-12">
                                <h5>Buyer View</h5>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <p>
                                            <span><b>Final PTR Excuding GST :</b></span>
                                            <span>₹ 62.86</span>
                                        </p>
                                        <p>
                                            <span><b>Discount (<span>12%</span>) :</b></span>
                                            <span>₹ 8.57</span>
                                        </p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <p>
                                            <span><b>GST (<span>12%</span>) :</b></span>
                                            <span>₹ 7.54</span>
                                        </p>
                                        <p>
                                            <span><b>Net Rate including GST :</b></span>
                                            <span>₹ 70.4</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5>Product Description</h5>
                <hr>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="col-md-12my-4 ">
                    <div class="row">
                        <div class="col-6 col-sm-3 p-2">
                            <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/products/01.jpg" width="100%" alt="">
                        </div>
                        <div class="col-6 col-sm-3 p-2">
                            <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/products/01.jpg" width="100%" alt="">
                        </div>
                        <div class="col-6 col-sm-3 p-2">
                            <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/products/01.jpg" width="100%" alt="">
                        </div>
                        <div class="col-6 col-sm-3 p-2">
                            <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/products/01.jpg" width="100%" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>
    <!--end page main-->
</div>
<!--end wrapper-->
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
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/js/jquery.min.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/js/pace.min.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>

    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/js/form-file-upload.js"></script>
    <!--app-->
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/js/app.js"></script>
    <script src="https://project.pharmabag.in/pharmabag-admin/assets/js/index.js"></script>

    <script>
        new PerfectScrollbar(".best-product");

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const selectDrop = document.querySelector('#countries');
            // const selectDrop = document.getElementById('countries');

            fetch('country.json').then(res => {
                return res.json();
            }).then(data => {
                let output = "";
                data.forEach(country => {
                    output += `<option value="${country.name}">${country.name}</option>`;
                })

                selectDrop.innerHTML = output;

            }).catch(err => {
                console.log(err);
            })

        });

    </script>

    <script>
        function validate() {
            let chh = document.getElementById("aaa");
            if (chh.checked) {
                alert("You have elected to show your checkout history.");
            }
        }

    </script>

    <script>
        $(document).ready(function() {
            $('input[type="checkbox"]').on('change', function(e) {
                if (e.target.checked) {
                    $('#myModal').modal();
                }
            });
            
        });

    </script>

    </body>

    </html>
