<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DEV- Back-end Developer</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="./Public/Accests/Client/img/icon_dev.png" rel="icon">
    <link href="./Public/Accests/Client/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="./Public/Accests/Client/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="./Public/Accests/Client/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="./Public/Accests/Client/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./Public/Accests/Client/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="./Public/Accests/Client/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./Public/Accests/Client/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="./Public/Accests/Client/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
    <?php
    require_once 'vendor/autoload.php';
    define("ROOT_URL", "http://localhost:8000/");

    //use App\Controllers\BaseController;
    use App\Controllers\HomeController;
    use App\Core\Route;
    use App\Models\Category;
    use App\Models\User;
    use App\Models\Database;
    // new BaseController();

    // new HomeController();

    new Route;
    // var_dump($_SESSION['user']);
    // $db = new Database();
    // $db->PdO();
    // $category = new Category();
    // var_dump($category->getAllCategory());
    // $userModel = new User();
    // var_dump($userModel->getAllUser());
    ?>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "225362187320770");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v18.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- JavaScript Libraries -->
    <script src="./Public/Accests/Client/lib/jquery/jquery.min.js"></script>
    <script src="./Public/Accests/Client/lib/jquery/jquery-migrate.min.js"></script>
    <script src="./Public/Accests/Client/lib/popper/popper.min.js"></script>
    <script src="./Public/Accests/Client/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./Public/Accests/Client/lib/easing/easing.min.js"></script>
    <script src="./Public/Accests/Client/lib/counterup/jquery.waypoints.min.js"></script>
    <script src="./Public/Accests/Client/lib/counterup/jquery.counterup.js"></script>
    <script src="./Public/Accests/Client/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./Public/Accests/Client/lib/lightbox/js/lightbox.min.js"></script>
    <script src="./Public/Accests/Client/lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="./Public/Accests/Client/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="./Public/Accests/Client/js/main.js"></script>
</body>

</html>