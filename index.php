
<body class="sidebar-light">
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
                <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
                    <li class="nav-item nav-toggler-item">
                        <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </li>
                    <li class="nav-item nav-search d-none d-lg-flex">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="search">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                          <i class="mdi mdi-bell-outline mx-0"></i>
                          <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <a class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                                </p>
                                <span class="badge badge-pill badge-warning float-right">View all</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium">Settings</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-account-box mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="https://via.placeholder.com/30x30" alt="profile"/>
                            <span class="nav-profile-name">Evan Morales</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">
                                <i class="mdi mdi-logout text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-toggler-item-right d-lg-none">
                        <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
                          <span class="mdi mdi-menu"></span>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    
        <div class="container-fluid page-body-wrapper">
            <!-- Side Menu -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="mdi mdi-view-quilt menu-icon"></i>
                            <span class="menu-title">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/widgets/widgets.html">
                            <i class="mdi mdi-airplay menu-icon"></i>
                            <span class="menu-title">Rating</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-blog" aria-expanded="false" aria-controls="menu-blog">
                            <i class="mdi mdi-palette menu-icon"></i>
                            <span class="menu-title">Blog</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="menu-blog">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="#">Page 1</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Page 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-event" aria-expanded="false" aria-controls="menu-event">
                            <i class="mdi mdi-palette menu-icon"></i>
                            <span class="menu-title">Events</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="menu-event">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="#">Event 1</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Event 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-subject" aria-expanded="false" aria-controls="menu-subject">
                            <i class="mdi mdi-palette menu-icon"></i>
                            <span class="menu-title">Subjects</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="menu-subject">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="#">Subject 1</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Subject 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-compaign" aria-expanded="false" aria-controls="menu-compaign">
                            <i class="mdi mdi-palette menu-icon"></i>
                            <span class="menu-title">Banner Compaign</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="menu-compaign">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="#">Compaign 1</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Compaign 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/widgets/widgets.html">
                            <i class="mdi mdi-palette menu-icon"></i>
                            <span class="menu-title">Testimonials</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/widgets/widgets.html">
                            <i class="mdi mdi-palette menu-icon"></i>
                            <span class="menu-title">Webinar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/widgets/widgets.html">
                            <i class="mdi mdi-palette menu-icon"></i>
                            <span class="menu-title">Scholarships</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/widgets/widgets.html">
                            <i class="mdi mdi-palette menu-icon"></i>
                            <span class="menu-title">Subscriptions</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/widgets/widgets.html">
                            <i class="mdi mdi-palette menu-icon"></i>
                            <span class="menu-title">User Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/widgets/widgets.html">
                            <i class="mdi mdi-palette menu-icon"></i>
                            <span class="menu-title">Gallery1</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/widgets/widgets.html">
                            <i class="mdi mdi-palette menu-icon"></i>
                            <span class="menu-title">Media</span>
                        </a>
                    </li>
                </ul>
            </nav>

          <!-- Main Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h1 class="main-page-title white-bg"><span class="icn yellow-bg"><i class="fa fa-home white-txt"></i></span><span class="text purple-txt">Home</span></h1>
                        </div>
                    </div>
                    <div class="home-menu-blocks">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Home">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Home</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Rating">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Rating</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Blogs">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Blogs</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Events">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Events</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Subjects">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Subjects</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Banner Compaign">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Banner Compaign</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Testimonials">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Testimonials</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Webinar">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Webinar</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Scholarships">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Scholarships</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Subscriptions">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Subscriptions</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="User Profile">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">User Profile</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Gallery">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Gallery2</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 grid-margin">
                                <a href="#" class="home-menu-link" title="Media">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="icon text-primary mb-3">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                            <h4 class="font-weight-bold yellow-txt">Media</h4>
                                        </div>
                                    </div>
                                </a>    
                            </div>
                        </div>
                    </div>    
                </div>
                
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>

