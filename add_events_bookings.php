<?php

require 'loader/autoloader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>TUCEE - Event Booking </title>
    <link rel="icon" type="image/x-icon" href="common-assets/img/favicon.ico"/>
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
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
    <link href="assets/css/forms/form-widgets.css" rel="stylesheet" type="text/css">
    <script src="common-assets/plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="common-assets/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="common-assets/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/basic-ui/custom_sweetalert.css" rel="stylesheet" type="text/css" />
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
                                            <a class="text-muted font-12" href="forms_layouts.html#">
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
                                                    <a class="dropdown-icon-item" href="forms_layouts.html#">
                                                        <img src="common-assets/img/company-1.jpg" alt="slack">
                                                        <span>Cube</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="forms_layouts.html#">
                                                        <img src="common-assets/img/company-2.jpg" alt="Github">
                                                        <span>HTech</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="forms_layouts.html#">
                                                        <img src="common-assets/img/company-3.jpg" alt="dribbble">
                                                        <span>Inovation</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="forms_layouts.html#">
                                                        <img src="common-assets/img/company-4.jpg" alt="bitbucket">
                                                        <span>Circle</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="forms_layouts.html#">
                                                        <img src="common-assets/img/company-5.jpg" alt="dropbox">
                                                        <span>Techno</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="forms_layouts.html#">
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Events Bookings</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><span>Add Events Bookings</span></li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area  -->
            <!-- Main Body Starts -->
            <!-- <div class="layout-px-spacing">
                <div class="layout-top-spacing mb-2">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="container p-0">
                                <div class="row layout-top-spacing">
                                    <div class="col-lg-6 layout-spacing">
                                        <div class="statbox widget box box-shadow mb-4">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Vertical Form Layout</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <form>
                                                            <div class="form-group mb-2">
                                                                <label class="col-form-label">Name</label>
                                                                <input type="text" class="form-control" id="name" placeholder="" value="" required>
                                                                <span class="form-text text-muted">Please enter your full name</span>
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <label class="col-form-label">Email</label>
                                                                <input type="text" class="form-control" id="name" placeholder="" value="" required>
                                                                <span class="form-text text-muted">Please enter your email address</span>
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <label class="col-form-label">Password</label>
                                                                <input type="password" class="form-control" id="name" placeholder="" value="" required>
                                                                <span class="form-text text-muted">Please enter a password</span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-footer text-right">
                                                <button type="reset" class="btn btn-primary mr-2">Submit</button>
                                                <button type="reset" class="btn btn-outline-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 layout-spacing">
                                        <div class="statbox widget box box-shadow mb-4">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Horizontal Form Layout</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">
                                                <div class="form-group row">
                                                    <div class="col-lg-3 col-sm-12">
                                                        <label class="col-form-label">Name</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="name" placeholder="" value="" required="">
                                                            <span class="form-text text-muted">Please enter your full name</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 col-sm-12">
                                                        <label class="col-form-label">Email</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" id="name" placeholder="" value="" required="">
                                                            <span class="form-text text-muted">Please enter your email address</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 col-sm-12">
                                                        <label class="col-form-label">Password</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" id="name" placeholder="" value="" required="">
                                                            <span class="form-text text-muted">Please enter a password</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="login-one-inputs check mb-2">
                                                            <input class="inp-cbx" id="cbx" type="checkbox" style="display: none">
                                                            <label class="cbx" for="cbx">
                                                                <span>
                                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                    </svg>
                                                                </span>
                                                                <span class="text-light-black">I agree to the terms and conditions</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-footer text-right">
                                                <button type="reset" class="btn btn-primary mr-2">Submit</button>
                                                <button type="reset" class="btn btn-outline-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 layout-spacing">
                                        <div class="statbox widget box box-shadow mb-4">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Grid Form Layout (2 Columns)</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">
                                                <div class="w-100">
                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Full Name:</label>
															<input type="email" class="form-control" placeholder="Enter full name">
															<span class="form-text text-muted">Please enter your full name</span>
														</div>
														<div class="col-lg-6">
															<label>Contact Number:</label>
															<input type="email" class="form-control" placeholder="Enter contact number">
															<span class="form-text text-muted">Please enter your contact number</span>
														</div>
													</div>
                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Address:</label>
															<div class="input-group">
																<input type="text" class="form-control" placeholder="Enter your address">
																<div class="input-group-append">
																	<span class="input-group-text">
																		<i class="la la-map-marker"></i>
																	</span>
																</div>
															</div>
															<span class="form-text text-muted">Please enter your address</span>
														</div>
														<div class="col-lg-6">
															<label>Postcode:</label>
															<div class="input-group">
																<input type="text" class="form-control" placeholder="Enter your postcode">
																<div class="input-group-append">
																	<span class="input-group-text">
																		<i class="la la-bookmark-o"></i>
																	</span>
																</div>
															</div>
															<span class="form-text text-muted">Please enter your postcode</span>
														</div>
													</div>
                                                </div>
                                            </div>
                                            <div class="widget-footer text-right">
                                                <button type="reset" class="btn btn-primary mr-2">Submit</button>
                                                <button type="reset" class="btn btn-outline-primary">Cancel</button>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-lg-12 layout-spacing">
                                        <div class="statbox widget box box-shadow mb-4">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Grid Form Layout (3 Columns)</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">
                                                <div class="w-100">
                                                    <div class="form-group row">
														<div class="col-lg-4">
															<label>Full Name:</label>
															<input type="email" class="form-control" placeholder="Enter full name">
															<span class="form-text text-muted">Please enter your full name</span>
														</div>
														<div class="col-lg-4">
															<label>Email:</label>
															<input type="email" class="form-control" placeholder="Enter email">
															<span class="form-text text-muted">Please enter your email</span>
														</div>
														<div class="col-lg-4">
															<label>Username:</label>
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="la la-user"></i>
																	</span>
																</div>
																<input type="text" class="form-control" placeholder="">
															</div>
															<span class="form-text text-muted">Please enter your username</span>
														</div>
                                                    </div>
                                                    <div class="form-group row">
														<div class="col-lg-4">
															<label>Contact:</label>
															<input type="email" class="form-control" placeholder="Enter contact number">
															<span class="form-text text-muted">Please enter your contact</span>
														</div>
														<div class="col-lg-4">
															<label>Fax:</label>
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="la la-info-circle"></i>
																	</span>
																</div>
																<input type="text" class="form-control" placeholder="Fax number">
															</div>
															<span class="form-text text-muted">Please enter fax</span>
														</div>
														<div class="col-lg-4">
															<label>Address:</label>
															<div class="input-group">
																<input type="text" class="form-control" placeholder="Enter your address">
																<div class="input-group-append">
																	<span class="input-group-text">
																		<i class="la la-map-marker"></i>
																	</span>
																</div>
															</div>
															<span class="form-text text-muted">Please enter your address</span>
														</div>
													</div>
                                                </div>
                                            </div>
                                            <div class="widget-footer text-right">
                                                <button type="reset" class="btn btn-primary mr-2">Submit</button>
                                                <button type="reset" class="btn btn-outline-primary">Cancel</button>
                                            </div>
                                        </div> 
                                    </div> -->
                                    <div class="col-lg-12 layout-spacing">
                                        <form class="eventeb">
                                            <div class="statbox widget box box-shadow mb-4">
                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <br>
                                                            <div class="makeitSticky z">
                                                                <h4>Events Booking</h4>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content widget-content-area">
                                                    <div class="w-100">
                                                        <div class="mt-2">
                                                            <input type="text" name="institution" placeholder="Name Of Institution"  class="form-control mb-3" /> 
                                                    <input type="text" name="title" placeholder="Title Of Program"  class="form-control mb-3" /> 
                                                    <div class="form-group row">
                                                        <label class="col-3">Residential Address</label>
                                                        <div class="col-9">
                                                            <input class="form-control form-control-solid" type="text" placeholder="P.O. Box 283 8562 Fusce Rd." name="address">
                                                        </div>
                                                    </div>
                                                    <input type="text" name="program" placeholder="Program Requested"  class="form-control mb-3"/>
                                                    <div class="form-group row">
                                                        <label class="col-3">Date Requested</label>
                                                        <div class="col-9">
                                                            <input class="form-control form-control-solid" type="date" name="requestdate">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-3">Date Implemented</label>
                                                        <div class="col-9">
                                                            <input class="form-control form-control-solid" type="date"  name="implementeddate">
                                                        </div>
                                                    </div>
                                            

                                                    <input type="text" name="resourceperson" placeholder="Resource Person Assigned"  class="form-control mb-3" /> 
                                                    <input type="number" name="budget" placeholder="Budget"  class="form-control mb-3" /> 
                                                    <input type="text" name="remarks" placeholder="Remarks"  class="form-control mb-3" /> 
                                                    <br><br>
                                                    <div class="form-card">
                                                        <h5 class="fs-title mb-4">Contact Person Information</h5>
                                                        <input type="text" name="cfname" placeholder="First Name"  class="form-control mb-3" /> 
                                                        <input type="text" name="clname" placeholder="Last Name"  class="form-control mb-3" /> 
                                                        <!-- <input type="text" name="relation" placeholder="Relation"  class="form-control mb-3" />  -->
                                                        <div class="form-group row">
                                                            <label class="col-3">Residential Address</label>
                                                            <div class="col-9">
                                                                <input class="form-control form-control-solid" type="text" placeholder="P.O. Box 283 8562 Fusce Rd." name="cpaddress">
                                                            </div>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="las la-phone-volume font-17"></i></span>
                                                            </div>
                                                            <input type="text" placeholder="Contact No."  class="form-control" name="cpcontact" /> 
                                                        </div>
                                                        <!-- <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="las la-phone font-17"></i></span>
                                                            </div>
                                                            <input type="text" name="phno_2" placeholder="Alternate Contact No." class="form-control" />
                                                        </div> -->
                                                    </div>
                                                    <!-- <input type="number" name="total_attendance" placeholder="Total Attendance"  class="form-control mb-3" /> 
                                                    <input type="text" name="speaker" placeholder="Speaker"  class="form-control mb-3" /> 
                                                    <input type="text" name="state_of_report" placeholder="State Of Report"  class="form-control mb-3" />  -->


    

                                                            <!-- <div class="form-group row">
                                                                <label class="col-3">Date for next session</label>
                                                                <div class="col-9">
                                                                    <input class="form-control form-control-solid" type="date" >
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <h5 class="fs-title mb-4">Image Upload:</h2>
                                                                </div> -->
                                                                <!-- <div class="col-5">
                                                                    <h2 class="steps">Step 3 - 4</h2>
                                                                </div> -->
                                                            <!-- </div> 
                                                            <div class="attached-files">
                                                                <img id="image-preview" width="320">
                                                            </div>
                                                            <label for="file-upload" class="custom-file-upload mb-0">
                                                                <a title="Attach a file" class="mr-2 pointer text-primary">
                                                                    <i class="las la-paperclip font-20"></i>
                                                                    <span class="font-17">Upload Pysychometric Text</span>
                                                                </a>
                                                            </label>
                                                            <input id="file-upload" name='upload_cont_img' type="file" accept="image/*" style="display:none;" onchange="handleFileChange()">



                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <h5 class="fs-title mb-4">Image Upload:</h2>
                                                                </div> -->
                                                                <!-- <div class="col-5">
                                                                    <h2 class="steps">Step 3 - 4</h2>
                                                                </div> -->
                                                            <!-- </div> 
                                                            <div class="attached-files">
                                                                <img id="image-preview" width="320">
                                                            </div>
                                                            <label for="file-upload" class="custom-file-upload mb-0">
                                                                <a title="Attach a file" class="mr-2 pointer text-primary">
                                                                    <i class="las la-paperclip font-20"></i>
                                                                    <span class="font-17">Upload Copy Of Report</span>
                                                                </a>
                                                            </label>
                                                            <input id="file-upload" name='upload_cont_img' type="file" accept="image/*" style="display:none;" onchange="handleFileChange()">
                                                            -->
                                                            <!-- <div class="row">
                                                                <div class="col-md-2 align-center d-flex"> 
                                                                    <label class="pay mb-0">Gender</label> 
                                                                </div>
                                                                <div class="col-md-10"> 
                                                                    <select class="list-dt" id="month" name="expmonth">
                                                                        <option selected>Male</option>
                                                                        <option>Female</option>
                                                                        
                                                                    </select>  -->
                                                                    <!-- <select class="list-dt" id="year" name="expyear">
                                                                        <option selected>Year</option>
                                                                    </select>  -->
                                                                <!-- </div>
                                                            </div> -->
                                                            <!-- <div class="form-group row">
                                                                <label class="col-3">Date Visited</label>
                                                                <div class="col-9">
                                                                    <input class="form-control form-control-solid" type="date" placeholder="choose date">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-3">Purpose</label>
                                                                <div class="col-9">
                                                                    <input class="form-control form-control-solid" type="text" placeholder="Purpose for the visit">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-3">Remark's</label>
                                                                <div class="col-9">
                                                                    <input class="form-control form-control-solid" type="text" placeholder="Remarks">
                                                                </div>
                                                            </div> -->
                                                            <!-- <input type="text" name="employment_status" placeholder="Employment Status"  class="form-control mb-3" /> 
                                                                <input type="text" name="job_title" placeholder="Job Title"  class="form-control mb-3" /> 
                                                                <input type="text" name="highest_education" placeholder="highest Education"  class="form-control mb-3" /> 

                                                                <div class="row">
                                                                    <div class="col-md-2 align-center d-flex"> 
                                                                        <label class="pay mb-0">Marital Status</label> 
                                                                    </div>
                                                                    <div class="col-md-10"> 
                                                                        <select class="list-dt" id="month" name="expmonth">
                                                                            <option selected>Single</option>
                                                                            <option>Married</option>
                                                                            <option>Divorced</option>

                                                                            
                                                                        </select>  -->
                                                                        <!-- <select class="list-dt" id="year" name="expyear">
                                                                            <option selected>Year</option>
                                                                        </select>  -->
                                                                    <!-- </div>
                                                                </div> -->
                                                                <!-- <input type="text" name="relation" placeholder="Marital Status"  class="form-control mb-3" />  -->
                                                                <!-- <div class="form-group row">
                                                                    <label class="col-3">Residential Address</label>
                                                                    <div class="col-9">
                                                                        <input class="form-control form-control-solid" type="text" placeholder="P.O. Box 283 8562 Fusce Rd.">
                                                                    </div>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="las la-phone-volume font-17"></i></span>
                                                                    </div>
                                                                    <input type="text" name="phno" placeholder="Contact No."  class="form-control" /> 
                                                                </div> -->
                                                            <!-- <div class="form-group row">
                                                                <label class="col-3">Phone</label>
                                                                <div class="col-9">
                                                                    <div class="input-group input-group-solid">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                <i class="la la-phone"></i>
                                                                            </span>
                                                                        </div>
                                                                        <input type="text" class="form-control form-control-solid"  placeholder="Phone">
                                                                    </div>
                                                                    <span class="form-text text-muted">Don't include your country code.</span>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="form-group row">
                                                                <label class="col-3">Email Address</label>
                                                                <div class="col-9">
                                                                    <div class="input-group input-group-solid">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                <i class="la la-at"></i>
                                                                            </span>
                                                                        </div>
                                                                        <input type="text" class="form-control form-control-solid"  placeholder="Email">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-3">Address Line 1</label>
                                                                <div class="col-9">
                                                                    <input class="form-control form-control-solid" type="text" placeholder="P.O. Box 283 8562 Fusce Rd.">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-3">Address Line 2</label>
                                                                <div class="col-9">
                                                                    <input class="form-control form-control-solid" type="text" placeholder="8562 Fusce Rd.">
                                                                </div>
                                                            </div>
                                                            <div class="form-card">
                                                                <h5 class="fs-title mb-4">Emergency Contact</h5>
                                                                <input type="text" name="fname" placeholder="First Name"  class="form-control mb-3" /> 
                                                                <input type="text" name="lname" placeholder="Last Name"  class="form-control mb-3" /> 
                                                                <input type="text" name="relation" placeholder="Relation"  class="form-control mb-3" /> 
                                                                <div class="form-group row">
                                                                    <label class="col-3">Residential Address</label>
                                                                    <div class="col-9">
                                                                        <input class="form-control form-control-solid" type="text" placeholder="P.O. Box 283 8562 Fusce Rd.">
                                                                    </div>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="las la-phone-volume font-17"></i></span>
                                                                    </div>
                                                                    <input type="text" name="phno" placeholder="Contact No."  class="form-control" /> 
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="las la-phone font-17"></i></span>
                                                                    </div>
                                                                    <input type="text" name="phno_2" placeholder="Alternate Contact No." class="form-control" />
                                                                </div> -->
                                                            <!-- <div class="form-group row">
                                                                <label class="col-3">City</label>
                                                                <div class="col-9">
                                                                    <input class="form-control form-control-solid" type="text" value="Roseville ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-3">State / Province / Region</label>
                                                                <div class="col-9">
                                                                    <input class="form-control form-control-solid" type="text" value="NH ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-3">Zip / Postal Code</label>
                                                                <div class="col-9">
                                                                    <input class="form-control form-control-solid" type="text" value="11523">
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-footer text-right">
                                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                    <button type="reset" class="btn btn-outline-primary">Cancel</button>
                                                </div>
                                            </div>  
                                        </form>
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
                                            <a class="nav-link  active" data-toggle="tab" href="forms_layouts.html#chat-tab" role="tab" aria-selected="true">
                                                <i class="las la-sms"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="forms_layouts.html#status-tab" role="tab" aria-selected="false">
                                                <i class="las la-tasks"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="forms_layouts.html#settings-tab" role="tab" aria-selected="false">
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
    <!-- Common Script Ends-->
    <!-- Page Level Plugin/Script Starts -->
    <script src="assets/js/forms/forms-layouts.js"></script>
    <script src="common-assets/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="assets/js/basicui/sweet_alerts.js"></script>
    <!-- Page Level Plugin/Script Ends -->

     <!-- php york script -->
     <script src="processor.js"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>