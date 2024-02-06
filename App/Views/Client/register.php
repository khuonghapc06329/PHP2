<body id="page-top">
    <?php

    use App\Controllers\RegisterController;

    include './Public/Includes/Client/nav.php';
    ?>
    <!--/ Intro Skew Star /-->
    <div class="intro intro-single route bg-image" style="background-image: url(./Public/Accests/Client/img/fpt-5.jpg)">
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="intro-title mb-4">Đăng ký</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="index.php?act=home">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                            Đăng ký
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
                            Chào mừng bạn<br />
                            <span style="color: #F3285F" class="">Đăng ký tài khoản</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Đây là trang đăng ký bạn có thể đăng ký tài khoản cá nhân ở đây để bạn có thể sử dụng các
                            chức năng trên trang web của tôi.
                        </p>
                        <a href="index.php?act=login"><button style="background-color: #F3285F; color: #fff" class="btn">Đăng nhập</button></a>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="">
                            <div class="box-shadow-full py-5 px-md-5">
                                <h2>Đăng ký tài khoản</h2><br>
                                <form action="<?= ROOT_URL ?>?url=RegisterController/index" method="post">
                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $register = new RegisterController();
                                        $register->checkRegister();
                                    }
                                    ?>

                                    <!-- Username input -->
                                    <div class="form-outline mb-4">
                                        <label style="float: left;" class="form-label" for="form3Example3">Tên tài
                                            khoản</label>
                                        <input type="text" name="username" id="form3Example3" class="form-control" />

                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <label style="float: left;" class="form-label" for="form3Example4">Mật
                                            khẩu</label>
                                        <input type="password" name="password" id="form3Example4" class="form-control" />

                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label style="float: left;" class="form-label" for="form3Example3">Địa chỉ
                                            Email</label>
                                        <input type="email" name="email" id="form3Example3" class="form-control" />

                                    </div><br>

                                    <!-- Checkbox -->
                                    <!-- <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example33" checked />
                                        <label class="form-check-label" for="form2Example33">
                                            Subscribe to our newsletter
                                        </label>
                                    </div> -->

                                    <!-- Submit button -->
                                    <button type="submit" name="submit" style="background-color: #F3285F; color: #fff" class="btn btn-block mb-4">
                                        Đăng ký
                                    </button><br>
                                    <!-- Register buttons -->
                                    <a href="index.php?act=forgot-password">Quên mật khẩu ?</a>
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
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(./Public/Accests/Client/img/fpt-2.jpg)">
        <div class="overlay-mf"></div>
        <?php
        include './Public/Includes/Client/footer.php';
        ?>
    </section>
    <!--/ Section Contact-footer End /-->

    <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div> -->
</body>