<?php
// require './Core/database.php'; //Bai2

require 'vendor/autoload.php'; //Bai4

// spl_autoload_register(function($class){
//     var_dump($class);
//     include $class.'.php';
// }); //Bai3

use Core\database as DB;

$database = new DB();
echo '<br>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Home Page
</body>

</html>