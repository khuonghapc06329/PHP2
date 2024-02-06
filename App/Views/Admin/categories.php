<body id="page-top">
    <div id="wrapper">
        <?php
        include '../Public/Includes/Admin/header.php';
        ?>
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

            <div>
                <form action="<?= ROOT_URL ?>?url=CategoryController/store" method="post">
                    <h5 class="information mt-4">Thêm loại bài viết</h5><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Loại sản phẩm">
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block confirm-button">Thêm
                        mới</button>
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
                                    foreach ($data as $value) :
                                    ?>
                                        <tr>
                                            <td><?= $value['id'] ?></td>
                                            <td><?= $value['name'] ?></td>
                                            <!-- <td><?= ($value['status'] == 1) ? 'Hien thi' : 'An' ?></td> -->

                                            <td>
                                                <a href="<?= ROOT_URL ?>?url=CategoryController/detail/<?= $value['id'] ?>" class="btn btn-primary">Sửa</a>
                                                <br>
                                            </td>
                                            <td>

                                                <a href="<?= ROOT_URL ?>?url=CategoryController/delete/<?= $value['id'] ?>" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>

                                    <?php
                                    endforeach;
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
    include '../Public/Includes/Admin/footer.php';
    ?>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>