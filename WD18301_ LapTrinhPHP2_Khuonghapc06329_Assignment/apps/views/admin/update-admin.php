<style>
#imagePreview {
    width: 30%;
    max-height: 200px;
    margin-top: 10px;
    display: none;
}
</style>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php
          include '../public/includes/admin/header.php';
        ?>
        <!-- Sidebar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Cập nhật thông tin</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?act=home">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cập nhật thông tin</li>
                </ol>
            </div>

            <form class="row login_form" action="index.php?act=update&user_id=<?= $user_id ?>" method="POST"
                id="contactForm" novalidate="novalidate" enctype="multipart/form-data">

                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="name" name="fullname" value="" placeholder="Họ tên"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Họ tên' ">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="address" name="address" value="" placeholder="Địa chỉ"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ'">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="phone" name="phone" value="" placeholder="Số điện thoại"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số điện thoại'">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="email" name="email" value="" placeholder="email"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'">
                </div>
                <div class="col-md-12 form-group">
                    <input type="file" class="form-control" id="img" name="img" value="" placeholder="avatar"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'avatar'"
                        onchange="previewImage(this);">
                </div>

                <div class="col-md-8 form-group">

                    <img id="imagePreview" src="#" alt="Preview">

                </div>

                <div class="col-md-12 form-group">
                    <div class="creat_account">
                        <input type="checkbox" id="f-option2" name="selector">
                        <label for="f-option2">Đồng ý cập nhật</label>
                    </div>
                </div>

                <div class="col-md-12 form-group">
                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Cập nhật</button>

                </div>
            </form>
        </div>
        <!-- Footer -->

    </div>
    <?php
      include '../public/includes/admin/footer.php';
    ?>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>