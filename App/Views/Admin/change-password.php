<body class="bg-gradient-login">
    <!-- Login Content -->
    <div id="wrapper">
        <?php
        include("../Public/Includes/Admin/header.php");
        ?>
        <div class="container-login">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-12 col-md-9">
                    <div class="card shadow-sm my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-form">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Đổi mật khẩu</h1>
                                        </div>
                                        <form action="index.php?act=change_password" method="post" class="user">
                                            <div class="err"></div>
                                            <div class="form-group">
                                                <input required type="password" class="form-control" name="password"
                                                    id="exampleInputPassword" placeholder="Mật khẩu cũ">
                                            </div>
                                            <div class="form-group">
                                                <input required type="password" class="form-control" name="new_password"
                                                    id="exampleInputPassword" placeholder="Mật khẩu mới">
                                            </div>
                                            <div class="form-group">
                                                <input required type="password" class="form-control"
                                                    name="confirm_password" id="exampleInputPassword"
                                                    placeholder="Nhập lại mật khẩu mới">
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" value="submit" name="submit"
                                                    class="btn btn-primary btn-block confirm-button">Đồng ý</button>
                                            </div>
                                            <br>

                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    include '../Public/Includes/Admin/footer.php';
    ?>

    </div>

    <!-- Login Content -->

</body>