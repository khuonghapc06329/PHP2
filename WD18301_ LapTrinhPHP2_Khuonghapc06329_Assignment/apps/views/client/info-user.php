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
<div class="intro intro-single route bg-image"
    style="background-image: url(./public/accests/client/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Thông tin tài khoản</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="index.php?act=home">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thông tin</li>
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
                            <?php   
                                // if($user['avarta']){
                                //     echo '
                                //     <div class="user-avatar">
                                //         <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                //     </div>
                                //     ';
                                // }else{
                                //     if (filter_var($user['avarta'], FILTER_VALIDATE_URL)) {
                                //         echo '
                                //         <div class="user-avatar">
                                //             <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                //         </div>
                                //         ';
                                //     }else{
                                //         echo '
                                //         <div class="user-avatar">
                                //             <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                //         </div>
                                //         ';
                                //     }
                                // }
                            ?>
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
                        <?php
                            // if($user['password'] == null){

                            // }else{
                            //     echo'
                            //     <div class="about">
                            //         <a href="index.php?act=change_password"><button class="btn btn-primary">Đổi mật
                            //                 khẩu</button></a>
                            //     </div>
                            //     ';
                            // }   
                        ?>
                        <div class="about">
                            <a href="index.php?act=change-password"><button
                                    style="background-color: #F3285F;color: #fff" class="btn">Đổi mật
                                    khẩu</button></a>
                        </div><br>
                        <div class="about">
                            <a href="index.php?act=logout"><button style="background-color: #F3285F;color: #fff"
                                    class="btn">Đăng
                                    xuất</button></a>
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
                                <h4 style="color: #F3285F" class="mb-2">Thông tin cá nhân</h4>
                            </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Street">Họ Tên</label>
                                <input type="name" name="address" value="Huỳnh An Khương" class="form-control"
                                    id="Street" placeholder="Họ tên">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="ciTy">Email</label>
                                <input type="name" value="khuonghapc06329@fpt.edu.vn" class="form-control" id="ciTy"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="sTate">Địa chỉ</label>
                                <input type="text" value="Cần Thơ" class="form-control" id="sTate"
                                    placeholder="Địa chỉ">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="zIp">Số điện thoại</label>
                                <input name="avarta" type="text" value="0813-767-025" class="form-control" id="zIp"
                                    placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="zIp">Hình đại diện</label>
                                <input name="avarta" type="file" class="form-control" id="zIp"
                                    placeholder="Hình đại diện">
                            </div>
                        </div>
                    </div><br>
                    <button type="submit" style="background-color: #F3285F; color: #fff" class="btn">Cập nhật thông
                        tin</button>

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