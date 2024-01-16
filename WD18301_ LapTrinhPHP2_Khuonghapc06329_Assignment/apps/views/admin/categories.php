<body id="page-top">
    <div id="wrapper">
        <?php
            include '../public/includes/admin/header.php';
        ?>
        <!-- Sidebar -->
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Quản lý loại bài viết</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?act=home">Trang chủ</a></li>
                    <li class="breadcrumb-item">Quản lý</li>
                    <li class="breadcrumb-item active" aria-current="page">Loại bài viết</li>
                </ol>
            </div>

            <?php
            // if (isset($_POST['name'])) {
            //     $name = $_POST['name'];
            //     if (empty($_POST['name'])) {
            //         $error = '
            //         <div class="error-message">
            //         <i class="fa-solid fa-circle-exclamation"></i> Vui lòng nhập đầy đủ thông tin !
            //         </div><br>
            //         ';
            //     }
            //     if (isset($error)) {
            //         echo $error;
            //     } else {
            //         $existingName = array_column(categories_selectall(), 'name');
            //         if (in_array($name, $existingName)) {
            //             echo  '
            //             <div class="error-message">
            //             <i class="fa-solid fa-circle-exclamation"></i> Loại đã tồn tại !!!
            //             </div>
            //             ';
            //         } else {
            //             echo '
            //             <div class="success-message">
            //             <i class="fa-solid fa-circle-check"></i> Thêm loại thành công !			
            //             </div>
            //             ';
            //             categories_insert($name);
            //         }
            //     }
            // }

            ?>
            <div>
                <form action="index.php?act=categories" method="post">
                    <h5 class="information mt-4">Thêm loại bài viết</h5><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Loại sản phẩm">
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> </div>
                    <button type="submit" class="btn btn-primary btn-block confirm-button">Thêm mới</button>
                </form> <br>
            </div>
            <div class="row">
                <!-- Datatables -->
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                            <h6 class="m-0 font-weight-bold text-primary">Bảng Loại bài viết</h6>
                        </div>
                        <div class="table-responsive p-3">
                            <table class="table align-items-center table-flush" id="dataTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Loại</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Loại</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    // if (isset($_GET['category_id']) && isset($_GET['status'])) {
                                    //     categories_delete($_GET['category_id'], $_GET['status']);
                                    // }
                                    // $category = categories_selectall();

                                    // foreach ($category as $categories) {
                                    //     extract($categories);
                                    //     $edit_link = "index.php?act=update_categories&category_id=" . $category_id;
                                    //     $del_link = "index.php?act=categories&category_id=" . $category_id . "&status=0";
                                    //     $present = "index.php?act=categories&category_id=" . $category_id . "&status=1";
                                    //     if ($status == 0) {
                                    //         echo '       
                                    //             <tr>
                                    //                 <td>' . $category_id . '</a></td>
                                    //                 <td>' . $name . '</td>
                                    //                 <td><a href="' . $edit_link . '" class="btn btn-sm btn-primary">Sửa</a></td>
                                    //                 <td><a href="' . $present . '" class="btn btn-sm btn-success">Bật</a></td>
                                    //             </tr>
                                    //             ';
                                    //     } else {
                                    //         echo '                     
                                    //             <tr>
                                    //                 <td>' . $category_id . '</a></td>
                                    //                 <td>' . $name . '</td>
                                    //                 <td><a href="' . $edit_link . '" class="btn btn-sm btn-primary">Sửa</a></td>
                                    //                 <td> <a href="' . $del_link . '" class="btn btn-sm btn-danger">Xóa</a></td>
                                    //             </tr>
                                    //             ';
                                    //     }
                                    // }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
            <!--Row-->

            <!-- Modal Logout -->

        </div>

    </div>
    <!---Container Fluid-->
    <?php
        include '../public/includes/admin/footer.php';
    ?>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>