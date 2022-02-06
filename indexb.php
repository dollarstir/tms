
<?php
require 'loader/autoloader.php';
$checker = new Session();
$counter = new Counter();
$checker->mainchecker('/tms/login');

?>
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
        <?php include 'logo.php';?>
        <!-- Logo area (Larger Screen) Ends -->
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="rightbar-overlay"></div>
        <!--  Sidebar Starts  -->
        <div class="sidebar-wrapper sidebar-theme">
            <nav id="sidebar">
                <?php include 'leftbar.php';?>
                <?php include 'sidebar.php'; ?>
                </div>
            </nav>
        </div>
        <!--  Sidebar Ends  -->
        <!--  Content Area Starts  -->
        <div id="content" class="main-content">
            <!--  Navbar Starts  -->
            <?php include 'topbar.php';?>
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
                                                <img src="upload/<?php echo $_SESSION['user']['pic'];?>" alt="" class="avatar-md rounded-circle img-thumbnail">
                                            </div>
                                            <div class="align-self-center media-body">
                                                <div class="text-muted">
                                                    <p class="mb-2 text-primary">Welcome to dashboard</p>
                                                    <h5 class="mb-1"><?php echo $_SESSION['user']['name']; ?></h5>
                                                    <p class="mb-0">Administrator</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-self-center col-lg-5">
                                        <div class="text-lg-center mt-4 mt-lg-0">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Visitors</p>
                                                        <h5 class="mb-0"><?php echo $counter->countall('visitors');  ?></h5>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Admins</p>
                                                        <h5 class="mb-0"><?php echo $counter->countall('cmd');  ?></h5>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="d-none d-lg-flex col-lg-3 align-items-end justify-content-center flex-column">
                                        <button class="btn btn-primary">
                                           Settings
                                        </button>
                                        <button class="btn btn-info mt-2">
                                            My Chat
                                        </button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 Columns -->
                    
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                        
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="widget">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="las la-pen"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Bookings</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                        <center><h5 class="mb-2"><?php echo $counter->countall('bookings');  ?>
                                            
                                        </h5></center>
                                        
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
                                        <h5 class="font-size-14 mb-0">Customers</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                       <center> <h5 
                                        class="mb-2"><?php echo $counter->countall('customers');  ?>
                                            
                                        </h5></center>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="widget">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="lab la-elementor"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Sessions</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                       <center> <h5 class="mb-2">
                                            <?php echo $counter->countall('sessions');  ?>
                                            
                                        </h5></center>
                                        
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>




                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                        
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="widget">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="las la-pen"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Event Booked</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                        <center><h5 class="mb-2"><?php echo $counter->countall('eventb');  ?>
                                            
                                        </h5></center>
                                        
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
                                        <h5 class="font-size-14 mb-0">Staff</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                       <center> <h5 
                                        class="mb-2"><?php echo $counter->countall('staff');  ?>
                                            
                                        </h5></center>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="widget">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="lab la-elementor"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Event Executed</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                       <center> <h5 class="mb-2">
                                            <?php echo $counter->countall('eventx');  ?>
                                            
                                        </h5></center>
                                        
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
                                <h6 class="pt-1">Accra, Ghana</h6>
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
                    
                   
                    
                   
                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
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
                    </div>  -->
                </div>
            </div>
            <!-- Main Body Ends -->
            <!-- <div class="responsive-msg-component">
                <p>
                    <a class="close-msg-component"><i class="las la-times"></i></a>
                    Please reload the page when you change the viewport size to view the responsive functionalities correctly
                </p>
            </div> -->
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