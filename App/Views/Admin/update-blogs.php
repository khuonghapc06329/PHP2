<body id="page-top">
    <div id="wrapper">
        <?php
            include '../Public/Includes/Admin/header.php';
        ?>
        <!-- Sidebar -->
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Cập nhật bài viết</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?act=home">Trang chủ</a></li>
                    <li class="breadcrumb-item">Quản lý</li>
                    <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
                </ol>
            </div>

            <div class="container">
                <div class="card px-1 py-4">
                    <div class="card-body">
                        <h5 class="information mt-4">Cập nhật bài viết</h5>
                        <h6 class="information mt-4">Ghi chú (<span style="color:red">*</span>) bắc buộc !</h6>
                        <h6 class="information mt-4">ID</h6>
                        <form action="" method="post">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="input-group"> <input readonly class="form-control" type="text"
                                                name="blog_id" value="" placeholder=""> </div>
                                    </div>
                                </div>
                            </div>

                            <h6 class="information mt-4">Tiêu đề<span style="color:red">*</span></h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="input-group"> <input class="form-control" type="text" name="title"
                                                value="" placeholder=""> </div>
                                    </div>
                                </div>
                            </div>

                            <h6 class="information mt-4">Nội dung<span style="color:red">*</span></h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="input-group"> <textarea style="height: 200px" class="form-control"
                                                type="text" name="content" value="" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6 class="information mt-4">Ngày đăng<span style="color:red">*</span></h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="input-group"> <input class="form-control" type="text" name="day"
                                                value="" placeholder="DD/MM/YYYY"> </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> </div> <button type="submit"
                                class="btn btn-primary btn-block confirm-button">Cập nhật</button>
                        </form>

                    </div>
                </div>
            </div><br>
            <!--Row-->

            <!-- Modal Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to logout?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                            <a href="login.html" class="btn btn-primary">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
    </div>
    <?php
        include '../Public/Includes/Admin/footer.php';
    ?>

</body>