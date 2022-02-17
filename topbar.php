<?php
$g = new Sel();
$id = $_SESSION['user']['id'];
$man=$g->select('cmd',
[
    ['id','=',$id]
]
);

$name = $man[0]['name'];
// var_dump($man[0]['id']);
$name = explode(" ",$name);
$fname= $name[0];
$lname = $name[1];

echo '<div class="header-container fixed-top">
<header class="header navbar navbar-expand-sm">
    <ul class="navbar-item flex-row ml-md-0 ml-auto theme-brand">
        <li class="nav-item align-self-center d-md-none">
            <div class="d-flex flex-row align-center justify-content-center logo-area">
                <a href="/tms/home" class="nav-link pr-0 pl-1">
                    <img src="/tm/common-assets/img/logo.png" class="navbar-logo" alt="logo">
                </a>
                <a href="/tms/home" class="nav-link pr-4 d-none d-md-block"> TUCEE </a>
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
                    <img src="/tm/common-assets/img/flag/usa-flag.png" class="flag-width" alt="flag"> 
                    <span class="align-self-center">&nbsp;English</span>
                </a>
                <a class="dropdown-item d-flex" href="javascript:void(0);">
                    <img src="/tm/common-assets/img/flag/spain-flag.png" class="flag-width" alt="flag"> 
                    <span class="align-self-center">&nbsp;Spanish</span>
                </a>
                <a class="dropdown-item d-flex" href="javascript:void(0);">
                    <img src="/tm/common-assets/img/flag/france-flag.png" class="flag-width" alt="flag"> 
                    <span class="align-self-center">&nbsp;French</span>
                </a>
                <a class="dropdown-item d-flex" href="javascript:void(0);">
                    <img src="/tm/common-assets/img/flag/saudi-arabia-flag.png" class="flag-width" alt="flag"> 
                    <span class="align-self-center">&nbsp;Arabic</span>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown user-profile-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <img src="/tms/upload/'.$man[0]['pic'].'" alt="avatar">
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                <div class="nav-drop is-account-dropdown" >
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span class="text-primary font-15">Welcome Admin !</span>
                        </div>
                        <div class="nav-drop-body account-items pb-0">
                            <a id="profile-link"  class="account-item" href="/tms/editprofile">
                                <div class="media align-center">
                                    <div class="media-left">
                                        <div class="image">
                                            <img class="rounded-circle avatar-xs" src="/tms/upload/'.$man[0]['pic'].'" alt="">
                                        </div>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">'.$fname.'</h6>
                                        <small>'.$man[0]['username'].'</small>
                                    </div>
                                    <div class="media-right">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="/tms/editprofile">
                            <div class="media align-center">
                                <div class="icon-wrap">
                                    <i class="las la-user font-20"></i>
                                </div>
                                <div class="media-content ml-3">
                                    <h6 class="font-13 mb-0 strong">My Account</h6>
                                </div>
                            </div>
                            </a>


                            <a class="account-item" href="/tms/newadmin">
                            <div class="media align-center">
                                <div class="icon-wrap">
                                    <i class="las la-file font-20"></i>
                                </div>
                                <div class="media-content ml-3">
                                    <h6 class="font-13 mb-0 strong">Add New Admin</h6>
                                </div>
                            </div>
                            </a>

                            <a class="account-item" href="/tms/alladmins">
                            <div class="media align-center">
                                <div class="icon-wrap">
                                    <i class="las la-eye font-20"></i>
                                </div>
                                <div class="media-content ml-3">
                                    <h6 class="font-13 mb-0 strong">View Admins</h6>
                                </div>
                            </div>
                            </a>

                            <a class="account-item" href="/tms/newsalary">
                            <div class="media align-center">
                                <div class="icon-wrap">
                                    <i class="las la-pen font-20"></i>
                                </div>
                                <div class="media-content ml-3">
                                    <h6 class="font-13 mb-0 strong">Add Salary</h6>
                                </div>
                            </div>
                            </a>

                            <a class="account-item" href="/tms/salaryrecords">
                            <div class="media align-center">
                                <div class="icon-wrap">
                                    <i class="las la-eye font-20"></i>
                                </div>
                                <div class="media-content ml-3">
                                    <h6 class="font-13 mb-0 strong">View Salaries</h6>
                                </div>
                            </div>
                            </a>
                            
                           <!-- <a class="account-item settings">
                            <div class="media align-center">
                                <div class="icon-wrap">
                                    <i class="las la-cog font-20"></i>
                                </div>
                                <div class="media-content ml-3">
                                    <h6 class="font-13 mb-0 strong">Settings</h6>
                                </div>
                            </div>
                            </a>-->
                            
                            <hr class="account-divider">
                            <a class="account-item" href="/tms/logout">
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
    
</header>
</div>
<!--  Navbar Ends  -->
<!--  Navbar Starts / Breadcrumb Area  -->
<div class="sub-header-container">
<header class="header navbar navbar-expand-sm">
    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
        <i class="las la-bars"></i>
    </a>
    
    
</header>
</div>';


?>