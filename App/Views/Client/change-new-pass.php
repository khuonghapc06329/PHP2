<body id="page-top">
    <?php


    use App\Controllers\RetrievalPassController;

    include './Public/Includes/Client/nav.php';
    ?>
    <!--/ Intro Skew Star /-->
    <div class="intro intro-single route bg-image" style="background-image: url(./Public/Accests/Client/img/fpt-9.jpg)">
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="intro-title mb-4">Lấy lại mật khẩu</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="index.php?act=home">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                            Lấy lại mật khẩu
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--/ Intro Skew End /-->

    <!-- Section: Design Block -->
    <section class="py-5">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            Bạn có phải là <br />
                            <span style="color: #F3285F" class="">Người mới ?</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Nếu bạn là người mới thì hãy nhanh tay đăng ký tài khoản để được nhận những ưu đãi và ngoài
                            ra các bạn còn có thể sử dụng các tính năng trên web của tôi.
                        </p>
                        <a href="<?= ROOT_URL ?>?url=RegisterController/index"><button
                                style="background-color: #F3285F; color: #fff" class="btn">Đăng ký ngay</button></a>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="">
                            <div class="box-shadow-full py-5 px-md-5">
                                <h2>Đổi mật khẩu mới</h2><br>
                                <form
                                    action="<?= ROOT_URL ?>?url=RetrievalPassController/index&token=<?= $_GET['token'] ?>&email=<?= $_GET['email'] ?>"
                                    method="post">
                                    <?php
                                    if (isset($_POST['submit'])) {
                                       $retrievalPass = new RetrievalPassController();
                                       $retrievalPass->checkRetrievalPassword();
                                    }
                                    ?>
                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <label style="float: left;" class="form-label" for="form3Example4">Nhập mật khẩu
                                            mới</label>
                                        <input type="password" name="password" id="form3Example4"
                                            class="form-control" />

                                    </div><br>
                                    <div class="form-outline mb-4">
                                        <label style="float: left;" class="form-label" for="form3Example4">Nhập lại mật
                                            khẩu mới</label>
                                        <input type="password" name="confirm_password" id="form3Example4"
                                            class="form-control" />

                                    </div><br>
                                    <!-- Submit button -->
                                    <button type="submit" name="submit" style="background-color: #F3285F; color: #fff"
                                        class="btn btn-block mb-4">
                                        Lấy lại mật khẩu
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->



    <!--/ Section Contact-Footer Star /-->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route"
        style="background-image: url(./Public/Accests/Client/img/fpt-6.jpg)">
        <div class="overlay-mf"></div>
        <?php
        include './Public/Includes/Client/footer.php';
        ?>
    </section>
    <!--/ Section Contact-footer End /-->

    <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div> -->
</body>