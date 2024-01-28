<?php

namespace App;

class Upload
{
    public function index(): string
    {
        return <<<FORM
        <div class="text-center" style="min-height:100vh; padding-top: 20%">
        <form action="/upload" method="post" enctype="multipart/form-data">
            <input class="form-group" type="file" name="receipt" />
            <button class="btn btn-danger" type="submit" name="upload">Upload</button>
        </form>
        </div>
        FORM;
    }
    public function upload()
    {
        if (isset($_POST['upload'])) {
            if (empty($_FILES['receipt']['name'])) {
                echo '<i class="fa-solid fa-circle-exclamation"></i> Vui lòng chọn hình ảnh';
            } else {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $old_name = $_FILES['receipt']['name'];
                $file_extension = pathinfo($old_name, PATHINFO_EXTENSION);
                $new_name = date('YmdHis') . '.' . $file_extension;
                $upload_path = 'Public/Uploads/' . $new_name;

                if (move_uploaded_file($_FILES['receipt']['tmp_name'], $upload_path)) {
                    echo '
                        <div class="text-center" style="min-height:100vh; padding-top: 20%">
                            <h3><i class="fa-solid fa-circle-check"></i> Upload thành công !</h3>
                        </div>
                    ';
                } else {
                    echo '
                        <div class="text-center" style="min-height:100vh; padding-top: 20%">
                            <h5><i class="fa-solid fa-circle-exclamation"></i> Có lỗi xảy ra khi tải ảnh lên</h5>
                        </div>
                    ';
                    exit();
                }
            }
        }
    }
}
