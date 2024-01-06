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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
    body,
    html {
        height: 100%;
    }

    .d-flex.align-items-center.justify-content-center {
        min-height: 90vh;
    }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-lg-10 mx-auto d-flex align-items-center justify-content-center">
            <!-- Thêm lớp d-flex align-items-center justify-content-center -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Bảng khách hàng</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Tên tài khoản</th>
                                <th>Mật khẩu</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tên tài khoản</th>
                                <th>Mật khẩu</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Xử lý dữ liệu của hàng hiện tại
                                    echo '  
                                    <tr>
                                        <td>'.$row['user_id'].'</a></td>
                                        <td>'.$row['name'].'</td>
                                        <td>'.$row['password'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['phone'].'</td>
                                        <td>'.$row['address'].'</td>
                                        <td><a href="" class="btn btn-sm btn-primary">Sửa</a></td>
                                        <td><a href="" class="btn btn-sm btn-danger">Xóa</a></td>
                                    </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>