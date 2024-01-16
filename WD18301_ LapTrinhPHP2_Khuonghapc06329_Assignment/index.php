<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DEV</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="./public/accests/client/img/logo-3.png" rel="icon">
    <link href="./public/accests/client/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="./public/accests/client/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="./public/accests/client/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="./public/accests/client/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./public/accests/client/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="./public/accests/client/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./public/accests/client/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="./public/accests/client/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
    <?php
    //All file include in include folder
        
    //Page link file php
    $action = "home";
    if (isset($_GET['act']))
        $action = $_GET['act'];


    switch ($action) {
        case "home":
            include './apps/views/client/home.php';
            break;
        case "login":
            include './apps/views/client/login.php';
            break;
        case "register":
            include './apps/views/client/register.php';
            break;
        case "blog-single":
            include './apps/views/client/blog-single.php';
            break;
        case "info-user":
            include './apps/views/client/info-user.php';
            break;
        case "change-password":
            include './apps/views/client/change-password.php';
            break;
        case "forgot-password":
            include './apps/views/client/forgot-password.php';
            break;
        case "logout":
            unset($_SESSION['user_id']);
            unset($_SESSION['access_token']);
            header("location: index.php");
            break;
    }
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
    <script src="./public/accests/client/lib/jquery/jquery.min.js"></script>
    <script src="./public/accests/client/lib/jquery/jquery-migrate.min.js"></script>
    <script src="./public/accests/client/lib/popper/popper.min.js"></script>
    <script src="./public/accests/client/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./public/accests/client/lib/easing/easing.min.js"></script>
    <script src="./public/accests/client/lib/counterup/jquery.waypoints.min.js"></script>
    <script src="./public/accests/client/lib/counterup/jquery.counterup.js"></script>
    <script src="./public/accests/client/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./public/accests/client/lib/lightbox/js/lightbox.min.js"></script>
    <script src="./public/accests/client/lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="./public/accests/client/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="./public/accests/client/js/main.js"></script>
</body>

</html>