<?php
require 'vendor/autoload.php';

use App\Core\Form;
use App\Models\User;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Public/Assest/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1>Bài tập Lab <i class="fa-solid fa-arrow-down"></i></h1>
    <div class="container">
        <h1>Tạo tài khoản</h1>
        <?php
        // Kiểm tra xem form đã được submit chưa
        echo 'Dữ liệu nhập hiện ra:';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $formData = $_POST;

            // Hiển thị dữ liệu
            echo '<pre>';
            print_r($formData);
            echo '</pre>';
        }

        // Bắt đầu form
        $form = Form::begin('', 'post');
        ?>
        <div class="row">
            <div class="col">
                <?php echo $form->field('firstname'); ?>
            </div>
            <div class="col">
                <?php echo $form->field('lastname'); ?>
            </div>
        </div>
        <?php echo $form->field('email'); ?>
        <?php echo $form->field('password')->passwordField(); ?>
        <?php echo $form->field('confirmPassword')->passwordField(); ?>
        <button class="btn btn-danger">Submit</button>
        <?php echo Form::end(); ?>
    </div>
    <h1>Bài tập thêm <i class="fa-solid fa-arrow-down"></i></h1>
    <?php
    $user = new User('user');
    $user->getOne(1, 1);
    ?>
</body>

</html>