
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

        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="card shadow-sm border-0 overflow-hidden">
                    <div class="card-body">
                        <div class="profile-avatar text-center">
                            <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/avatars/avatar-1.png" class="rounded-circle shadow" width="120" height="120" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-around mt-3 gap-3">
                            <div class="text-center">
                                <h4 class="mb-0">John Doe</h4>
                                <p class="mb-0"> Seller id / Buyer id
                                    <span class="resolved1"> Pending </span>
                                    <span class="active1"> Active </span>
                                </p>
                                <p class="mt-2 text-secondary">Appollo Clinic</p> <!-- business name-->
                            </div>
                        </div>
                        <!--                        business address-->
                        <div class="text-center mt-2">
                            <p class="mb-0 text-secondary">Address, India</p>
                            <p class="mb-0 text-secondary">Address line 2</p>
                        </div>
                        <hr>
                        <div class="text-start">
                            <h5 class="">Business Details</h5>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            PAN No.
                            <span class="">GGXXXXXXXX</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            GST No.
                            <span class="">GSTIN********</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            LIC No.
                            <span class="">LIC********</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Drag LIC 20B Licence
                            <span class="">LIC********</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Valid Till
                            <span class="">27-05-2023</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Drag LIC 21B Licence
                            <span class="">LIC********</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Valid Till
                            <span class="">27-05-2023</span>
                        </li>
                    </ul>
                    <div class="card">
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
                                IFSC Code.
                                <span class="">XXXX****</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                                LIC No.
                                <span class="">LIC********</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-0">John Doe Account Details</h5>
                        <hr>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">D.L. No. 20B</h6>
                            </div>
                            <div class="card-body">
                                <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/drag_lic/1.png" alt="" width="100%">
                            </div>
                        </div>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">D.L. No. 21B</h6>
                            </div>
                            <div class="card-body">
                                <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/drag_lic/1.png" alt="" width="100%">
                            </div>
                        </div>
                        <hr>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">Cancelled Cheque</h6>
                            </div>
                            <div class="card-body">
                                <img src="https://project.pharmabag.in/pharmabag-admin/assets/images/drag_lic/2.png" alt="" width="100%">
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
        <!--end row-->

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
