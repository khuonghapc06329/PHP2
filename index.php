<?php
session_start();
require_once 'vendor/autoload.php';

use App\Core\Route as Router;
use App\Core\Database;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    h5 {
        color: red;
    }
    </style>
</head>

<body>
    <?php
    $conn = new Database;

    $conn->pdo_get_connection();

    // use App\Invoices;

    $router = new Router();

    $router
        ->get('/', [App\Home::class, 'index'])
        ->get('/login', [App\Login::class, 'login'])
        ->post('/login', [App\Login::class, 'login'])
        ->get('/upload', [App\Upload::class, 'index'])
        ->post('/upload', [App\Upload::class, 'upload'])
        ->get('/forgot_pass', [App\Forgot_pass::class, 'index'])
        ->post('/forgot_pass', [App\Forgot_pass::class, 'index'])
        ->get('/logout', [App\Login::class, 'logout']);


    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
    ?>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>