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
    <link href="../Public/Accests/Admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../Public/Accests/Admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../Public/Accests/Admin/css/ruang-admin.min.css" rel="stylesheet">
    <link href="../Public/Accests/Admin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    </script>

    <script src="../Public/Accests/Admin/vendor/jquery/jquery.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <script src="../Public/Accests/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../Public/Accests/Admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../Public/Accests/Admin/js/ruang-admin.min.js"></script>
    <script src="../Public/Accests/Admin/vendor/chart.js/Chart.min.js"></script>
    <script src="../Public/Accests/Admin/js/demo/chart-area-demo.js"></script>
    <script src="../Public/Accests/Admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../Public/Accests/Admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>


</body>

</html>