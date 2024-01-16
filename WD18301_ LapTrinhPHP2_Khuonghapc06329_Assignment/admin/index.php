<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Quản trị</title>
    <link href="../public/accests/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../public/accests/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../public/accests/admin/css/ruang-admin.min.css" rel="stylesheet">
    <link href="../public/accests/admin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <?php
        
    //Page link file php
    $action = "home";
    if (isset($_GET['act']))
        $action = $_GET['act'];


    switch ($action) {
        case "home":
            include '../apps/views/admin/home.php';
            break;
        case "login":
            include '../apps/views/admin/login.php';
            break;
        case "blogs":
            include '../apps/views/admin/blogs.php';
            break;
        case "categories":
            include '../apps/views/admin/categories.php';
            break;
        case "comments":
            include '../apps/views/admin/comments.php';
            break;
        case "reports":
            include '../apps/views/admin/reports.php';
            break;
        case "add-blogs":
            include '../apps/views/admin/add-blogs.php';
            break;
        case "update-blogs":
            include '../apps/views/admin/update-blogs.php';
            break;
        case "change-password":
            include '../apps/views/admin/change-password.php';
            break;
        case "users":
            include '../apps/views/admin/users.php';
            break;
        case "info-admin":
            include '../apps/views/admin/info-admin.php';
            break;
        case "update-admin":
            include '../apps/views/admin/update-admin.php';
            break;
        case "update-categories":
            include '../apps/views/admin/update-categories.php';
            break;
        case "logout":
            unset($_SESSION['user_id']);
            unset($_SESSION['access_token']);
            header("location: index.php");
            break;
    }
    ?>
    </script>

    <script src="../public/accests/admin/vendor/jquery/jquery.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <script src="../public/accests/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../public/accests/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../public/accests/admin/js/ruang-admin.min.js"></script>
    <script src="../public/accests/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="../public/accests/admin/js/demo/chart-area-demo.js"></script>
    <script src="../public/accests/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../public/accests/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page level custom scripts -->
    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
    </script>


</body>

</html>