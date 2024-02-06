<!--/ Nav Star /-->
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="index.php?act=home"><img style="width: 70px"
                src="./public/accests/client/img/logo_dev.png" alt=""></a>
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
                    <a class="nav-link js-scroll" href="index.php?act=home#about">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="index.php?act=home#service">Công việc</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="index.php?act=home#blog">Bài viết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="index.php?act=home#contact">Liên hệ</a>
                </li>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="' . ROOT_URL . '?url=InfoUserController/index">
                        <i class="fa-solid fa-user-gear" style="color: #fb4b54;"></i></a>
                </a>
                </li>
                ';
                } else {
                    echo '
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="' . ROOT_URL . '?url=LoginController/index">
                <i class="fa-solid fa-user"></i></a>
                </li>
                ';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!--/ Nav End /-->