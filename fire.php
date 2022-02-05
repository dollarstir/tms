<?php

require_once 'router.php';

route('tms/', function () {
    return 'hello worls';
});

route('tms/home', function () {
    require __DIR__.'/indexb.php';
});

route('tms/viewcustomers', function () {
    require __DIR__.'/customer_info_table.php';
});

route('tms/companies/{name}/class/{clss}',function($name,$class){

    return view('/cct.php',[$name,$class]);
});

$action = $_SERVER['REQUEST_URI'].'';
dispatch($action);
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
