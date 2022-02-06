<?php

require_once 'core/router.php';
require_once 'loader/viewer.php';
$router = new Router();

$router->route('tms/', function () {
    return view('/indexb.php');
});

$router->route('tms/home', function () {
    return view('/indexb.php');
});

$router->route('tms/customers', function () {
    return view('/customer_info_table.php');
});

$router->route('tms/visitors', function () {
    return view('/visitor_table.php');
});


$router->route('tms/viewstaff', function () {
    return view('/staff_table.php');
});

$router->route('tms/bookings', function () {
    return view('/booking_info_table.php');
});


$router->route('tms/eventx', function () {
    return view('/events_executed.php');
});

$router->route('tms/eventb', function () {
    return view('/events_booking_table.php');
});

$router->route('tms/session', function () {
    return view('/session_table.php');
});

$router->route('tms/newstaff', function () {
    return view('/add_staff.php');
});

$router->route('tms/newvisitor', function () {
    return view('/add_visitor.php');
});

$router->route('tms/newcustomer', function () {
    return view('/add_customer_info.php');
});


$router->route('tms/newbooking', function () {
    return view('/add_booking_info.php');
});

$router->route('tms/newsession', function () {
    return view('/add_session.php');
});

$router->route('tms/executedevents', function () {
    return view('/add_events_executed.php');
});


$router->route('tms/eventbookings', function () {
    return view('/add_events_bookings.php');
});


$router->route('tms/editprofile', function () {
    return view('/pages_profile_edit.php');
});

$router->route('tms/logout', function () {
    return view('/logout.php');
});

$router->route('tms/newadmin', function () {
    return view('/add_supper.php');
});

$router->route('tms/login', function () {
    return view('/auth_login.php');
});




$router->route('tms/companies/{name}/class/{clss}',function($name,$class){
    
    return  view('/cct.php',[$name,$class]);
});
$router->route('tms/send',function(){
    return view('usd.php');

});

$router->launch($router->action());
// function mylink($url)
// {
//     $request = $url;
//     // echo $request;
//     switch ($request) {
//         case '/':
//             require __DIR__.'/t1.php';
//             break;
//             case '':
//                 require __DIR__.'/indexb.php';
//                 break;
//                 case 'home':
//                     require __DIR__.'/indexb.php';
//                     break;
//                     default:
//                     http_response_code(404);
//                     require __DIR__.'/404.php';
//                     break;
//                 }
// }
