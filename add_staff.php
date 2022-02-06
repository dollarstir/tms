
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
    <title>TUCEE | TUCEE - Add Staff </title>
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
    <link href="assets/css/forms/multiple-step.css" rel="stylesheet" type="text/css">
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Staff</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><span>Add Staff</span></li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area  -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing">
                <div class="layout-top-spacing mb-2">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="container p-0">
                                <div class="row layout-top-spacing">
                                    <div class="col-lg-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-header">
                                                <div class="row">
                                                    
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Add Staff</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="card multiple-form-one px-0 pb-0 mb-3">
                                                            <h5 class="text-center"><strong>Sign Up Your User Account</strong></h5>
                                                            <p class="text-center">Fill all form field to go to next step</p>
                                                            <div class="row">
                                                                <div class="col-md-12 mx-0">
                                                                    <form id="msform" class="addstaff">
                                                                        <ul id="progressbar">
                                                                            <li class="active" id="account"><strong>Personal & Educational</strong></li>
                                                                            <li id="personal"><strong>Emergency & Next of Kin</strong></li>
                                                                            <li id="payment"><strong>Bank Detials</strong></li>
                                                                            <!-- <li id="confirm"><strong>Finish</strong></li> -->
                                                                        </ul> 
                                                                        <fieldset>
                                                                            <div class="form-card">
                                                                                <h5 class="fs-title mb-4">Personal Information</h5>
                                                                                <input type="text" name="fname" placeholder="First Name"  class="form-control mb-3" /> 
                                                                                <input type="text" name="lname" placeholder="Last Name"  class="form-control mb-3" /> 
                                                                                <input type="email" name="email" placeholder="Email"  class="form-control mb-3" /> 

                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i class="las la-phone-volume font-17"></i></span>
                                                                                    </div>
                                                                                    <input type="text" name="contact" placeholder="Contact No."  class="form-control" /> 
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i class="las la-phone font-17"></i></span>
                                                                                    </div>
                                                                                    <input type="number" name="contact2" placeholder="Alternate Contact No." class="form-control" />
                                                                                </div>
                                                                                <input type="number" name="ssnt" placeholder="SSNT"  class="form-control mb-3" />
                                                                                <div class="form-group row">
                                                                                    <label class="col-3">Date Of Birth</label>
                                                                                    <div class="col-9">
                                                                                        <input class="form-control form-control-solid" type="date" placeholder="" name="dob">
                                                                                    </div>
                                                                                </div>
                                                                                <!-- <input type="date" name="dob" placeholder="Date of Birth"  class="form-control mb-3" />   -->
                                                                                <div class="row">
                                                                                    <div class="col-md-2 align-center d-flex"> 
                                                                                        <label class="pay mb-0">Gender</label> 
                                                                                    </div>
                                                                                    <div class="col-md-10"> 
                                                                                        <select class="list-dt" id="month" name="gender">
                                                                                        <option value="">Select Gender</option>
                                                                                            <option value="Male">Male</option>
                                                                                            <option value="Female">Female</option>
                                                                                            
                                                                                        </select> 
                                                                                        <!-- <select class="list-dt" id="year" name="expyear">
                                                                                            <option selected>Year</option>
                                                                                        </select>  -->
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-md-2 align-center d-flex"> 
                                                                                        <label class="pay mb-0">Marital status</label> 
                                                                                    </div>
                                                                                    <div class="col-md-10"> 
                                                                                        <select class="list-dt" id="" name="mstatus">
                                                                                        <option value="">Marital Status</option>
                                                                                            <option value="Single">Single</option>
                                                                                            <option value="Married">Married</option>
                                                                                            <option value="Divorced">Divorced</option>
                                                                                            
                                                                                        </select> 
                                                                                        <!-- <select class="list-dt" id="year" name="expyear">
                                                                                            <option selected>Year</option>
                                                                                        </select>  -->
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                               
                                                                                <div class="row">
                                                                                    <div class="col-md-2 align-center d-flex"> 
                                                                                        <label class="pay mb-0">Religion</label> 
                                                                                    </div>
                                                                                    <div class="col-md-10"> 
                                                                                        <select class="list-dt" id="" name="religion">
                                                                                        <option value="">Select Religion</option>
                                                                                            <option value="Christianity">Christianity</option>
                                                                                            <option value="Atheism/Agnosticism.">Atheism/Agnosticism.</option>
                                                                                            <option value="Buddhism">Buddhism</option>
                                                                                            <option value="Hinduism">Hinduism</option>
                                                                                            <option value="Islam">Islam</option>
                                                                                            
                                                                                        </select> 
                                                                                        <!-- <select class="list-dt" id="year" name="expyear">
                                                                                            <option selected>Year</option>
                                                                                        </select>  -->
                                                                                    </div>
                                                                                </div>
                                                                                <br>

                                                                                <div class="form-group row">
                                                                                    <!-- <input type="text" name="mstatus" placeholder="Marital Status"  class="form-control mb-3" /> -->
                                                                                    <label class="col-3">Residential Address</label>
                                                                                    <div class="col-9">
                                                                                        <input class="form-control form-control-solid" type="text" placeholder="P.O. Box 283 8562 Fusce Rd." name="address">
                                                                                    </div>
                                                                                </div>
                                                                                <input type="text" name="disorder" placeholder="Any Disability"  class="form-control mb-3" />
                                                                                <h5 class="fs-title mb-4">Educational Information</h5>
                                                                                <input type="text" name="hedu" placeholder="Highest Education"  class="form-control mb-3" /> 
                                                                                <input type="text" name="hinstitute" placeholder="Institutioin"  class="form-control mb-3" /> 
                                                                                <input type="text" name="program" placeholder="Program Studied"  class="form-control mb-3" /> 
                                                                                <div class="row">
                                                                                    <div class="col-7">
                                                                                        <h5 class="fs-title mb-4">Image Upload:</h2>
                                                                                    </div>
                                                                                    <!-- <div class="col-5">
                                                                                        <h2 class="steps">Step 3 - 4</h2>
                                                                                    </div> -->
                                                                                </div> 
                                                                                <div class="attached-files">
                                                                                    <img id="image-preview" width="320">
                                                                                </div>
                                                                                <label for="file-upload" class="custom-file-upload mb-0">
                                                                                    <a title="Attach a file" class="mr-2 pointer text-primary">
                                                                                        <i class="las la-paperclip font-20"></i>
                                                                                        <span class="font-17">Click here to attach an image</span>
                                                                                    </a>
                                                                                </label>
                                                                                <input id="file-upload" name='pic' type="file" accept="image/*" style="display:none;" onchange="handleFileChange()">
                                                                                <br><br><br>


                                                                                <div class="row">
                                                                                    <div class="col-7">
                                                                                        <h5 class="fs-title mb-4">Documents Upload:</h2>
                                                                                    </div>
                                                                                    <!-- <div class="col-5">
                                                                                        <h2 class="steps">Step 3 - 4</h2>
                                                                                    </div> -->
                                                                                </div> 
                                                                                <!-- <div class="attached-files">
                                                                                    <img id="image-preview" width="320">
                                                                                </div> -->
                                                                                <!-- <label for="fp" class="custom-file-upload mb-0">
                                                                                    <a title="Attach a file" class="mr-2 pointer text-primary">
                                                                                        <i class="las la-paperclip font-20"></i>
                                                                                        <span class="font-17">Click here to attach file</span>
                                                                                    </a>
                                                                                </label> -->
                                                                                <input id="fp" name='doc' type="file" style="">
                                                                                <br><br><br>
                                                                                <!-- <input type="file" name="eamil" placeholder="Upload Documents"  class="form-control mb-3" /> -->
                                                                                <h5 class="fs-title mb-4">Organization structure information</h5>
                                                                                <div class="row">
                                                                                    <div class="col-md-2 align-center d-flex"> 
                                                                                        <label class="pay mb-0">Department*</label> 
                                                                                    </div>
                                                                                    <div class="col-md-10"> 
                                                                                        <select class="list-dt" id=""  name="department">
                                                                                            <option selected>Tech</option>
                                                                                            <option>HR</option>
                                                                                            
                                                                                        </select> 
                                                                                        <!-- <select class="list-dt" id="year" name="expyear">
                                                                                            <option selected>Year</option>
                                                                                        </select>  -->
                                                                                    </div>
                                                                                </div> 
                                                                                <br>
                                                                                <input type="text" name="jobtitle" placeholder="Job Title"  class="form-control mb-3" />
                                                                                <div class="form-group row">
                                                                                    <label class="col-3">Date Started</label>
                                                                                    <div class="col-9">
                                                                                        <input class="form-control form-control-solid" type="date" placeholder="" name="datestarted">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-3">Confirmation Date</label>
                                                                                    <div class="col-9">
                                                                                        <input class="form-control form-control-solid" type="date" placeholder="" name="cfirmdate">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-3">Exit Date</label>
                                                                                    <div class="col-9">
                                                                                        <input class="form-control form-control-solid" type="date" placeholder="" name="exitdate">
                                                                                    </div>
                                                                                </div> 
                                                                                <!-- <input type="date" name="date" placeholder="Date started"  class="form-control mb-3" /> 
                                                                                <input type="date" name="date" placeholder="Confirmation Date"  class="form-control mb-3" />
                                                                                <input type="date" name="date" placeholder="Exit Date"  class="form-control mb-3" /> -->
                                                                                <div class="row">
                                                                                    <div class="col-md-2 align-center d-flex"> 
                                                                                        <label class="pay mb-0">Salary Level</label> 
                                                                                    </div>
                                                                                    <div class="col-md-10"> 
                                                                                        <select class="list-dt" id="" name="slevel">
                                                                                            <option >choose salary Level </option>
                                                                                            <option value="7">Level 7</option>
                                                                                            <option value="8">Level 8</option>
                                                                                            <option value="9">Level 9</option>
                                                                                            <option value="10">Level 10</option>
                                                                                            <option value="11">Level 11</option>
                                                                                            
                                                                                        </select> 
                                                                                        <!-- <select class="list-dt" id="year" name="expyear">
                                                                                            <option selected>Year</option>
                                                                                        </select>  -->
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <input type="number" name="samount" placeholder="Salary Amount"  class="form-control mb-3" />
                                                                                <!-- <input type="number" name="idNumber" placeholder="ID Number"  class="form-control mb-3" />
                                                                                <input type="number" name="idNumber" placeholder="ID Number"  class="form-control mb-3" />
                                                                                <input type="number" name="idNumber" placeholder="ID Number"  class="form-control mb-3" /> -->
                                                                            </div> 
                                                                            <input type="button" name="previous" class="previous action-button-previous btn btn-outline-primary" value="Previous" /> 
                                                                            <input type="button" name="next" class="next action-button btn btn-primary" value="Next Step" />
                                                                        </fieldset>
                                                                        <fieldset>
                                                                            <div class="form-card">
                                                                                <h5 class="fs-title mb-4">Emergency Contact</h5>
                                                                                <input type="text" name="efname" placeholder="First Name"  class="form-control mb-3" /> 
                                                                                <input type="text" name="elname" placeholder="Last Name"  class="form-control mb-3" /> 
                                                                                <input type="text" name="erelation" placeholder="Relation"  class="form-control mb-3" /> 
                                                                                <div class="form-group row">
                                                                                    <label class="col-3">Residential Address</label>
                                                                                    <div class="col-9">
                                                                                        <input class="form-control form-control-solid" type="text" placeholder="eg : Oyarifa school junction" name="eaddress">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i class="las la-phone-volume font-17"></i></span>
                                                                                    </div>
                                                                                    <input type="number" name="econt1" placeholder="Contact No."  class="form-control" /> 
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i class="las la-phone font-17"></i></span>
                                                                                    </div>
                                                                                    <input type="number" name="econt2" placeholder="Alternate Contact No." class="form-control" />
                                                                                </div>
                                                                                <br><br>
                                                                                <h5 class="fs-title mb-4">Next of Kin</h5>
                                                                                <input type="text" name="nokfname" placeholder="First Name"  class="form-control mb-3" /> 
                                                                                <input type="text" name="noklname" placeholder="Last Name"  class="form-control mb-3" /> 
                                                                                <input type="text" name="nokrelation" placeholder="Relation"  class="form-control mb-3" /> 
                                                                                <div class="form-group row">
                                                                                    <label class="col-3">Residential Address</label>
                                                                                    <div class="col-9">
                                                                                        <input class="form-control form-control-solid" type="text" placeholder="P.O. Box 283 8562 Fusce Rd." name="nokaddress">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i class="las la-phone-volume font-17"></i></span>
                                                                                    </div>
                                                                                    <input type="number" name="nokcont1" placeholder="Contact No."  class="form-control" /> 
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i class="las la-phone font-17"></i></span>
                                                                                    </div>
                                                                                    <input type="number" name="nokcont2" placeholder="Alternate Contact No." class="form-control" />
                                                                                </div>
                                                                                
                                                                            </div> 
                                                                            <input type="button" name="previous" class="previous action-button-previous btn btn-outline-primary" value="Previous" /> 
                                                                            <input type="button" name="next" class="next action-button btn btn-primary" value="Next Step" />
                                                                        </fieldset>
                                                                        <fieldset>
                                                                            <div class="form-card">
                                                                                <h5 class="fs-title mb-4">Bank Details</h5>
                                                                                <!-- <div class="radio-group">
                                                                                    <div class='radio' data-value="credit">
                                                                                        <img src="common-assets/img/form-card-img.png">
                                                                                    </div>
                                                                                    <div class='radio' data-value="paypal">
                                                                                        <img src="common-assets/img/form-pg-img.png">
                                                                                    </div> 
                                                                                    <br>
                                                                                </div> 
                                                                                <label class="pay">Card Holder Name</label> 
                                                                                <input type="text" name="holdername" placeholder="" class="form-control mb-3"/> -->
                                                                                <label class="pay">Bank Name</label> 
                                                                                <input type="text" name="bankname" placeholder="" class="form-control mb-3"/>
                                                                                <label class="pay">Branch</label> 
                                                                                <input type="text" name="branch" placeholder="" class="form-control mb-3"/>
                                                                                <label class="pay">Account Name</label> 
                                                                                <input type="text" name="accname" placeholder="" class="form-control mb-3"/>
                                                                                <label class="pay">Account Number</label> 
                                                                                <input type="text" name="accnumber" placeholder="" class="form-control mb-3"/>
                                                                                <!-- <div class="row">
                                                                                    <div class="col-md-9"> 
                                                                                        <label class="pay">Card Number</label> 
                                                                                        <input type="text" name="cardno" placeholder="" class="form-control mb-3"/> 
                                                                                    </div>
                                                                                    <div class="col-md-3"> 
                                                                                        <label class="pay">CVC*</label> 
                                                                                        <input type="password" name="cvcpwd" placeholder="***" class="form-control mb-3"/> 
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-2 align-center d-flex"> 
                                                                                        <label class="pay mb-0">Expiry Date*</label> 
                                                                                    </div>
                                                                                    <div class="col-md-10"> 
                                                                                        <select class="list-dt" id="month" name="expmonth">
                                                                                            <option selected>Month</option>
                                                                                            <option>January</option>
                                                                                            <option>February</option>
                                                                                            <option>March</option>
                                                                                            <option>April</option>
                                                                                            <option>May</option>
                                                                                            <option>June</option>
                                                                                            <option>July</option>
                                                                                            <option>August</option>
                                                                                            <option>September</option>
                                                                                            <option>October</option>
                                                                                            <option>November</option>
                                                                                            <option>December</option>
                                                                                        </select> 
                                                                                        <select class="list-dt" id="year" name="expyear">
                                                                                            <option selected>Year</option>
                                                                                        </select> 
                                                                                    </div>
                                                                                </div> -->
                                                                            </div> 
                                                                            <input type="button" name="previous" class="previous action-button-previous btn btn-outline-primary" value="Previous" /> 
                                                                            <input type="submit" name="make_payment" class="btn btn-primary" value="Submit" />
                                                                        </fieldset>
                                                                        <!-- <fieldset>
                                                                            <div class="form-card">
                                                                                <h5 class="fs-title mb-4 text-center">Congrats !</h5><br>
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-md-3"> 
                                                                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>
                                                                                    </div>
                                                                                </div> <br><br>
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-md-7 text-center">
                                                                                        <p>You Have Successfully Added Staff</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset> -->
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- <div class="col-lg-12 layout-spacing">
                                        <div class="statbox widget box box-shadow mb-4">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Step Type 2</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="card multiple-form-two px-0 pb-0 mb-3">
                                                            <h5 class="text-center"><strong>Sign Up Your User Account</strong></h5>
                                                            <p class="text-center">Fill all form field to go to next step</p>
                                                            <form id="msform">
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div> <br> 
                                                                <fieldset>
                                                                    <div class="form-card">
                                                                        <div class="row">
                                                                            <div class="col-7">
                                                                                <h5 class="fs-title mb-4">Account Information:</h2>
                                                                            </div>
                                                                            <div class="col-5">
                                                                                <h2 class="steps">Step 1 - 4</h2>
                                                                            </div>
                                                                        </div> 
                                                                        <label class="fieldlabels">Email</label> 
                                                                        <input type="email" name="email" placeholder="" class="form-control mb-3"/> 
                                                                        <label class="fieldlabels">Username</label> 
                                                                        <input type="text" name="uname" placeholder="Username can't include your name" class="form-control mb-3"/> 
                                                                        <label class="fieldlabels">Password</label> 
                                                                        <input type="password" name="pwd" placeholder="Password must have atleast 8 characters" class="form-control mb-3"/> 
                                                                        <label class="fieldlabels">Confirm Password</label> 
                                                                        <input type="password" name="cpwd" placeholder="" class="form-control mb-3"/>
                                                                    </div> 
                                                                    <input type="button" name="next" class="next action-button btn btn-primary" value="Next" />
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="form-card">
                                                                        <div class="row">
                                                                            <div class="col-7">
                                                                                <h5 class="fs-title mb-4">Personal Information:</h2>
                                                                            </div>
                                                                            <div class="col-5">
                                                                                <h2 class="steps">Step 2 - 4</h2>
                                                                            </div>
                                                                        </div> 
                                                                        <label class="fieldlabels">First Name</label> 
                                                                        <input type="text" name="fname" placeholder="" class="form-control mb-3"/> 
                                                                        <label class="fieldlabels">Last Name</label> 
                                                                        <input type="text" name="lname" placeholder="" class="form-control mb-3"/> 
                                                                        <label class="fieldlabels">Contact No</label> 
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="las la-phone-volume font-17"></i></span>
                                                                            </div>
                                                                            <input type="text" name="phno" placeholder=""  class="form-control" /> 
                                                                        </div>
                                                                        <label class="fieldlabels">Alternate Contact No</label> 
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="las la-phone font-17"></i></span>
                                                                            </div>
                                                                            <input type="text" name="phno_2" placeholder="" class="form-control" />
                                                                        </div>
                                                                    </div> 
                                                                    <input type="button" name="previous" class="previous action-button-previous btn btn-outline-primary" value="Previous" />
                                                                    <input type="button" name="next" class="next action-button btn btn-primary" value="Next" />
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="form-card">
                                                                        <div class="row">
                                                                            <div class="col-7">
                                                                                <h5 class="fs-title mb-4">Image Upload:</h2>
                                                                            </div>
                                                                            <div class="col-5">
                                                                                <h2 class="steps">Step 3 - 4</h2>
                                                                            </div>
                                                                        </div> 
                                                                        <div class="attached-files">
                                                                            <img id="image-preview" width="320">
                                                                        </div>
                                                                        <label for="file-upload" class="custom-file-upload mb-0">
                                                                            <a title="Attach a file" class="mr-2 pointer text-primary">
                                                                                <i class="las la-paperclip font-20"></i>
                                                                                <span class="font-17">Click here to attach an image</span>
                                                                            </a>
                                                                        </label>
                                                                        <input id="file-upload" name='upload_cont_img' type="file" accept="image/*" style="display:none;" onchange="handleFileChange()">
                                                                    </div> 
                                                                    <input type="button" name="previous" class="previous action-button-previous btn btn-outline-primary" value="Previous" />
                                                                    <input type="button" name="next" class="next action-button btn btn-primary" value="Next" />
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="form-card">
                                                                        <div class="row">
                                                                            <div class="col-7">
                                                                                <h5 class="fs-title mb-4">Finish:</h2>
                                                                            </div>
                                                                            <div class="col-5">
                                                                                <h2 class="steps">Step 4 - 4</h2>
                                                                            </div>
                                                                        </div> <br><br>
                                                                        <h5 class="fs-title mb-4 text-center">Congrats !</h5><br>
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-3"> 
                                                                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>
                                                                            </div>
                                                                        </div> <br><br>
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-7 text-center">
                                                                                <p>You Have Successfully Signed Up</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
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
                                            <a class="nav-link  active" data-toggle="tab" href="forms_multiple_step.html#chat-tab" role="tab" aria-selected="true">
                                                <i class="las la-sms"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="forms_multiple_step.html#status-tab" role="tab" aria-selected="false">
                                                <i class="las la-tasks"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="forms_multiple_step.html#settings-tab" role="tab" aria-selected="false">
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
    <script src="assets/js/forms/multiple-step.js"></script>
    <script src="common-assets/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="assets/js/basicui/sweet_alerts.js"></script>
    <!-- Page Level Plugin/Script Ends -->

     <!-- php york script -->
     <script src="processor.js"></script>
    <!-- Page Level Plugin/Script Ends 
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>