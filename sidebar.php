<?php

echo '<ul class="list-unstyled menu-categories" id="accordionExample">


                    <li class="menu">
                        <a href="/tms/home" id="dashboard" data-active="true" class="main-item dropdown-toggle">
                            <i class="las la-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="apps" class="main-item dropdown-toggle">
                            <i class="las la-user"></i>
                            <span>Staff</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="authPages" class="main-item dropdown-toggle">
                            <span class="new-notification"></span>
                            <i class="las la-user"></i>
                            <span>Visitors</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="otherPages" class="main-item dropdown-toggle">
                            <i class="las la-file"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="basicUI" class="main-item dropdown-toggle">
                            <i class="las la-pen"></i>
                            <span>Clients Bookings</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="uiElements" class="main-item dropdown-toggle">
                            <i class="lab la-elementor"></i>
                            <span>Session</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="forms" class="main-item dropdown-toggle">
                            <i class="lab la-wpforms"></i>
                            <span>Clients</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="maps" class="main-item dropdown-toggle">
                            <i class="las la-globe-americas"></i>
                            <span>Programs Executed</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="charts" class="main-item dropdown-toggle">
                            <i class="las la-chart-pie"></i>
                            <span>Programme Bookings</span>
                        </a>
                    </li>
                     <!--<li class="menu">
                        <a href="widgets.html" class="dropdown-toggle">
                            <i class="las la-desktop"></i>
                            <span>Clients</span>
                        </a>
                    </li>-->
                    <!--<li class="menu">
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
                    </li> -->
                </ul>
                <div class="sidebar-submenu">
                    <span class="sidebar-submenu-close" id="sidebarSubmenuClose">
                        <i class="las la-times"></i>
                    </span>
                    <div class="submenu" id="dashboardMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Dashboard</h5>
                                
                            </div>
                            <!-- <ul class="submenu-list"> 
                                <li class="active">
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
                            </ul> -->
                        </div>
                    </div>
                    <div class="submenu" id="appsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Staff</h5>
                               
                            </div>
                            <ul class="submenu-list"> 
                                <li>
                                    <a href="/tms/newstaff"> Add Staff </a>
                                </li>
                                <li>
                                    <a href="/tms/viewstaff"> View Staff </a>
                                </li>
                                <!-- <li>
                                    <a data-toggle="collapse" href="index.php#appsCompanies" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                    <a data-toggle="collapse" href="index.php#appsEcommerce" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                    <a data-toggle="collapse" href="index.php#appsEmail" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                    <a data-toggle="collapse" href="index.php#appsNotes" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                    <a data-toggle="collapse" href="index.php#appsTickets" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="authPagesMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Visitor</h5>
                                
                            </div>
                            <ul class="submenu-list" data-parent-element="#dashboard"> 
                                <li>
                                    <a href="/tms/newvisitor"> Add Visitor</a>
                                </li>
                                <li>
                                    <a href="/tms/visitors"> View Visitor</a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="otherPagesMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Costumer Info</h5>
                                
                            </div>
                            <ul class="submenu-list"> 
                                <li>
                                    <a href="/tms/newcustomer"> Add Customer Info </a>
                                </li>
                                <li>
                                    <a href="/tms/customers"> View Customer Info </a>
                                </li>
                                
                                <!-- <li>
                                    <a data-toggle="collapse" href="index.php#otherPagesError" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                <li>
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
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="basicUIMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Booking Info</h5>
                                
                            </div>
                            <ul class="submenu-list"> 
                                <li>
                                    <a href="/tms/newbooking"> Add Booking Info  </a>
                                </li>
                                <li>
                                    <a href="/tms/bookings"> View Booking Info </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="uiElementsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Session</h5>
                               
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a href="/tms/newsession"> Add Session </a>
                                </li>
                                <li>
                                    <a href="/tms/session"> View Session </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="formsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Client </h5>
                                
                            </div>
                            <ul class="submenu-list">
                                
                                
                                <li>
                                            <a href="/tms/newclient"> Add Client </a>
                                        </li>
                                        <li>
                                            <a href="/tms/clients">View Clients </a>
                                        </li>
                                <li>
                                    <a href="/tms/newintake"> Client Intake form </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div> 
                    <div class="submenu" id="mapsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Events Executed</h5>
                               
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a href="/tms/executedevents"> Add Event Executed </a>
                                </li>
                                <li>
                                    <a href="/tms/eventx"> View Event Executed </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="chartsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Events Booking</h5>
                               
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a href="/tms/eventbookings"> Add Events Booking </a>
                                </li>
                                <li>
                                    <a href="/tms/eventb"> View Events Booking </a>
                                </li>  
                                <!-- <li>
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
                               
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a href="starter_kit_blank_page.html"> Blank Page </a>
                                </li>
                                <li>
                                    <a href="starter_kit_breadcrumbs.html"> Breadcrumbs </a>
                                </li>   -->
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="submenu" id="multiLevelMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Multi Level</h5>
                                <p>Quis autem vel eum iure reprehenderit qui.</p>
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a data-toggle="collapse" href="index.php#multiLevelLevelTwo" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle"> Level 2 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
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
                                    <a data-toggle="collapse" href="index.php#multiLevelLevelThree" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle"> Level 3 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                    <ul class="collapse sub-submenu-list" id="multiLevelLevelThree"> 
                                        <li>
                                            <a href="javascript:void(0)"> Link 1</a>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" href="index.php#multiLevelLevelThreeOne" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle"> Link 2 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
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
                    </div> -->
                    <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu active">
                        <a href="javascript:void(0);" id="dashboard" data-active="true" class="main-item dropdown-toggle">
                            <i class="las la-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="apps" class="main-item dropdown-toggle">
                            <i class="lab la-medapps"></i>
                            <span>Staff</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="authPages" class="main-item dropdown-toggle">
                            <span class="new-notification"></span>
                            <i class="las la-lock"></i>
                            <span>Visitor</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="otherPages" class="main-item dropdown-toggle">
                            <i class="las la-file"></i>
                            <span>Customer info</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="basicUI" class="main-item dropdown-toggle">
                            <i class="las la-drafting-compass"></i>
                            <span>Booking Info</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="uiElements" class="main-item dropdown-toggle">
                            <i class="lab la-elementor"></i>
                            <span>Session</span>
                        </a>
                    </li>
                    <!-- <li class="menu">
                        <a href="javascript:void(0);" id="forms" class="main-item dropdown-toggle">
                            <i class="lab la-wpforms"></i>
                            <span>Forms</span>
                        </a>
                    </li> -->
                    <li class="menu">
                        <a href="javascript:void(0);" id="maps" class="main-item dropdown-toggle">
                            <i class="las la-globe-americas"></i>
                            <span>Events Executed</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0);" id="charts" class="main-item dropdown-toggle">
                            <i class="las la-chart-pie"></i>
                            <span>Event Booking</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="widgets.html" class="dropdown-toggle">
                            <i class="las la-desktop"></i>
                            <span>Widgets</span>
                        </a>
                    </li>
                   <!-- <li class="menu">
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
                    </li> -->
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
                            <!-- <ul class="submenu-list"> 
                                <li class="active">
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
                            </ul> -->
                        </div>
                    </div>
                    <div class="submenu" id="appsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Staff</h5>
                                <p>Sed ut perspiciatis unde omnis iste.</p>
                            </div>
                            <ul class="submenu-list"> 
                                <li>
                                    <a href="add_staff.php"> Add Staff </a>
                                </li>
                                <li>
                                    <a href="staff_table.php"> View Staff </a>
                                </li>
                                <!-- <li>
                                    <a data-toggle="collapse" href="index.php#appsCompanies" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                    <a data-toggle="collapse" href="index.php#appsEcommerce" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                    <a data-toggle="collapse" href="index.php#appsEmail" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                    <a data-toggle="collapse" href="index.php#appsNotes" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                    <a data-toggle="collapse" href="index.php#appsTickets" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="authPagesMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Visitor</h5>
                                <p>Quis autem vel eum iure reprehenderit.</p>
                            </div>
                            <ul class="submenu-list" data-parent-element="#dashboard"> 
                                <li>
                                    <a href="add_visitor.php"> Add Visitor</a>
                                </li>
                                <li>
                                    <a href="visitor_table.php"> View Visitor</a>
                                </li>
                                <!-- <li>
                                    <a href="forms_text_editor.html"> Text Editor </a>
                                </li>
                                <li>
                                    <a href="forms_file_upload.html"> File Upload </a>
                                </li>
                                <li>
                                    <a href="forms_multiple_step.html"> Multiple Step </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="otherPagesMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Costumer Info>
                               
                            </div>
                            <ul class="submenu-list"> 
                                <li>
                                    <a href="add_customer_info.php"> Add Customer Info </a>
                                </li>
                                <li>
                                    <a href="customer_info_table.php"> View Customer Info </a>
                                </li>
                                <!-- <li>
                                    <a href="pages_contact_us.html"> Contact Form </a>
                                </li>
                                <li>
                                    <a href="pages_contact_us_2.html"> Contact Form 2 </a>
                                </li> -->
                                <!-- <li>
                                    <a data-toggle="collapse" href="index.php#otherPagesError" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                <li>
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
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="basicUIMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Client Booking</h5>
                               
                            </div>
                            <ul class="submenu-list"> 
                                <li>
                                    <a href="add_booking_info.php"> Add Booking Info  </a>
                                </li>
                                <li>
                                    <a href="booking_info_table.php"> View Booking Info </a>
                                </li>
                                <!-- <li>
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
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="uiElementsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Session</h5>
                               
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a href="add_session.php"> Add Session </a>
                                </li>
                                <li>
                                    <a href="session_table.php"> View Session </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="submenu" id="formsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Forms</h5>
                                <p>Et harum quidem rerum facilis et expedita.</p>
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a data-toggle="collapse" href="index.php#formControls" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                                    <a data-toggle="collapse" href="index.php#formWidgets" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle">
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
                    </div> -->
                    <div class="submenu" id="mapsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Events Executed</h5>
                               
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a href="add_events_executed.php"> Add Event Executed </a>
                                </li>
                                <li>
                                    <a href="events_executed.php"> View Event Executed </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="submenu" id="chartsMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Events Booking</h5>
                               
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a href="add_events_bookings.php"> Add Events Booking </a>
                                </li>
                                <li>
                                    <a href="events_booking_table.php"> View Events Booking </a>
                                </li>  
                                <!-- <li>
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
                                </li>   -->
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="submenu" id="multiLevelMenu">
                        <div class="submenu-info">
                            <div class="submenu-inner-info">
                                <h5 class="mb-3">Multi Level</h5>
                                <p>Quis autem vel eum iure reprehenderit qui.</p>
                            </div>
                            <ul class="submenu-list">
                                <li>
                                    <a data-toggle="collapse" href="index.php#multiLevelLevelTwo" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle"> Level 2 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
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
                                    <a data-toggle="collapse" href="index.php#multiLevelLevelThree" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle"> Level 3 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                    <ul class="collapse sub-submenu-list" id="multiLevelLevelThree"> 
                                        <li>
                                            <a href="javascript:void(0)"> Link 1</a>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" href="index.php#multiLevelLevelThreeOne" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle"> Link 2 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
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
                    </div> -->';
