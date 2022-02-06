<?php

require 'loader/autoloader.php';
$checker = new Session();
$checker->mainchecker('/tms/login');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>TUCEE Add Admin</title>
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
    <link rel="stylesheet" type="text/css" href="common-assets/plugins/dropify/dropify.min.css">
    <link href="assets/css/pages/profile_edit.css" rel="stylesheet" type="text/css" />
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
            <?php include 'leftbar.php';?>
                <!-- <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu active">
                        <a href="javascript:void(0);" id="dashboard" class="main-item dropdown-toggle">
                            <i class="las la-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="apps" class="main-item dropdown-toggle">
                            <i class="lab la-medapps"></i>
                            <span>Apps</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="authPages" class="main-item dropdown-toggle">
                            <span class="new-notification"></span>
                            <i class="las la-lock"></i>
                            <span>Auth Pages</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="otherPages" data-active="true" class="main-item dropdown-toggle">
                            <i class="las la-file"></i>
                            <span>Other Pages</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="basicUI" class="main-item dropdown-toggle">
                            <i class="las la-drafting-compass"></i>
                            <span>Basic UI</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="uiElements" class="main-item dropdown-toggle">
                            <i class="lab la-elementor"></i>
                            <span>UI Elements</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="forms" class="main-item dropdown-toggle">
                            <i class="lab la-wpforms"></i>
                            <span>Forms</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="maps" class="main-item dropdown-toggle">
                            <i class="las la-globe-americas"></i>
                            <span>Maps</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="charts" class="main-item dropdown-toggle">
                            <i class="las la-chart-pie"></i>
                            <span>Charts</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="widgets.html" class="dropdown-toggle">
                            <i class="las la-desktop"></i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="tables.html" class="dropdown-toggle">
                            <i class="las la-border-all"></i>
                            <span>Tables</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="datatables.html" class="dropdown-toggle">
                            <i class="las la-table"></i>
                            <span>Data Tables</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="starterKit" class="main-item dropdown-toggle">
                            <i class="las la-copy"></i>
                            <span>Starter Kit</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="multiLevel" class="main-item dropdown-toggle">
                            <i class="las la-sitemap"></i>
                            <span>Multi Level</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="Docs/index.php" class="dropdown-toggle">
                            <i class="las la-file-code"></i>
                            <span>Documentation</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-submenu">
                    <span class="sidebar-submenu-close" id="sidebarSubmenuClose">
                        <i class="las la-times"></i>
                    </span>
                    <div class="submenu" id="dashboardMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Dashboard</h5>
                                <p>Lorem ipsum dolor sit sed ametctetur elit.</p>
                            </div>
                            <ul class="submenu-list"> 
                                <li>
                                    <a href="index.php"> Dashboard 1 </a>
                                </li>
                                <li>
                                    <a href="index-2.html"> Dashboard 2 </a>
                                </li>
                                <li>
                                    <a href="index-3.html"> Dashboard 3 </a>
                                </li>
                                <li>
                                    <a href="index-4.html"> Dashboard 4 </a>
                                </li>
                                <li>
                                    <a href="index-5.html"> Dashboard 5 </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="appsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Apps</h5>
                                <p>Sed ut perspiciatis unde omnis iste.</p>
                            </div>
                            <ul class="submenu-list"> 
                                <li>
                                    <a href="apps_calendar.html"> Calender </a>
                                </li>
                                <li>
                                    <a href="apps_chat.html"> Chat </a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#appsCompanies" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                                    Companies <i class="las la-angle-right sidemenu-right-icon"></i>
                                    </a>
                                    <ul class="sub-submenu-list collapse" id="appsCompanies"> 
                                        <li>
                                            <a href="apps_companies.html"> List </a>
                                        </li>
                                        <li>
                                            <a href="apps_company_details.html"> Company Details </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="apps_contacts.html"> Contacts </a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#appsEcommerce" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                                    Ecommerce <i class="las la-angle-right sidemenu-right-icon"></i>
                                    </a>
                                    <ul class="sub-submenu-list collapse" id="appsEcommerce"> 
                                        <li>
                                            <a href="apps_ecommerce.html"> Dashboard </a>
                                        </li>
                                        <li>
                                            <a href="apps_ecommerce_products.html"> Products </a>
                                        </li>
                                        <li>
                                            <a href="apps_ecommerce_product_details.html"> Product Details </a>
                                        </li>
                                        <li>
                                            <a href="apps_ecommerce_add_product.html"> Add Product </a>
                                        </li>
                                        <li>
                                            <a href="apps_ecommerce_orders.html"> Orders </a>
                                        </li>
                                        <li>
                                            <a href="apps_ecommerce_order_details.html"> Order Details </a>
                                        </li>
                                        <li>
                                            <a href="apps_ecommerce_customers.html"> Customers </a>
                                        </li>
                                        <li>
                                            <a href="apps_ecommerce_sellers.html"> Sellers </a>
                                        </li>
                                        <li>
                                            <a href="apps_ecommerce_cart.html"> Cart </a>
                                        </li>
                                        <li>
                                            <a href="apps_ecommerce_checkout.html"> Checkout </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#appsEmail" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                                    Email <i class="las la-angle-right sidemenu-right-icon"></i>
                                    </a>
                                    <ul class="sub-submenu-list collapse" id="appsEmail"> 
                                        <li>
                                            <a href="apps_mail.html"> Inbox </a>
                                        </li>
                                        <li>
                                            <a href="apps_mail_details.html"> Email Details </a>
                                        </li>
                                        <li>
                                            <a href="apps_mail_create.html"> Compose Email </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="apps_file_manager.html"> File Manager </a>
                                </li>
                                <li>
                                    <a href="apps_invoice.html"> Invoice List </a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#appsNotes" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                                    Notes <i class="las la-angle-right sidemenu-right-icon"></i>
                                    </a>
                                    <ul class="sub-submenu-list collapse" id="appsNotes"> 
                                        <li>
                                            <a href="apps_notes.html"> List </a>
                                        </li>
                                        <li>
                                            <a href="apps_notes_details.html"> Note Details </a>
                                        </li>
                                        <li>
                                            <a href="apps_notes_create.html"> Creat Note </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="apps_social.html"> Social </a>
                                </li>
                                <li>
                                    <a href="apps_taskList.html"> Task List </a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#appsTickets" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                                    Tickets <i class="las la-angle-right sidemenu-right-icon"></i>
                                    </a>
                                    <ul class="sub-submenu-list collapse" id="appsTickets"> 
                                        <li>
                                            <a href="apps_tickets.html"> Ticket List </a>
                                        </li>
                                        <li>
                                            <a href="apps_ticket_details.html"> Ticket Details </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="authPagesMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Auth Pages</h5>
                                <p>Quis autem vel eum iure reprehenderit.</p>
                            </div>
                            <ul class="submenu-list" data-parent-element="#dashboard"> 
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#authTypeOne" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                                    Type 1 <i class="las la-angle-right sidemenu-right-icon"></i>
                                    </a>
                                    <ul class="sub-submenu-list collapse" id="authTypeOne"> 
                                        <li>
                                            <a href="auth_login_1.html"> Login </a>
                                        </li>
                                        <li>
                                            <a href="auth_signup_1.html"> Register </a>
                                        </li>
                                        <li>
                                            <a href="auth_lock_screen_1.html"> Lock Screen </a>
                                        </li>
                                        <li>
                                            <a href="auth_forget_password_1.html"> Forget Password </a>
                                        </li>
                                        <li>
                                            <a href="auth_confirm_email_1.html"> Confirm Email </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#authTypeTwo" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                                    Type 2 <i class="las la-angle-right sidemenu-right-icon"></i>
                                    </a>
                                    <ul class="sub-submenu-list collapse" id="authTypeTwo"> 
                                        <li>
                                            <a href="auth_login_2.html"> Login </a>
                                        </li>
                                        <li>
                                            <a href="auth_signup_2.html"> Register </a>
                                        </li>
                                        <li>
                                            <a href="auth_lock_screen_2.html"> Lock Screen </a>
                                        </li>
                                        <li>
                                            <a href="auth_forget_password_2.html"> Forget Password </a>
                                        </li>
                                        <li>
                                            <a href="auth_confirm_email_2.html"> Confirm Email </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#authTypeThree" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                                        Type 3
                                        <span class="menu-badge badge-danger">New</span>
                                    </a>
                                    <ul class="sub-submenu-list collapse" id="authTypeThree"> 
                                        <li>
                                            <a href="auth_login_3.html"> Login </a>
                                        </li>
                                        <li>
                                            <a href="auth_signup_3.html"> Register </a>
                                        </li>
                                        <li>
                                            <a href="auth_lock_screen_3.html"> Lock Screen </a>
                                        </li>
                                        <li>
                                            <a href="auth_forget_password_3.html"> Forget Password </a>
                                        </li>
                                        <li>
                                            <a href="auth_confirm_email_3.html"> Confirm Email </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="otherPagesMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Other Pages</h5>
                                <p>Nor again is there anyone who loves or pursues.</p>
                            </div>
                            <ul class="submenu-list"> 
                                <li>
                                    <a href="pages_coming_soon.html"> Coming Soon </a>
                                </li>
                                <li>
                                    <a href="pages_coming_soon_2.html"> Coming Soon 2 </a>
                                </li>
                                <li>
                                    <a href="pages_contact_us.html"> Contact Form </a>
                                </li>
                                <li>
                                    <a href="pages_contact_us_2.html"> Contact Form 2 </a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#otherPagesError" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                                        Error <i class="las la-angle-right sidemenu-right-icon"></i>
                                    </a>
                                    <ul class="sub-submenu-list collapse" id="otherPagesError"> 
                                        <li>
                                            <a href="pages_error404.html"> 404 </a>
                                        </li>
                                        <li>
                                            <a href="pages_error500.html"> 500 </a>
                                        </li>
                                        <li>
                                            <a href="pages_error503.html"> 503 </a>
                                        </li>
                                        <li>
                                            <a href="pages_maintenance.html"> Maintenance </a>
                                        </li>
                                        <li>
                                            <a href="pages_error404_2.html"> 404 Two </a>
                                        </li>
                                        <li>
                                            <a href="pages_error500_2.html"> 500 Two </a>
                                        </li>
                                        <li>
                                            <a href="pages_error503_2.html"> 503 Two </a>
                                        </li>
                                        <li>
                                            <a href="pages_maintenance_2.html"> Maintenance Two </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="pages_faq.html"> FAQ </a>
                                </li>
                                <li>
                                    <a href="pages_faq_2.html"> FAQ 2 </a>
                                </li>
                                <li>
                                    <a href="pages_faq_3.html"> FAQ 3 </a>
                                </li>
                                <li>
                                    <a href="pages_helpdesk.html"> Helpdesk </a>
                                </li>
                                <li>
                                    <a href="pages_notifications.html"> Notifications </a>
                                </li>
                                <li>
                                    <a href="pages_pricing.html"> Pricing </a>
                                </li>
                                <li>
                                    <a href="pages_pricing_2.html"> Pricing 2 </a>
                                </li>
                                <li>
                                    <a href="pages_privacy_policy.html"> Privacy Policy </a>
                                </li>
                                <li>
                                    <a href="pages_profile.html"> Profile </a>
                                </li>
                                <li class="active">
                                    <a href="pages_profile_edit.html"> Profile Edit </a>
                                </li>
                                <li>
                                    <a href="pages_search_result.html"> Search Result </a>
                                </li>
                                <li>
                                    <a href="pages_search_result_2.html"> Search Result 2 </a>
                                </li>
                                <li>
                                    <a href="pages_sitemap.html"> Sitemap </a>
                                </li>
                                <li>
                                    <a href="pages_timeline.html"> Timeline </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="basicUIMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Basic UI</h5>
                                <p>At vero eos et accusamus et iusto odio.</p>
                            </div>
                            <ul class="submenu-list"> 
                                <li>
                                    <a href="basic_ui_accordion.html"> Accordions  </a>
                                </li>
                                <li>
                                    <a href="basic_ui_animation.html"> Animation </a>
                                </li>
                                <li>
                                    <a href="basic_ui_cards.html"> Bootstrap Cards </a>
                                </li>
                                <li>
                                    <a href="basic_ui_carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="basic_ui_countdown.html"> Countdown </a>
                                </li>
                                <li>
                                    <a href="basic_ui_counter.html"> Counter </a>
                                </li>
                                <li>
                                    <a href="basic_ui_dragitems.html">Drag Items</a>
                                </li>
                                <li>
                                    <a href="basic_ui_lightbox.html"> Lightbox </a>
                                </li>
                                <li>
                                    <a href="basic_ui_lightbox_side_open.html"> Lightbox Side Open</a>
                                </li>
                                <li>
                                    <a href="basic_ui_list_groups.html"> List Group </a>
                                </li>
                                <li>
                                    <a href="basic_ui_media_object.html"> Media Object </a>
                                </li>
                                <li>
                                    <a href="basic_ui_modals.html"> Modals </a>
                                </li> 
                                <li>
                                    <a href="basic_ui_notifications.html"> Notifications </a>
                                </li>
                                <li>
                                    <a href="basic_ui_scrollspy.html"> Scroll Spy </a>
                                </li>
                                <li>
                                    <a href="basic_ui_session_timeout.html"> Session Timeout </a>
                                </li>
                                <li>
                                    <a href="basic_ui_sweet_alerts.html"> Sweet Alerts </a>
                                </li>
                                <li>
                                    <a href="basic_ui_tabs.html"> Tabs </a>
                                </li>
                                <li>
                                    <a href="basic_ui_tour_tutorial.html"> Tour Tutorial </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="uiElementsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">UI Elements</h5>
                                <p>Our being able to do what we like best.</p>
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a href="ui_elements_alerts.html"> Alerts </a>
                                </li>
                                <li>
                                    <a href="ui_elements_avatar.html"> Avatar </a>
                                </li>
                                <li>
                                    <a href="ui_elements_badges.html"> Badges </a>
                                </li>
                                <li>
                                    <a href="ui_elements_breadcrumbs.html"> Breadcrumbs </a>
                                </li>                            
                                <li>
                                    <a href="ui_elements_buttons.html"> Buttons </a>
                                </li>
                                <li>
                                    <a href="ui_elements_colors.html"> Colors </a>
                                </li>
                                <li> 
                                    <a href="ui_elements_dropdowns.html"> Dropdown </a>
                                </li>
                                <li>
                                    <a href="ui_elements_grid.html"> Grid </a>
                                </li>
                                <li>
                                    <a href="ui_elements_jumbotron.html"> Jumbotron </a>
                                </li>
                                <li>
                                    <a href="ui_elements_list_group.html"> List Group </a>
                                </li>
                                <li>
                                    <a href="ui_elements_loading_spinners.html"> Loading Spinners </a>
                                </li>
                                <li>
                                    <a href="ui_elements_pagination.html"> Pagination </a>
                                </li>
                                <li>
                                    <a href="ui_elements_popovers.html"> Popovers </a>
                                </li>
                                <li>
                                    <a href="ui_elements_progress_bar.html"> Progress Bar </a>
                                </li>
                                <li>
                                    <a href="ui_elements_ribbons.html"> Ribbons </a>
                                </li>
                                <li>
                                    <a href="ui_elements_tooltips.html"> Tooltips </a>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.html"> Typography </a>
                                </li>
                                <li>
                                    <a href="ui_elements_video.html"> Video </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="formsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Forms</h5>
                                <p>Et harum quidem rerum facilis et expedita.</p>
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#formControls" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                                    Controls <i class="las la-angle-right sidemenu-right-icon"></i>
                                    </a>
                                    <ul class="sub-submenu-list collapse" id="formControls"> 
                                        <li>
                                            <a href="forms_controls_base_input.html"> Base Input </a>
                                        </li>
                                        <li>
                                            <a href="forms_controls_input_groups.html"> Input Groups </a>
                                        </li>
                                        <li>
                                            <a href="forms_controls_checkbox.html"> Checkbox </a>
                                        </li>
                                        <li>
                                            <a href="forms_controls_radio.html"> Radio </a>
                                        </li>
                                        <li>
                                            <a href="forms_controls_switch.html"> Switch </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#formWidgets" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
                                    Widgets <i class="las la-angle-right sidemenu-right-icon"></i>
                                    </a>
                                    <ul class="sub-submenu-list collapse" id="formWidgets"> 
                                        <li>
                                            <a href="forms_widgets_picker.html"> Picker </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_tagify.html"> Tagify </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_touch_spin.html"> Touch Spin </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_maxlength.html"> Max Length </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_switch.html"> Switch </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_select_splitter.html"> Select Splitter</a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_bootstrap_select.html"> Bootstrap Select </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_select_2.html"> Select 2 </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_input_masks.html"> Input Masks </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_autogrow.html"> Autogrow </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_range_slider.html"> Range Slider </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_clipboard.html"> Clipboard </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_typeahead.html"> Typeahead </a>
                                        </li>
                                        <li>
                                            <a href="forms_widgets_captcha.html"> Captcha </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="forms_validation.html"> Validation </a>
                                </li>
                                <li>
                                    <a href="forms_layouts.html"> Layouts </a>
                                </li>
                                <li>
                                    <a href="forms_text_editor.html"> Text Editor </a>
                                </li>
                                <li>
                                    <a href="forms_file_upload.html"> File Upload </a>
                                </li>
                                <li>
                                    <a href="forms_multiple_step.html"> Multiple Step </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="mapsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Maps</h5>
                                <p>Excepteur sint occaecat cupidatat proident.</p>
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a href="maps_leaflet_map.html"> Leaflet Map </a>
                                </li>
                                <li>
                                    <a href="maps_vector_map.html"> Vector Map </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="chartsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Charts</h5>
                                <p>Nemo enim ipsam voluptatem quia voluptas.</p>
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a href="charts_apex_chart.html"> Apex Chart </a>
                                </li>
                                <li>
                                    <a href="charts_chartlist.html"> Chartlist Charts </a>
                                </li>  
                                <li>
                                    <a href="charts_chartjs.html"> ChartJS </a>
                                </li>
                                <li>
                                    <a href="charts_morris_chart.html"> Morris Charts </a>
                                </li>    
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="starterKitMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Starter Kit</h5>
                                <p>Adipisci velit, sed quia non numquam eius.</p>
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a href="starter_kit_blank_page.html"> Blank Page </a>
                                </li>
                                <li>
                                    <a href="starter_kit_breadcrumbs.html"> Breadcrumbs </a>
                                </li>  
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="multiLevelMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Multi Level</h5>
                                <p>Quis autem vel eum iure reprehenderit qui.</p>
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#multiLevelLevelTwo" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle"> Level 2 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                    <ul class="collapse sub-submenu-list" id="multiLevelLevelTwo"> 
                                        <li>
                                            <a href="javascript:void(0)"> Link 1 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"> Link 2 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="pages_profile_edit.html#multiLevelLevelThree" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle"> Level 3 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                    <ul class="collapse sub-submenu-list" id="multiLevelLevelThree"> 
                                        <li>
                                            <a href="javascript:void(0)"> Link 1</a>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" href="pages_profile_edit.html#multiLevelLevelThreeOne" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle"> Link 2 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                            <ul class="collapse list-unstyled sub-sub-submenu-list" id="multiLevelLevelThreeOne"> 
                                                <li>
                                                    <a href="javascript:void(0)"> Link 1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"> Link 2 </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <?php include 'sidebar.php'; ?>
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
                <div class="account-settings-container layout-top-spacing">
                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="general-info" class="section general-info">
                                        <div class="info">
                                            <div class="d-flex mt-2">
                                                <!-- <div class="profile-edit-left"> -->
                                                    <!-- <div class="tab-options-list">
                                                        <div class="nav flex-column nav-pills mb-sm-0 mb-3   text-center mx-auto" id="v-border-pills-tab" role="tablist" aria-orientation="vertical">
                                                            <a class="nav-link active" id="v-border-pills-general-tab" data-toggle="pill" href="pages_profile_edit.html#v-border-pills-general" role="tab" aria-controls="v-border-pills-general" aria-selected="true"><i class="las la-info"></i> General Information</a>
                                                            <a class="nav-link  text-center" id="v-border-pills-about-tab" data-toggle="pill" href="pages_profile_edit.html#v-border-pills-about" role="tab" aria-controls="v-border-pills-about" aria-selected="false"><i class="lar la-user"></i> About</a>
                                                            <a class="nav-link  text-center" id="v-border-pills-domain-tab" data-toggle="pill" href="pages_profile_edit.html#v-border-pills-domain" role="tab" aria-controls="v-border-pills-domain" aria-selected="false"><i class="las la-graduation-cap"></i> Domain Expertise</a>
                                                            <a class="nav-link  text-center" id="v-border-pills-contact-tab" data-toggle="pill" href="pages_profile_edit.html#v-border-pills-contact" role="tab" aria-controls="v-border-pills-contact" aria-selected="false"><i class="las la-phone"></i> Contact</a>
                                                            <a class="nav-link  text-center" id="v-border-pills-social-tab" data-toggle="pill" href="pages_profile_edit.html#v-border-pills-social" role="tab" aria-controls="v-border-pills-social" aria-selected="false"><i class="las la-hashtag"></i> Social</a>
                                                            <a class="nav-link  text-center" id="v-border-pills-education-tab" data-toggle="pill" href="pages_profile_edit.html#v-border-pills-education" role="tab" aria-controls="v-border-pills-education" aria-selected="false"><i class="las la-university"></i> Education</a>
                                                            <a class="nav-link  text-center" id="v-border-pills-work-tab" data-toggle="pill" href="pages_profile_edit.html#v-border-pills-work" role="tab" aria-controls="v-border-pills-work" aria-selected="false"><i class="las la-suitcase"></i> Work Experience</a>
                                                          </div>
                                                    </div> -->
                                                    <!-- <div class="mt-3">
                                                        <button class="btn btn-dark btn-sm">Reset All</button>
                                                        <div class="blockui-growl-message">
                                                            <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                                                        </div>
                                                        <button id="multiple-messages" class="btn btn-primary btn-sm">Save</button>
                                                    </div> -->
                                                <!-- </div> -->
                                                <div class="profile-edit-right">
                                                    <div class="tab-content" id="v-border-pills-tabContent">
                                                        <div class="tab-pane fade show active" id="v-border-pills-general" role="tabpanel" aria-labelledby="v-border-pills-general-tab">
                                                            <div class="row">
                                                            <form  class="addadmin">
                                                                <div class="col-xl-3 col-lg-12 col-md-12">
                                                                    <div class="upload text-center img-thumbnail">
                                                                        <input type="file" id="input-file-max-fs" class="dropify" data-default-file="common-common-common-common-assets/img/profile-16.jpg" data-max-file-size="2M" name="pic"/>
                                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                       
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="fullName">Full Name</label>
                                                                                        <input type="text" class="form-control mb-4" placeholder="Full Name" value="" name="name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="email">Email</label>
                                                                                    <input type="text" class="form-control mb-4" placeholder="Write your email here" value="" name="email">
                                                                                </div>
                                                                            </div> 
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="email">Username</label>
                                                                                    <input type="text" class="form-control mb-4" placeholder="Write your username here" value="" name="username">
                                                                                </div>
                                                                            </div> 

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="email">Password</label>
                                                                                    <input type="password" class="form-control mb-4" placeholder="passworde" value="" name="password">
                                                                                </div>
                                                                            </div> 
                                                                                
                                                                            </div>
                                                                            <div class="mt-3">
                                                                                            <button type="reset" class="btn btn-dark btn-sm">Reset All</button>
                                                                                        <div class="blockui-growl-message">
                                                                                            <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                                                                                        </div>
                                                                                        <input id="multiple-messages" class="btn btn-primary btn-sm" type="submit" value="Save">
                                                                            </div>
                                                                        
                                                                    </div>
                                                            </form>   </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-border-pills-about" role="tabpanel" aria-labelledby="v-border-pills-about-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="aboutBio">Bio</label>
                                                                        <textarea class="form-control" placeholder="Tell something interesting about yourself" rows="10">I interpret data and turns it into information which can offer ways to improve a business, thus affecting business decisions. I gather information from various sources and interpret patterns and trends – as such a Data Analyst job description should highlight the analytical nature of the role.
My responsibilities include:
Interpreting data, analyzing results using statistical techniques.
Developing and implementing data analyses, data collection systems.
Acquiring data from primary or secondary data sources and maintaining databases.</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-border-pills-domain" role="tabpanel" aria-labelledby="v-border-pills-domain-tab">
                                                            <div class="row">
                                                                <div class="col-md-12 text-right mb-2">
                                                                    <button class="btn btn-primary btn-sm">Add +</button>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="platform-div">
                                                                        <div class="form-group">
                                                                            <label for="platform-title">Name</label>
                                                                            <input type="text" class="form-control mb-4" placeholder="Name" value="Data Analyst">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="platform-description">Description</label>
                                                                            <textarea class="form-control mb-4" placeholder="Platforms Description" rows="10">A Data Analyst interprets data and turns it into information which can offer ways to improve a business, thus affecting business decisions. Data Analysts gather information from various sources and interpret patterns and trends – as such a Data Analyst job description should highlight the analytical nature of the role.</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-border-pills-contact" role="tabpanel" aria-labelledby="v-border-pills-contact-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="country">Country</label>
                                                                                <select class="form-control">
                                                                                    <option>All Countries</option>
                                                                                    <option selected>United States</option>
                                                                                    <option>Uruguay</option>
                                                                                    <option>Argentina</option>
                                                                                    <option>France</option>
                                                                                    <option>Italy</option>
                                                                                    <option>India</option>
                                                                                    <option>Japan</option>
                                                                                    <option>Turkey</option>
                                                                                    <option>Russia</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="address">Address</label>
                                                                                <input type="text" class="form-control mb-4" placeholder="Address" value="" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="location">Location</label>
                                                                                <input type="text" class="form-control mb-4" placeholder="Location">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="phone">Phone</label>
                                                                                <input type="text" class="form-control mb-4" placeholder="Write your phone number here" value="+1 (000) 125-45854">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="email">Email</label>
                                                                                <input type="text" class="form-control mb-4" placeholder="Write your email here" value="sara@gmail.com">
                                                                            </div>
                                                                        </div>                                    
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="website1">Website</label>
                                                                                <input type="text" class="form-control mb-4" placeholder="Write your website here" value="www.demowebsite.com">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-border-pills-social" role="tabpanel" aria-labelledby="v-border-pills-social-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-10 mb-3">
                                                                            <div class="form-group">
                                                                                <label for="country">Select Social Media</label>
                                                                                <select class="form-control">
                                                                                    <option>Github</option>
                                                                                    <option>Slack</option>
                                                                                    <option>Snapchat</option>
                                                                                    <option>Outlook</option>
                                                                                    <option>Google</option>
                                                                                    <option>Wordpress</option>
                                                                                    <option>Gitlab</option>
                                                                                </select>              
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2 pt-1 mb-3">
                                                                            <button class="btn btn-primary">Add</button>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="input-group social-linkedin mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-linkedin">
                                                                                        <i class="lab la-linkedin-in font-30 text-white"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control border-0" placeholder="linkedin Username" aria-label="Username" aria-describedby="linkedin" value="sara.williams">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="input-group social-tweet mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-info">
                                                                                        <i class="lab la-twitter font-30 text-white"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control border-0" placeholder="Twitter Username" aria-label="Username" aria-describedby="tweet" value="@swilliams">
                                                                            </div>
                                                                        </div>   
                                                                        <div class="col-md-4">
                                                                            <div class="input-group social-insta mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-danger">
                                                                                        <i class="lab la-instagram font-30 text-white"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control border-0" placeholder="Github Username" aria-label="Username" aria-describedby="github" value="@sara.williams">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="input-group social-fb mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-facebook">
                                                                                        <i class="lab la-facebook-f font-30 text-white"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control border-0" placeholder="Facebook Username" aria-label="Username" aria-describedby="fb" value="sara.williams">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="input-group social-skype mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-info">
                                                                                        <i class="lab la-skype font-30 text-white"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control border-0" placeholder="Github Username" aria-label="Username" aria-describedby="github" value="@sara_williams">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="input-group social-apple mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-dark">
                                                                                        <i class="lab la-apple font-30 text-white"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control border-0" placeholder="Github Username" aria-label="Username" aria-describedby="github" value="@sara.williams">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-border-pills-education" role="tabpanel" aria-labelledby="v-border-pills-education-tab">
                                                            <div class="col-md-12 text-right mb-2">
                                                                <button class="btn btn-primary">Add</button>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="edu-section">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="degree1">College</label>
                                                                                <input type="text" class="form-control mb-4" placeholder="Add your education here" value="NIIT">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label>Starting From</label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <select class="form-control mb-4">
                                                                                                    <option>Month</option>
                                                                                                    <option>Jan</option>
                                                                                                    <option>Feb</option>
                                                                                                    <option>Mar</option>
                                                                                                    <option>Apr</option>
                                                                                                    <option>May</option>
                                                                                                    <option>Jun</option>
                                                                                                    <option>Jul</option>
                                                                                                    <option>Aug</option>
                                                                                                    <option>Sep</option>
                                                                                                    <option selected="selected">Oct</option>
                                                                                                    <option>Nov</option>
                                                                                                    <option>Dec</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <select class="form-control mb-4">
                                                                                                    <option>Year</option>
                                                                                                    <option>2020</option>
                                                                                                    <option>2019</option>
                                                                                                    <option>2018</option>
                                                                                                    <option selected="selected">2017</option>
                                                                                                    <option>2016</option>
                                                                                                    <option>2015</option>
                                                                                                    <option>2014</option>
                                                                                                    <option>2013</option>
                                                                                                    <option>2012</option>
                                                                                                    <option>2011</option>
                                                                                                    <option>2010</option>
                                                                                                    <option>2009</option>
                                                                                                    <option>2008</option>
                                                                                                    <option>2007</option>
                                                                                                    <option>2006</option>
                                                                                                    <option>2005</option>
                                                                                                    <option>2004</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label>Ending In</label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6 mb-4">
                                                                                                <select class="form-control">
                                                                                                    <option>Month</option>
                                                                                                    <option selected="selected">Jan</option>
                                                                                                    <option>Feb</option>
                                                                                                    <option>Mar</option>
                                                                                                    <option>Apr</option>
                                                                                                    <option>May</option>
                                                                                                    <option>Jun</option>
                                                                                                    <option>Jul</option>
                                                                                                    <option>Aug</option>
                                                                                                    <option>Sep</option>
                                                                                                    <option>Oct</option>
                                                                                                    <option>Nov</option>
                                                                                                    <option>Dec</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <select class="form-control input-sm">
                                                                                                    <option>Year</option>
                                                                                                    <option selected="selected">2020</option>
                                                                                                    <option>2019</option>
                                                                                                    <option>2018</option>
                                                                                                    <option>2017</option>
                                                                                                    <option>2016</option>
                                                                                                    <option>2015</option>
                                                                                                    <option>2014</option>
                                                                                                    <option>2013</option>
                                                                                                    <option>2012</option>
                                                                                                    <option>2011</option>
                                                                                                    <option>2010</option>
                                                                                                    <option>2009</option>
                                                                                                    <option>2008</option>
                                                                                                    <option>2007</option>
                                                                                                    <option>2006</option>
                                                                                                    <option>2005</option>
                                                                                                    <option>2004</option>
                                                                                                </select>
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
                                                        <div class="tab-pane fade" id="v-border-pills-work" role="tabpanel" aria-labelledby="v-border-pills-work-tab">
                                                            <div class="row">
                                                                <div class="col-md-12 text-right mb-2">
                                                                    <button class="btn btn-primary">Add</button>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="work-section">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label for="degree2">Company Name</label>
                                                                                    <input type="text" class="form-control mb-4" placeholder="Add your work here" value="Amazon">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="degree3">Job Title</label>
                                                                                            <input type="text" class="form-control mb-4" placeholder="Job Title" value="Data Analyst">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="degree4"></label>
                                                                                            <input type="text" class="form-control mb-4" placeholder="Location" value="Geneva">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Starting From</label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <select class="form-control mb-4">
                                                                                                        <option>Month</option>
                                                                                                        <option>Jan</option>
                                                                                                        <option>Feb</option>
                                                                                                        <option>Mar</option>
                                                                                                        <option>Apr</option>
                                                                                                        <option>May</option>
                                                                                                        <option>Jun</option>
                                                                                                        <option>Jul</option>
                                                                                                        <option>Aug</option>
                                                                                                        <option>Sep</option>
                                                                                                        <option>Oct</option>
                                                                                                        <option>Nov</option>
                                                                                                        <option>Dec</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <select class="form-control mb-4">
                                                                                                        <option>Year</option>
                                                                                                        <option>2020</option>
                                                                                                        <option>2019</option>
                                                                                                        <option>2018</option>
                                                                                                        <option>2017</option>
                                                                                                        <option>2016</option>
                                                                                                        <option>2015</option>
                                                                                                        <option>2014</option>
                                                                                                        <option>2013</option>
                                                                                                        <option>2012</option>
                                                                                                        <option>2011</option>
                                                                                                        <option>2010</option>
                                                                                                        <option>2009</option>
                                                                                                        <option>2008</option>
                                                                                                        <option>2007</option>
                                                                                                        <option>2006</option>
                                                                                                        <option>2005</option>
                                                                                                        <option>2004</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Ending In</label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-6 mb-4">
                                                                                                    <select class="form-control">
                                                                                                        <option>Month</option>
                                                                                                        <option>Jan</option>
                                                                                                        <option>Feb</option>
                                                                                                        <option>Mar</option>
                                                                                                        <option>Apr</option>
                                                                                                        <option>May</option>
                                                                                                        <option>Jun</option>
                                                                                                        <option>Jul</option>
                                                                                                        <option>Aug</option>
                                                                                                        <option>Sep</option>
                                                                                                        <option>Oct</option>
                                                                                                        <option>Nov</option>
                                                                                                        <option>Dec</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <select class="form-control input-sm">
                                                                                                        <option>Year</option>
                                                                                                        <option>2020</option>
                                                                                                        <option>2019</option>
                                                                                                        <option>2018</option>
                                                                                                        <option>2017</option>
                                                                                                        <option>2016</option>
                                                                                                        <option>2015</option>
                                                                                                        <option>2014</option>
                                                                                                        <option>2013</option>
                                                                                                        <option>2012</option>
                                                                                                        <option>2011</option>
                                                                                                        <option>2010</option>
                                                                                                        <option>2009</option>
                                                                                                        <option>2008</option>
                                                                                                        <option>2007</option>
                                                                                                        <option>2006</option>
                                                                                                        <option>2005</option>
                                                                                                        <option>2004</option>
                                                                                                    </select>
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
                                            <a class="nav-link  active" data-toggle="tab" href="pages_profile_edit.html#chat-tab" role="tab" aria-selected="true">
                                                <i class="las la-sms"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="pages_profile_edit.html#status-tab" role="tab" aria-selected="false">
                                                <i class="las la-tasks"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="pages_profile_edit.html#settings-tab" role="tab" aria-selected="false">
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
    <!--  Custom Script Starts  -->
    <script src="assets/js/loader.js"></script>
    <script src="common-assets/plugins/dropify/dropify.min.js"></script>
    <script src="assets/js/pages/profile_edit.js"></script>
    <script src="common-assets/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="assets/js/basicui/sweet_alerts.js"></script>
    <!-- Page Level Plugin/Script Ends -->

     <!-- php york script -->
     <script src="processor.js"></script>
    <!-- Page Level Plugin/Script Ends -->
    <!--  Custom Script Ends  -->
</body>
</html>