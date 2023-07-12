<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    
    
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">



                
                            <!-- Sidebar -->
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                                <!-- Sidebar - Brand -->
                                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                                    <div class="sidebar-brand-icon rotate-n-15">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-train-front" viewBox="0 0 16 16">
                    <path d="M5.621 1.485c1.815-.454 2.943-.454 4.758 0 .784.196 1.743.673 2.527 1.119.688.39 1.094 1.148 1.094 1.979V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V4.583c0-.831.406-1.588 1.094-1.98.784-.445 1.744-.922 2.527-1.118Zm5-.97C8.647.02 7.353.02 5.38.515c-.924.23-1.982.766-2.78 1.22C1.566 2.322 1 3.432 1 4.582V13.5A2.5 2.5 0 0 0 3.5 16h9a2.5 2.5 0 0 0 2.5-2.5V4.583c0-1.15-.565-2.26-1.6-2.849-.797-.453-1.855-.988-2.779-1.22ZM5 13a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm0 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm7 1a1 1 0 1 0-1-1 1 1 0 1 0-2 0 1 1 0 0 0 2 0 1 1 0 0 0 1 1ZM4.5 5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h3V5h-3Zm4 0v3h3a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-3ZM3 5.5A1.5 1.5 0 0 1 4.5 4h7A1.5 1.5 0 0 1 13 5.5v2A1.5 1.5 0 0 1 11.5 9h-7A1.5 1.5 0 0 1 3 7.5v-2ZM6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Z"/>
                    </svg>
                                    </div>
                                    <div class="sidebar-brand-text mx-3">Railway</div>
                                </a>

                                <!-- Divider -->
                                <hr class="sidebar-divider my-0">

                                <!-- Nav Item - Dashboard -->
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                    <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                    <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                    </svg>
                                        <span>Dashboard</span></a>
                                </li>

                                <!-- Divider -->
                                <hr class="sidebar-divider">

                                <!-- Heading -->
                                <div class="sidebar-heading">
                                    
                                </div>

                                <!-- Nav Item - Pages Collapse Menu -->
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="true" aria-controls="collapseTwo">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    </svg>
                                        <span>Users</span>
                                    </a>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <h6 class="collapse-header">Manage Users:</h6>
                                            <a class="collapse-item" href="buttons.html">Add User</a>
                                            <a class="collapse-item" href="cards.html">View Users</a>
                                            <a class="collapse-item" href="cards.html">Delete Users</a>
                                        </div>
                                    </div>
                                </li>

                                <!-- Nav Item - Utilities Collapse Menu -->
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                                        aria-expanded="true" aria-controls="collapseUtilities">
                                        <i class="fas fa-fw fa-wrench"></i>
                                        <span>Trains</span>
                                    </a>
                                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                                        data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <h6 class="collapse-header">Manage Trains:</h6>
                                            <a class="collapse-item" href="utilities-color.html">Add Train</a>
                                            <a class="collapse-item" href="utilities-border.html">View Trains</a>
                                            <a class="collapse-item" href="utilities-animation.html">Delete Trains</a>
                                            <a class="collapse-item" href="utilities-other.html">Track Trains</a>
                                        </div>
                                    </div>
                                </li>

                                <!-- Divider -->
                                <hr class="sidebar-divider">

                                <!-- Heading -->
                                <div class="sidebar-heading">
                                    
                                </div>

                                <!-- Nav Item - Pages Collapse Menu -->
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                        aria-expanded="true" aria-controls="collapsePages">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-browser-safari" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm.25-14.75v1.5a.25.25 0 0 1-.5 0v-1.5a.25.25 0 0 1 .5 0Zm0 12v1.5a.25.25 0 1 1-.5 0v-1.5a.25.25 0 1 1 .5 0ZM4.5 1.938a.25.25 0 0 1 .342.091l.75 1.3a.25.25 0 0 1-.434.25l-.75-1.3a.25.25 0 0 1 .092-.341Zm6 10.392a.25.25 0 0 1 .341.092l.75 1.299a.25.25 0 1 1-.432.25l-.75-1.3a.25.25 0 0 1 .091-.34ZM2.28 4.408l1.298.75a.25.25 0 0 1-.25.434l-1.299-.75a.25.25 0 0 1 .25-.434Zm10.392 6 1.299.75a.25.25 0 1 1-.25.434l-1.3-.75a.25.25 0 0 1 .25-.434ZM1 8a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 0 .5h-1.5A.25.25 0 0 1 1 8Zm12 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 1 1 0 .5h-1.5A.25.25 0 0 1 13 8ZM2.03 11.159l1.298-.75a.25.25 0 0 1 .25.432l-1.299.75a.25.25 0 0 1-.25-.432Zm10.392-6 1.299-.75a.25.25 0 1 1 .25.433l-1.3.75a.25.25 0 0 1-.25-.434ZM4.5 14.061a.25.25 0 0 1-.092-.341l.75-1.3a.25.25 0 0 1 .434.25l-.75 1.3a.25.25 0 0 1-.342.091Zm6-10.392a.25.25 0 0 1-.091-.342l.75-1.299a.25.25 0 1 1 .432.25l-.75 1.3a.25.25 0 0 1-.341.09ZM6.494 1.415l.13.483a.25.25 0 1 1-.483.13l-.13-.483a.25.25 0 0 1 .483-.13ZM9.86 13.972l.13.483a.25.25 0 1 1-.483.13l-.13-.483a.25.25 0 0 1 .483-.13ZM3.05 3.05a.25.25 0 0 1 .354 0l.353.354a.25.25 0 0 1-.353.353l-.354-.353a.25.25 0 0 1 0-.354Zm9.193 9.193a.25.25 0 0 1 .353 0l.354.353a.25.25 0 1 1-.354.354l-.353-.354a.25.25 0 0 1 0-.353ZM1.545 6.01l.483.13a.25.25 0 1 1-.13.483l-.483-.13a.25.25 0 1 1 .13-.482Zm12.557 3.365.483.13a.25.25 0 1 1-.13.483l-.483-.13a.25.25 0 1 1 .13-.483Zm-12.863.436a.25.25 0 0 1 .176-.306l.483-.13a.25.25 0 1 1 .13.483l-.483.13a.25.25 0 0 1-.306-.177Zm12.557-3.365a.25.25 0 0 1 .176-.306l.483-.13a.25.25 0 1 1 .13.483l-.483.13a.25.25 0 0 1-.306-.177ZM3.045 12.944a.299.299 0 0 1-.029-.376l3.898-5.592a.25.25 0 0 1 .062-.062l5.602-3.884a.278.278 0 0 1 .392.392L9.086 9.024a.25.25 0 0 1-.062.062l-5.592 3.898a.299.299 0 0 1-.382-.034l-.005-.006Zm3.143 1.817a.25.25 0 0 1-.176-.306l.129-.483a.25.25 0 0 1 .483.13l-.13.483a.25.25 0 0 1-.306.176ZM9.553 2.204a.25.25 0 0 1-.177-.306l.13-.483a.25.25 0 1 1 .483.13l-.13.483a.25.25 0 0 1-.306.176Z"/>
                    </svg>
                                        <span>Pages</span>
                                    </a>
                                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                        <h6 class="collapse-header">Manage Web Pages:</h6>
                                            <a class="collapse-item" href="login.html">About Us</a>
                                            <a class="collapse-item" href="register.html">Contact Us</a>
                                            <a class="collapse-item" href="forgot-password.html">Home Page</a>
                                            <div class="collapse-divider"></div>
                                            <a class="collapse-item" href="404.html">********</a>
                                            <a class="collapse-item" href="blank.html">********</a>
                                        </div>
                                    </div>
                                </li>

                                <!-- Nav Item - Charts -->
                                <li class="nav-item">
                                    <a class="nav-link" href="charts.html">
                                        <i class="fas fa-fw fa-chart-area"></i>
                                        <span>Charts</span></a>
                                </li>

                                <!-- Nav Item - Tables -->
                                <li class="nav-item">
                                    <a class="nav-link" href="tables.html">
                                        <i class="fas fa-fw fa-table"></i>
                                        <span>Tables</span></a>
                                </li>

                                <!-- Divider -->
                                <hr class="sidebar-divider d-none d-md-block">

                                <!-- Sidebar Toggler (Sidebar) -->
                                <div class="text-center d-none d-md-inline">
                                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                                </div>

                                <!-- Sidebar Message -->
                                <div class="sidebar-card d-none d-lg-flex">
                                    <img class="sidebar-card-illustration mb-2" src="{{asset('img/undraw_rocket.svg')}}" alt="...">
                                    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                                    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
                                </div>

                            </ul>
                            <!-- End of Sidebar -->


                                <!-- Scroll to Top Button-->
                        <a class="scroll-to-top rounded" href="#page-top">
                            <i class="fas fa-angle-up"></i>
                        </a>


                            <!-- Logout Modal-->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="login.html">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>




                            <!-- Content Wrapper -->
                            <div id="content-wrapper" class="d-flex flex-column">

                                <!-- Main Content -->
                                <div id="content">

                                    <!-- Topbar -->
                                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                                        <!-- Sidebar Toggle (Topbar) -->
                                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                            <i class="fa fa-bars"></i>
                                        </button>

                                        <!-- Topbar Search -->
                                        <form
                                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                                    aria-label="Search" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                        <!-- Topbar Navbar -->
                                        <ul class="navbar-nav ml-auto">

                                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                            <li class="nav-item dropdown no-arrow d-sm-none">
                                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-search fa-fw"></i>
                                                </a>
                                                <!-- Dropdown - Messages -->
                                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                                    aria-labelledby="searchDropdown">
                                                    <form class="form-inline mr-auto w-100 navbar-search">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control bg-light border-0 small"
                                                                placeholder="Search for..." aria-label="Search"
                                                                aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-primary" type="button">
                                                                    <i class="fas fa-search fa-sm"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>

                                            <!-- Nav Item - Alerts -->
                                            <li class="nav-item dropdown no-arrow mx-1">
                                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-bell fa-fw"></i>
                                                    <!-- Counter - Alerts -->
                                                    <span class="badge badge-danger badge-counter">3+</span>
                                                </a>
                                                <!-- Dropdown - Alerts -->
                                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                                    aria-labelledby="alertsDropdown">
                                                    <h6 class="dropdown-header">
                                                        Alerts Center
                                                    </h6>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <div class="mr-3">
                                                            <div class="icon-circle bg-primary">
                                                                <i class="fas fa-file-alt text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="small text-gray-500">December 12, 2019</div>
                                                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <div class="mr-3">
                                                            <div class="icon-circle bg-success">
                                                                <i class="fas fa-donate text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="small text-gray-500">December 7, 2019</div>
                                                            $290.29 has been deposited into your account!
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <div class="mr-3">
                                                            <div class="icon-circle bg-warning">
                                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="small text-gray-500">December 2, 2019</div>
                                                            Spending Alert: We've noticed unusually high spending for your account.
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                                </div>
                                            </li>

                                            <!-- Nav Item - Messages -->
                                            <li class="nav-item dropdown no-arrow mx-1">
                                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-envelope fa-fw"></i>
                                                    <!-- Counter - Messages -->
                                                    <span class="badge badge-danger badge-counter">7</span>
                                                </a>
                                                <!-- Dropdown - Messages -->
                                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                                    aria-labelledby="messagesDropdown">
                                                    <h6 class="dropdown-header">
                                                        Message Center
                                                    </h6>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <div class="dropdown-list-image mr-3">
                                                            <img class="rounded-circle" src="{{asset('img/undraw_profile_1.svg')}}"
                                                                alt="...">
                                                            <div class="status-indicator bg-success"></div>
                                                        </div>
                                                        <div class="font-weight-bold">
                                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                                                problem I've been having.</div>
                                                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <div class="dropdown-list-image mr-3">
                                                            <img class="rounded-circle" src="{{asset('img/undraw_profile_2.svg')}}"
                                                                alt="...">
                                                            <div class="status-indicator"></div>
                                                        </div>
                                                        <div>
                                                            <div class="text-truncate">I have the photos that you ordered last month, how
                                                                would you like them sent to you?</div>
                                                            <div class="small text-gray-500">Jae Chun · 1d</div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <div class="dropdown-list-image mr-3">
                                                            <img class="rounded-circle" src="{{asset('img/undraw_profile_3.svg')}}"
                                                                alt="...">
                                                            <div class="status-indicator bg-warning"></div>
                                                        </div>
                                                        <div>
                                                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                                                the progress so far, keep up the good work!</div>
                                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <div class="dropdown-list-image mr-3">
                                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                                alt="...">
                                                            <div class="status-indicator bg-success"></div>
                                                        </div>
                                                        <div>
                                                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                                                told me that people say this to all dogs, even if they aren't good...</div>
                                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                                </div>
                                            </li>

                                            <div class="topbar-divider d-none d-sm-block"></div>

                                            <!-- Nav Item - User Information -->
                                            <li class="nav-item dropdown no-arrow">
                                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                                    <img class="img-profile rounded-circle"
                                                        src="{{asset('img/undraw_profile.svg')}}">
                                                </a>
                                                <!-- Dropdown - User Information -->
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                                    aria-labelledby="userDropdown">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        Profile
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        Settings
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        Activity Log
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        Logout
                                                    </a>
                                                </div>
                                            </li>

                                        </ul>

                                    </nav>
                                    <!-- End of Topbar -->

                                    <!-- Begin Page Content -->
                                    <div class="container-fluid">

                                        <!-- Page Heading -->
                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                        </div>

                                        <!-- Content Row -->
                                        <div class="row">

                                            <!-- Earnings (Monthly) Card Example -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card border-left-primary shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                    Earnings (Monthly)</div>
                                                                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Earnings (Monthly) Card Example -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card border-left-success shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                                    Earnings (Annual)</div>
                                                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Earnings (Monthly) Card Example -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card border-left-info shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                                                </div>
                                                                <div class="row no-gutters align-items-center">
                                                                    <div class="col-auto">
                                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="progress progress-sm mr-2">
                                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Pending Requests Card Example -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card border-left-warning shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                                    Pending Requests</div>
                                                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Content Row -->

                                        <div class="row">

                                            <!-- Area Chart -->
                                            <div class="col-xl-8 col-lg-7">
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div
                                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                        <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                                        <div class="dropdown no-arrow">
                                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <div class="dropdown-header">Dropdown Header:</div>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <div class="chart-area">
                                                            <canvas id="myAreaChart"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Pie Chart -->
                                            <div class="col-xl-4 col-lg-5">
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div
                                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                        <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                                        <div class="dropdown no-arrow">
                                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <div class="dropdown-header">Dropdown Header:</div>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <div class="chart-pie pt-4 pb-2">
                                                            <canvas id="myPieChart"></canvas>
                                                        </div>
                                                        <div class="mt-4 text-center small">
                                                            <span class="mr-2">
                                                                <i class="fas fa-circle text-primary"></i> Direct
                                                            </span>
                                                            <span class="mr-2">
                                                                <i class="fas fa-circle text-success"></i> Social
                                                            </span>
                                                            <span class="mr-2">
                                                                <i class="fas fa-circle text-info"></i> Referral
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Content Row -->
                                        <div class="row">

                                            <!-- Content Column -->
                                            <div class="col-lg-6 mb-4">

                                                <!-- Project Card Example -->
                                                <div class="card shadow mb-4">
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <h4 class="small font-weight-bold">Server Migration <span
                                                                class="float-right">20%</span></h4>
                                                        <div class="progress mb-4">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <h4 class="small font-weight-bold">Sales Tracking <span
                                                                class="float-right">40%</span></h4>
                                                        <div class="progress mb-4">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <h4 class="small font-weight-bold">Customer Database <span
                                                                class="float-right">60%</span></h4>
                                                        <div class="progress mb-4">
                                                            <div class="progress-bar" role="progressbar" style="width: 60%"
                                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <h4 class="small font-weight-bold">Payout Details <span
                                                                class="float-right">80%</span></h4>
                                                        <div class="progress mb-4">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <h4 class="small font-weight-bold">Account Setup <span
                                                                class="float-right">Complete!</span></h4>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Color System -->
                                                <div class="row">
                                                    <div class="col-lg-6 mb-4">
                                                        <div class="card bg-primary text-white shadow">
                                                            <div class="card-body">
                                                                Primary
                                                                <div class="text-white-50 small">#4e73df</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-4">
                                                        <div class="card bg-success text-white shadow">
                                                            <div class="card-body">
                                                                Success
                                                                <div class="text-white-50 small">#1cc88a</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-4">
                                                        <div class="card bg-info text-white shadow">
                                                            <div class="card-body">
                                                                Info
                                                                <div class="text-white-50 small">#36b9cc</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-4">
                                                        <div class="card bg-warning text-white shadow">
                                                            <div class="card-body">
                                                                Warning
                                                                <div class="text-white-50 small">#f6c23e</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-4">
                                                        <div class="card bg-danger text-white shadow">
                                                            <div class="card-body">
                                                                Danger
                                                                <div class="text-white-50 small">#e74a3b</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-4">
                                                        <div class="card bg-secondary text-white shadow">
                                                            <div class="card-body">
                                                                Secondary
                                                                <div class="text-white-50 small">#858796</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-4">
                                                        <div class="card bg-light text-black shadow">
                                                            <div class="card-body">
                                                                Light
                                                                <div class="text-black-50 small">#f8f9fc</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-4">
                                                        <div class="card bg-dark text-white shadow">
                                                            <div class="card-body">
                                                                Dark
                                                                <div class="text-white-50 small">#5a5c69</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-lg-6 mb-4">

                                                <!-- Illustrations -->
                                                <div class="card shadow mb-4">
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                                                src="{{asset('img/undraw_posting_photo.svg')}}" alt="...">
                                                        </div>
                                                        <p>Add some quality, svg illustrations to your project courtesy of <a
                                                                target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                                            constantly updated collection of beautiful svg images that you can use
                                                            completely free and without attribution!</p>
                                                        <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                                            unDraw &rarr;</a>
                                                    </div>
                                                </div>

                                                <!-- Approach -->
                                                <div class="card shadow mb-4">
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                                            CSS bloat and poor page performance. Custom CSS classes are used to create
                                                            custom components and custom utility classes.</p>
                                                        <p class="mb-0">Before working with this theme, you should become familiar with the
                                                            Bootstrap framework, especially the utility classes.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.container-fluid -->

                                </div>
                                <!-- End of Main Content -->



                        </div>
                        <!-- End of Page Wrapper -->
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

    
            
        </div>
        <!-- End of Content Wrapper -->
       


</body>

</html>