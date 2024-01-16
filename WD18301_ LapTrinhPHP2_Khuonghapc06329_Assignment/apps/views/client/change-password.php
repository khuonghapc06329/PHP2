<!--/ Nav Star /-->
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="index.php?act=home">DEV</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
            aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll active" href="index.php?act=home">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="index.php?act=login">
                        <i class="fa-solid fa-user"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Nav End /-->
<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url(./public/accests/client/img/fpt-1.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Đổi mật khẩu</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="index.php?act=home">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Đổi mật khẩu</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: 150px" class="container">
    <?php
// if(isset($_SESSION["user_id"])){
//     $user = users_selectall($_SESSION['user_id']);
//     ?>
    <div class="row gutters">
        <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="./public/accests/client/img/avatar-3.png" alt="Maxwell Admin">
                            </div>
                            <h5 class="user-name">khuonghapc06329</h5>
                            <h6 class="user-email">khuonghapc06329@fpt.edu.vn</h6>
                        </div>
                        <div class="about">
                            <h5>Thông tin</h5>
                            <p>Đây là trang thông tin tài khoản mà bạn đã đăng nhập, bạn có thể chỉnh sửa hoặc thêm
                                thông tin cho tài khoản</p>
                        </div>
                        <div class="about">
                            <a href="index.php?act=info-user"><button style="background-color: #F3285F; color: #fff"
                                    class="btn">Thông tin tài
                                    khoản</button></a>
                        </div><br>
                        <div class="about">
                            <a href="index.php?act=logout"><button style="background-color: #F3285F; color: #fff"
                                    class="btn">Đăng xuất</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gutters">
                        <form action="index.php?act=info_user" method="post" enctype="multipart/form-data">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h4 style="color:#F3285F" class="mb-2">Đổi mật khẩu</h4>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="eMail">Mật khẩu cũ</label>
                                    <input type="password" name="text" value="" class="form-control" id="eMail"
                                        placeholder="Nhập mật khẩu cũ">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="eMail">Mật khẩu mơi</label>
                                    <input type="password" name="text" value="" class="form-control" id="eMail"
                                        placeholder="Nhập mật khẩu mới">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="eMail">Nhập lại mật khẩu mới</label>
                                    <input type="password" name="text" value="" class="form-control" id="eMail"
                                        placeholder="Nhập lại mật khẩu">
                                </div>
                            </div>
                    </div>
                    <button type="submit" style="background-color: #F3285F; color: #fff" class="btn">Đổi mật
                        khẩu</button>

                </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    
// } else {
    // Mã HTML cho trường hợp không có phiên đăng nhập
// }
?>

</div><br>
<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route"
    style="background-image: url(./public/accests/client/img/fpt-3.jpg)">
    <div class="overlay-mf"></div>
    <?php
          include './public/includes/client/footer.php';
        ?>
</section>
<!--/ Section Contact-footer End /-->