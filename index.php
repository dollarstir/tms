

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>TUCEE  | HOME </title>
    <link rel="icon" type="image/x-icon" href="common-assets/img/favicon.ico"/>
    <!-- Common Styles Starts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="common-assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link href="common-assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="common-assets/plugins/highlight/styles/monokai-sublime.css" rel="stylesheet" type="text/css" />
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />  
    <link href="common-assets/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dashboard/dashboard_2.css" rel="stylesheet" type="text/css" />
    <link href="common-assets/plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="common-assets/plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="assets/css/elements/tooltip.css" rel="stylesheet" type="text/css" />
    <!-- Page Level Plugin/Style Ends -->
</head>
<body>
    <!-- Loader Starts -->
    <div id="load_screen"> 
        <div class="boxes">
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
        </div>
    </div>
    <!--  Loader Ends -->
    <!--  Main Container Starts  -->
    <div class="main-container" id="container">
        <!-- Logo area (Larger Screen) Starts -->
        <div class="tl-logo-area d-none d-md-block">
            <div class="d-flex flex-row align-center justify-content-center logo-area">
                <a href="index.php" class="nav-link pr-0 pl-0">
                    <img src="common-assets/img/logo.png" class="navbar-logo" alt="logo">
                </a>
                <a href="index.php" class="nav-link d-none d-md-block"> TUCEE </a>
            </div>
        </div>
        <!-- Logo area (Larger Screen) Ends -->
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="rightbar-overlay"></div>
        <!--  Sidebar Starts  -->
        <div class="sidebar-wrapper sidebar-theme">
            <nav id="sidebar">
                <div class="fixed-profile">
                    <div class="premium-border">
                        <img src="common-assets/img/profile-16.jpg" class="profile-avatar"/>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-white font-14 mb-1">Sara Smith</h6>
                        <p class="text-white font-13 mb-0">Britannia</p>
                    </div>
                    <ul class="flex-row profile-option-container">
                        <li class="option-item dropdown message-dropdown">
                            <div class="option-link-container dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a class="option-link dropdown-toggle">
                                    <i class="las la-envelope"></i>
                                </a>
                                <div class="text-left">
                                    <h6>Mail</h6>
                                    <p>3 New Mails</p>
                                </div>
                            </div>
                            <div class="dropdown-menu position-absolute md-container" aria-labelledby="messageDropdown">
                                <div class="nav-drop is-notification-dropdown">
                                    <div class="inner">
                                        <div class="nav-drop-header">
                                            <span class="text-black font-12 strong">3 new mails</span>
                                            <a class="text-muted font-12" href="index-2.html#">
                                                Mark all read
                                            </a>
                                        </div>
                                        <div class="nav-drop-body account-items pb-0">
                                            <a class="account-item">
                                                <div class="media">
                                                    <div class="user-img">
                                                        <img class="rounded-circle avatar-xs" src="common-assets/img/profile-11.jpg" alt="profile">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="">
                                                            <h6 class="text-dark font-13 mb-0 strong">Jennifer Queen</h6>
                                                            <p class="m-0 mt-1 font-10 text-muted">Permission Required</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="account-item marked-read">
                                                <div class="media">
                                                    <div class="user-img">
                                                        <img class="rounded-circle avatar-xs" src="common-assets/img/profile-10.jpg" alt="profile">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="">
                                                            <h6 class="text-dark font-13 mb-0 strong">Lara Smith</h6>
                                                            <p class="m-0 mt-1 font-10 text-muted">Invoice needed</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="account-item marked-read">
                                                <div class="media">
                                                    <div class="user-img">
                                                        <img class="rounded-circle avatar-xs" src="common-assets/img/profile-9.jpg" alt="profile">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="">
                                                            <h6 class="text-dark font-13 mb-0 strong">Victoria Williamson</h6>
                                                            <p class="m-0 mt-1 font-10 text-muted">Account need to be synced</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="account-divider">
                                            <div class="text-center">
                                                <a class="text-primary strong font-13" href="apps_mail.html">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="option-item dropdown notification-dropdown">
                            <a class="option-link-container" href="pages_notifications.html">
                                <div class="option-link">
                                    <i class="las la-bell"></i>
                                    <div class="blink">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <h6>Notifications</h6>
                                    <p>4 Unread</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php include 'sidebar.php'; ?>
                </div>
            </nav>
        </div>
        <!--  Sidebar Ends  -->
        <!--  Content Area Starts  -->
        <div id="content" class="main-content">
            <!--  Navbar Starts  -->
            <div class="header-container fixed-top">
                <header class="header navbar navbar-expand-sm">
                    <ul class="navbar-item flex-row ml-md-0 ml-auto theme-brand">
                        <li class="nav-item align-self-center d-md-none">
                            <div class="d-flex flex-row align-center justify-content-center logo-area">
                                <a href="index.php" class="nav-link pr-0 pl-1">
                                    <img src="common-assets/img/logo.png" class="navbar-logo" alt="logo">
                                </a>
                                <a href="index.php" class="nav-link pr-4 d-none d-md-block"> TUCEE </a>
                            </div>
                        </li>
                        <li class="nav-item align-self-center search-animated">
                            <i class="las la-search toggle-search"></i>
                            <form class="form-inline search-full form-inline search" action="pages_search_result.html" role="search">
                                <div class="search-bar">
                                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search here">
                                </div>
                            </form>
                        </li>
                        <li class="nav-item dropdown megamenu-dropdown d-none d-lg-flex">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle d-flex align-center text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mega Menu  <i class="las la-angle-down font-11 ml-1"></i>
                            </a>
                            <div class="dropdown-menu megamenu">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="font-17 mt-0">Applications</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li class="font-15 mb-1"><a href="apps_ecommerce.html">Ecommerce</a></li>
                                                    <li class="font-15 mb-1"><a href="apps_chat.html">Chat</a></li>
                                                    <li class="font-15 mb-1"><a href="apps_mail.html">Email</a></li>
                                                    <li class="font-15 mb-1"><a href="apps_file_manager.html">File Manager</a></li>
                                                    <li class="font-15 mb-1"><a href="apps_calendar.html">Calender</a></li>
                                                    <li class="font-15 mb-1"><a href="apps_notes.html">Notes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="font-17 mt-0">Extra Pages</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li class="font-15 mb-1"><a href="pages_contact_us.html">Contact Us</a></li>
                                                    <li class="font-15 mb-1"><a href="pages_faq.html">FAQ</a></li>
                                                    <li class="font-15 mb-1"><a href="pages_helpdesk.html">Helpdesk</a></li>
                                                    <li class="font-15 mb-1"><a href="pages_pricing_2.html">Pricing</a></li>
                                                    <li class="font-15 mb-1"><a href="pages_search_result.html">Search Result</a></li>
                                                    <li class="font-15 mb-1"><a href="pages_privacy_policy.html">Privacy Policy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-lg-1">
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="index-2.html#">
                                                        <img src="common-assets/img/company-1.jpg" alt="slack">
                                                        <span>Cube</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="index-2.html#">
                                                        <img src="common-assets/img/company-2.jpg" alt="Github">
                                                        <span>HTech</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="index-2.html#">
                                                        <img src="common-assets/img/company-3.jpg" alt="dribbble">
                                                        <span>Inovation</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="index-2.html#">
                                                        <img src="common-assets/img/company-4.jpg" alt="bitbucket">
                                                        <span>Circle</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="index-2.html#">
                                                        <img src="common-assets/img/company-5.jpg" alt="dropbox">
                                                        <span>Techno</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="index-2.html#">
                                                        <img src="common-assets/img/company-6.jpg" alt="G Suite">
                                                        <span>T Logy</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-item flex-row ml-md-auto">
                        <li class="nav-item dropdown fullscreen-dropdown d-none d-lg-flex">
                            <a class="nav-link full-screen-mode" href="javascript:void(0);">
                                <i class="las la-compress" id="fullScreenIcon"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown language-dropdown">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="las la-language"></i>
                            </a>
                            <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                                <a class="dropdown-item d-flex" href="javascript:void(0);">
                                    <img src="common-assets/img/flag/usa-flag.png" class="flag-width" alt="flag"> 
                                    <span class="align-self-center">&nbsp;English</span>
                                </a>
                                <a class="dropdown-item d-flex" href="javascript:void(0);">
                                    <img src="common-assets/img/flag/spain-flag.png" class="flag-width" alt="flag"> 
                                    <span class="align-self-center">&nbsp;Spanish</span>
                                </a>
                                <a class="dropdown-item d-flex" href="javascript:void(0);">
                                    <img src="common-assets/img/flag/france-flag.png" class="flag-width" alt="flag"> 
                                    <span class="align-self-center">&nbsp;French</span>
                                </a>
                                <a class="dropdown-item d-flex" href="javascript:void(0);">
                                    <img src="common-assets/img/flag/saudi-arabia-flag.png" class="flag-width" alt="flag"> 
                                    <span class="align-self-center">&nbsp;Arabic</span>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown user-profile-dropdown">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <img src="common-assets/img/profile-16.jpg" alt="avatar">
                            </a>
                            <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                                <div class="nav-drop is-account-dropdown" >
                                    <div class="inner">
                                        <div class="nav-drop-header">
                                            <span class="text-primary font-15">Welcome Admin !</span>
                                        </div>
                                        <div class="nav-drop-body account-items pb-0">
                                            <a id="profile-link"  class="account-item" href="pages_profile.html">
                                                <div class="media align-center">
                                                    <div class="media-left">
                                                        <div class="image">
                                                            <img class="rounded-circle avatar-xs" src="common-assets/img/profile-16.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="media-content ml-3">
                                                        <h6 class="font-13 mb-0 strong">Sara</h6>
                                                        <small>Britannia</small>
                                                    </div>
                                                    <div class="media-right">
                                                        <i data-feather="check"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="account-item" href="pages_profile.html">
                                            <div class="media align-center">
                                                <div class="icon-wrap">
                                                    <i class="las la-user font-20"></i>
                                                </div>
                                                <div class="media-content ml-3">
                                                    <h6 class="font-13 mb-0 strong">My Account</h6>
                                                </div>
                                            </div>
                                            </a>
                                            <a class="account-item" href="pages_timeline.html">
                                                <div class="media align-center">
                                                    <div class="icon-wrap">
                                                        <i class="las la-briefcase font-20"></i>
                                                    </div>
                                                    <div class="media-content ml-3">
                                                        <h6 class="font-13 mb-0 strong">My Activity</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="account-item settings">
                                            <div class="media align-center">
                                                <div class="icon-wrap">
                                                    <i class="las la-cog font-20"></i>
                                                </div>
                                                <div class="media-content ml-3">
                                                    <h6 class="font-13 mb-0 strong">Settings</h6>
                                                </div>
                                            </div>
                                            </a>
                                            <a class="account-item" href="auth_lock_screen_3.html">
                                                <div class="media align-center">
                                                    <div class="icon-wrap">
                                                        <i class="las la-lock font-20"></i>
                                                    </div>
                                                    <div class="media-content ml-3">
                                                        <h6 class="font-13 mb-0 strong">Lock Screen</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="account-divider">
                                            <a class="account-item" href="auth_login_3.html">
                                                <div class="media align-center">
                                                    <div class="icon-wrap">
                                                        <i class="las la-sign-out-alt font-20"></i>
                                                    </div>
                                                    <div class="media-content ml-3">
                                                        <h6 class="font-13 mb-0 strong ">Logout</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-item flex-row">
                        <li class="nav-item dropdown header-setting">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle rightbarCollapse" data-placement="bottom">
                                <i class="las la-sliders-h"></i>
                            </a>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends  -->
            <!--  Navbar Starts / Breadcrumb Area  -->
            <div class="sub-header-container">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                        <i class="las la-bars"></i>
                    </a>
                    <ul class="navbar-nav flex-row">
                        <li>
                            <div class="page-header">
                                <nav class="breadcrumb-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">TUCEE</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><span>HOME</span></li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                        <li class="nav-item more-dropdown">
                            <div class="input-group input-group-sm">
                                <input id="rangeCalendarFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date">
                                <div class="input-group-append">
                                    <span class="input-group-text btn-soft-primary" id="basic-addon2">
                                        <i class="lar la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item more-dropdown">
                            <a href="javascript: void(0);" data-original-title="Reload Data" data-placement="bottom" class="btn btn-soft-primary dash-btn btn-sm ml-2 bs-tooltip">
                                <i class="las la-sync"></i>
                            </a>
                        </li>
                        <li class="nav-item custom-dropdown-icon">
                            <a href="javascript: void(0);" data-original-title="Filter" data-placement="bottom" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-soft-primary dash-btn btn-sm ml-2 bs-tooltip">
                                <i class="las la-filter"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                <a class="dropdown-item" data-value="Filter 1" href="javascript:void(0);">Filter 1</a>
                                <a class="dropdown-item" data-value="Filter 2" href="javascript:void(0);">Filter 2</a>
                                <a class="dropdown-item" data-value="Filter 3" href="javascript:void(0);">Filter 3</a>
                            </div>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area  -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget top-welcome">
                            <div class="f-100">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="media">
                                            <div class="mr-3">
                                                <img src="common-assets/img/profile-16.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                            </div>
                                            <div class="align-self-center media-body">
                                                <div class="text-muted">
                                                    <p class="mb-2 text-primary">Welcome to dashboard</p>
                                                    <h5 class="mb-1">Sara</h5>
                                                    <p class="mb-0">System Admin</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-self-center col-lg-5">
                                        <div class="text-lg-center mt-4 mt-lg-0">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Projects</p>
                                                        <h5 class="mb-0">48</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Team</p>
                                                        <h5 class="mb-0">40</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Clients</p>
                                                        <h5 class="mb-0">18</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Sellers</p>
                                                        <h5 class="mb-0">98</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-lg-flex col-lg-3 align-items-end justify-content-center flex-column">
                                        <button class="btn btn-primary">
                                           Settings
                                        </button>
                                        <button class="btn btn-info mt-2">
                                            My Chat
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 Columns -->
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                        <div class="widget bg-gradient-danger">
                            <div class="f-100">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="text-white">
                                            <h6 class="text-white font-17 strong">Pending Tasks !</h6>
                                            <p class="blink_me text-white mt-1">Deadline Tomorrow</p>
                                            <ul class="pl-3 mb-0">
                                                <li class="py-1">Seller Payments</li>
                                                <li class="py-1">Check Payouts</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="align-self-end col-md-5">
                                        <img src="common-assets/img/dashboard-image-uw.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="widget">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="las la-shopping-cart"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Orders</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                        <h5 class="mb-2">1,452 
                                            <i class="las la-angle-up text-success-teal"></i>
                                        </h5>
                                        <div class="d-flex">
                                            <span class="badge badge-success-teal font-size-12"> + 0.2% </span> 
                                            <span class="ml-2 text-truncate">From last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="widget">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="las la-hand-holding-usd"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Profit</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                        <h5 class="mb-2">$200 
                                            <i class="las la-angle-down text-danger"></i>
                                        </h5>
                                        <div class="d-flex">
                                            <span class="badge badge-danger font-size-12"> - 5.4% </span> 
                                            <span class="ml-2 text-truncate">From last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="widget">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="las la-user"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Customer</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                        <h5 class="mb-2">9,887 
                                            <i class="las la-angle-up text-success-teal"></i>
                                        </h5>
                                        <div class="d-flex">
                                            <span class="badge badge-success-teal font-size-12"> + 25% </span> 
                                            <span class="ml-2 text-truncate">From last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 Columns Ends-->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing ">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Weather Report</h5>
                                <h6 class="pt-1">Sydney, Australia</h6>
                            </div>
                            <div class="widget-content">
                                <div class="monthly-weather-report">
                                    <div class="d-sm-flex d-block justify-content-between mb-4">   
                                    </div>
                                    <div class="row weather-report-container justify-content-between">
                                        <div class="col-xl-4 col-md-5">
                                            <div class="tempareture-box-2 d-flex justify-content-sm-center justify-content-between mb-4 mb-sm-0">
                                                <div class="tempareture-box-icon">
                                                    <i class="las la-sun slow-spin text-warning font-135"></i>
                                                </div>
                                                <div class="tempareture-box-content text-center ml-4">
                                                    <div class="temp-top">
                                                        <span class="font-65 text-warning">18°C</span>
                                                    </div>
                                                    <div class="temp-bottom">
                                                        <a>Yesterday - <span class="temp-1 strong text-primary">24°C</span></a>
                                                        <a>Tomorrow - <span class="temp-2 strong text-primary">22°C</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row monthly-weather-report-inner">
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-warning font-45">
                                                            <i class="las la-sun"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>Warm</h5>
                                                            <p>Clear</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-black font-45">
                                                            <i class="las la-moon"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>Night</h5>
                                                            <p>Pleasant</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-info font-45">
                                                            <i class="las la-cloud-rain"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>Cloudy</h5>
                                                            <p>Raining</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-info font-45">
                                                            <i class="las la-tint"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>58%</h5>
                                                            <p>Humidity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-dpink font-45">
                                                            <i class="las la-wind"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>17 mph</h5>
                                                            <p>Wind Speed</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-info font-45">
                                                            <i class="las la-cloud-moon-rain"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>29.57 ml</h5>
                                                            <p>Rainfall</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gradient-success text-white mt-3">
                                    <div class="mb-0">
                                        <div class="">
                                            <div class="whole-week-days d-flex flex-wrap justify-content-sm-around p-3">
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Mon</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-moon font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">58°F</h6>
                                                            <p class="mb-0 text-white">28°C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Tue</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-sun font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">60°F</h6>
                                                            <p class="mb-0 text-white">29°C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Wed</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-moon font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">62°F</h6>
                                                            <p class="mb-0 text-white">30°C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Thu</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-sun font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">40°F</h6>
                                                            <p class="mb-0 text-white">19°C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Fri</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-sun-rain font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">62°F</h6>
                                                            <p class="mb-0 text-white">23°C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Sat</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-moon font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">58°F</h6>
                                                            <p class="mb-0 text-white">28°C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Top Seller Performance</h5>
                                <ul class="tabs tab-pills">
                                    <li>
                                        <div class="dropdown  custom-dropdown-icon">
                                            <a class="dropdown-toggle" href="index-2.html#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Options</span> <i class="las la-angle-down"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Quarterly</a>
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Half Yearly</a>
                                                <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                                                <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                                                <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                                                <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-content">
                                <div class="tabs tab-content row">
                                    <div class="left-area col-lg-4">
                                        <h6 class="mb-0 mt-4">WS Retail</h6>
                                        <p>Best Seller of the month</p>
                                        <h4 class="mt-3">$3,808</h4>
                                        <div class="d-flex">
                                            <span class="badge badge-success-teal font-size-12"> + 25% </span> 
                                            <span class="ml-2 text-truncate">more sales</span>
                                        </div>
                                        <button class="btn btn-sm btn-primary mt-4">View Details</button>
                                        <p class="mb-0 mt-4">Last Month</p>
                                        <p>$2,405</p>
                                    </div>
                                    <div class="right-area col-lg-8">
                                        <div id="content_1" class="tabcontent"> 
                                            <div id="bestSeller"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-two">
                            <div class="widget-heading">
                                <h5 class="text-center">Top Selling Product</h5>
                            </div>
                            <div class="widget-content mt-4">
                                <img src="common-assets/img/product-1.jpg" class="rounded-circle avatar-md img-thumbnail m-auto object-cover"/>
                                <h6 class="text-center mt-2">Product One</h6>
                                <p class="text-center">$5,458</p>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="badge badge-success font-size-12"> + 25% </span> 
                                    <span class="ml-2 text-truncate">From last month</span>
                                </div>
                                <img src="common-assets/img/product-4.jpg" class="rounded-circle avatar-md img-thumbnail m-auto object-cover"/>
                                <h6 class="text-center mt-2">Product Two</h6>
                                <p class="text-center">$5,458</p>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="badge badge-danger font-size-12"> - 25% </span> 
                                    <span class="ml-2 text-truncate">From last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 layout-spacing">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget widget-chart-one">
                                    <div class="widget-heading">
                                        <h5 class="">Sales details of product</h5>
                                    </div>
                                    <div class="widget-content">
                                        <div class="d-flex justify-content-between">
                                            <p class="font-35 text-success-teal">$74,989</p>
                                            <i class="lar la-chart-bar font-45 text-success-teal"></i>
                                        </div>
                                        <p>Total 175 Sales</p>
                                        <a class="btn btn-sm btn-primary">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="widget widget-chart-one">
                                    <div class="widget-heading">
                                        <h5 class="">Pending payment of product</h5>
                                    </div>
                                    <div class="widget-content">
                                        <div class="d-flex justify-content-between">
                                            <p class="font-35 text-warning">$24,989</p>
                                            <i class="lar la-chart-bar font-45 text-warning"></i>
                                        </div>
                                        <p>Total 98 clients</p>
                                        <a class="btn btn-sm btn-warning">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="widget widget-chart-one">
                                    <div class="widget-heading">
                                        <h5 class="">Recent Items</h5>
                                        <ul class="tabs tab-pills">
                                            <li>
                                                <div class="dropdown  custom-dropdown-icon">
                                                    <a class="dropdown-toggle" href="index-2.html#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Options</span> <i class="las la-angle-down"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                                        <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                                                        <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                                                        <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget-content">
                                        <div class="d-flex flex-column">
                                            <div class="media recent-items w-100 align-items-center mt-2 mb-4">
                                                <img src="common-assets/img/product-1.jpg" alt="">
                                                <div class="media-body ml-4 mt-sm-3">
                                                    <h5 class="mb-1">1005 Farland Street,West Roxbury</h5>
                                                    <p>05 Jul 2018, Fergus Douchebag</p>
                                                </div>
                                                <a class="badge badge-success-teal text-white mr-2">Completed</a>
                                                <a class="badge badge-warning text-white d-none d-lg-block">Pending</a>
                                            </div>
                                            <div class="media recent-items w-100 align-items-center mb-4">
                                                <img src="common-assets/img/product-2.jpg" alt="">
                                                <div class="media-body ml-4 mt-sm-3">
                                                    <h5 class="mb-1">845 Nrarland Street,east Opobury </h5>
                                                    <p>12 Jul 2019, Fergus Douchebag</p>
                                                </div>
                                                <a class="badge badge-info text-white mr-2">Processing</a>
                                                <a class="badge badge-success text-white d-none d-lg-block">Done</a>
                                            </div>
                                            <div class="media recent-items w-100 align-items-center mb-4">
                                                <img src="common-assets/img/product-3.jpg" alt="">
                                                <div class="media-body ml-4 mt-sm-3">
                                                    <h5 class="mb-1">8/D Talbagan Street,North 24 midland Opobury </h5>
                                                    <p>12 Jul 2019, Jonas Ferguson</p>
                                                </div>
                                                <a class="badge badge-danger text-white mr-2">Failed</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-content">
                                <div class="agent-info text-center">
                                    <div class="agent-img pb-3">
                                        <img src="common-assets/img/profile-5.jpg" class="img-thumbnail rounded-circle" alt="image">
                                    </div>
                                    <h5 class="text-dark">Hermann P. Schnitzel</h5>
                                    <p>Agent of Property</p>
                                    <h6 class="mb-3 mt-3"><span class="text-primary pr-2"><i class="fa fa-phone"></i></span> (+1) 774-238-0096</h6>
                                </div>
                                <form action="index.php" class="agent-req-form mt-2">
                                    <h6 class="text-muted text-center mb-4">Request Inquiry</h6>
                                    <div class="form-group">
                                        <input type="text" placeholder="Full Name *" class="form-control bg-white text-muted">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email ID *" class="form-control bg-white text-muted">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" placeholder="Phone No *" class="form-control bg-white text-muted">
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="3" placeholder="Message *" class="form-control bg-white text-muted"></textarea>
                                    </div>
                                    <div class="form-group text-right mb-0">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Submit Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget-chart-one">
                            <div class="widget-content overflow-hidden">
                                <div class="ticker-wrap">
                                    <div class="ticker-heading bg-gradient-info">
                                        <p>Overview</p>
                                    </div>
                                    <div class="ticker">
                                        <div class="ticker-item">Letterpress chambray brunch.</div>
                                        <div class="ticker-item">Vice mlkshk crucifix beard chillwave meditation hoodie asymmetrical Helvetica.</div>
                                        <div class="ticker-item">Ugh PBR&B kale chips Echo Park.</div>
                                        <div class="ticker-item">Gluten-free mumblecore chambray mixtape food truck. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Main Body Ends -->
            <div class="responsive-msg-component">
                <p>
                    <a class="close-msg-component"><i class="las la-times"></i></a>
                    Please reload the page when you change the viewport size to view the responsive functionalities correctly
                </p>
            </div>
            <!-- Copyright Footer Starts -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="http://TUCEEweb.xyz">TUCEEWeb</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Crafted with extra <i class="las la-heart text-danger"></i></p>
                </div>
            </div>
            <!-- Copyright Footer Ends -->
            <!-- Arrow Starts -->
            <div class="scroll-top-arrow" style="display: none;">
                <i class="las la-angle-up"></i>
            </div>
            <!-- Arrow Ends -->
        </div>
        <!--  Content Area Ends  -->
        <!--  Rightbar Area Starts -->
        <div class="right-bar">
            <div  class="h-100">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link  active" data-toggle="tab" href="index-2.html#chat-tab" role="tab" aria-selected="true">
                                                <i class="las la-sms"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="index-2.html#status-tab" role="tab" aria-selected="false">
                                                <i class="las la-tasks"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="index-2.html#settings-tab" role="tab" aria-selected="false">
                                                <i class="las la-cog"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes starts -->
                                    <div class="tab-content pt-0 rightbar-tab-container">
                                        <div class="tab-pane active rightbar-tab" id="chat-tab" role="tabpanel">
                                            <form class="search-bar p-3">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control search-form-control" placeholder="Search">
                                                    <span class="mdi mdi-magnify"></span>
                                                </div>
                                            </form>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chat Groups</h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-warning"></i>
                                                    <span class="mb-0 mt-1 text-warning">Frontend Team</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-danger"></i>
                                                    <span class="mb-0 mt-1 text-danger">Back Office</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 d-block">
                                                    <i class="las la-dot-circle mr-1 text-info"></i>
                                                    <span class="mb-0 mt-1 text-info">Personal</span>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">My Favourites <a href="javascript: void(0);"><i class="las la-angle-right"></i></i></a></h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="common-assets/img/profile-1.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Andrew Mackie</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chats <a href="javascript: void(0);"><i class="las la-angle-right"></i></i></a></h6>
                                            <div class="p-2 pb-4">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="common-assets/img/profile-3.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Owen Hargrieves</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">That's really cool</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="common-assets/img/profile-4.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Riyana Giyan</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">When do you send me those files ?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="text-center pt-4">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                        Load more
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="status-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Order Status </h6>
                                            <div class="px-2">
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Success<span class="float-right">75%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Processing<span class="float-right">37%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="font-weight-medium px-3 mb-0 mt-4 text-uppercase">Payment Status</h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Failed<span class="float-right">12%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment on hold<span class="float-right">67%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Successful<span class="float-right">84%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="text-center pt-2">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-sm">Show All</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="settings-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Account Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Sync Contacts</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Update</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Recieve Notifications</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Mail Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Mail Auto Responder</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Trash Delete</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Custom Signature</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Chat Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Show Online</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Chat Notifications</p>
                                                </div>
                                            </div>
                                            <div class="px-2 text-center pt-4">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    Set Default
                                                </a>
                                                <button class="ripple-button ripple-button-primary btn-sm" type="button">
                                                    <div class="ripple-ripple js-ripple">
                                                      <span class="ripple-ripple__circle"></span>
                                                    </div>
                                                    Ripple Effect
                                                  </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab panes ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Rightbar Area Ends -->
    </div>
    <!-- Main Container Ends -->
    <!-- Common Script Starts -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="common-assets/bootstrap/js/popper.min.js"></script>
    <script src="common-assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="common-assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- Common Script Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="assets/js/loader.js"></script>
    <script src="common-assets/plugins/apex/apexcharts.min.js"></script>
    <script src="common-assets/plugins/flatpickr/flatpickr.js"></script>
    <script src="assets/js/dashboard/dashboard_2.js"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>