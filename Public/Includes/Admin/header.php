<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?act=home">
        <div class="sidebar-brand-icon">
            <img src="../Public/Accests/Admin/img/logo/logo_dev.png">
        </div>
        <div class="sidebar-brand-text mx-3">Quản trị</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="index.php?act=home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Bảng điều khiển</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Quản lý
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?act=blogs">
            <i class="fas fa-list fa-fw"></i>
            <span>Quản lý bài viết</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?act=categories">
            <i class="far fa-fw fa-edit"></i>
            <span>Quản lý loại bài viết</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?act=comments">
            <i class="far fa-fw fa-comment"></i>
            <span>Quản lý bình luận</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?act=users">
            <i class="far fa-fw fa-user"></i>
            <span>Quản lý tài khoản</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?act=reports">
            <i class="far fa-fw fa-circle"></i>
            <span>Quản lý tố cáo</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?act=add-blogs">
            <i class="far fa-fw fa-add"></i>
            <span>Thêm bài viết</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-1 small" placeholder="Tìm kiếm" aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="../Public/Accests/Admin/img/avatar-3.png" style="max-width: 60px">
                        <span class="ml-2 d-none d-lg-inline text-white small">Huỳnh An Khương</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php?act=info-admin">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Thông tin tài khoản
                        </a>
                        <a class="dropdown-item" href="index.php?act=update-admin">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Cập nhật thông tin
                        </a>
                        <a class="dropdown-item" href="index.php?act=change-password">
                            <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i> Đổi mật khẩu
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Đăng xuất
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Topbar -->