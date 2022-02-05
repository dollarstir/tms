<?php

require_once 'loader/autoloader.php';
require_once 'loader/viewer.php';
$router = new Router();

$router->route('tms/', function () {
    return 'hello worls';
});

$router->route('tms/home', function () {
    return view('/indexb.php');
});

$router->route('tms/viewcustomers', function () {
    return view('/customer_info_table.php');
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
