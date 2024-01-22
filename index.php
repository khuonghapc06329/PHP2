<?php

require_once 'vendor/autoload.php';

use App\Core\Route as Router;
use App\Home;
use App\Invoices;

$route = new Router();
// $route->register(
//     '/',
//     function () {
//         echo "Home";
//     }
// );

$route
    ->register('/', [App\Home::class, 'index'])
    ->register('/invoices', [App\Invoices::class, 'index'])
    ->register('/invoices/create', [App\Invoices::class, 'create']);


echo $route->resolve($_SERVER['REQUEST_URI']);
