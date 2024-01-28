<?php

namespace App;

use App\Core\Database;

class Forgot_pass
{
    public function index()
    {
        echo '<div class="container col-md-5 mx-auto mt-5">
        <h1>Lấy lại mật khẩu</h1><br>
        ';
        if (isset($_POST['submit'])) {
            $this->forgotPassUser();
        }
        return '
        <br>
        <form action="/forgot_pass" method="post">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nhập địa chỉ Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-danger">Lấy lại mật khẩu</button>
          </form><br>
          </div>
        ';
    }

    public function forgotPassUser()
    {


        $email = $_POST['email'];

        if (empty($email)) {

            echo '<h5><i class="fa-solid fa-circle-exclamation"></i> Vui lòng nhập email !</h5>';
        }

        // Kiểm tra tính hợp lệ của email
        else if (!preg_match('/@fpt\.edu\.vn$/', $email)) {
            echo '<h5> <i class="fa-solid fa-circle-exclamation"></i> Vui lòng nhập đúng định dạng email!</h5>';
        } else {
            $this->getPass($email);
        }
    }

    public function updatePass($email, $newPassword)
    {
        $db = new Database();
        $sql = "UPDATE users SET password = ? WHERE email = ?";
        $db->pdo_query_one($sql, $newPassword, $email);
    }

    protected function getPass($email)
    {
        $db = new Database();
        $sql = "SELECT * FROM users WHERE email = ?";
        $result = $db->pdo_query_one($sql, $email);

        if ($result) {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $randomPassword = substr(str_shuffle($characters), 0, 8); // Độ dài mật khẩu, bạn có thể điều chỉnh theo nhu cầu

            $this->updatePass($email, $randomPassword);
            echo '
            
                <h3>Xin chào: ' . $result['name'] . '</h3>
                <h3>Mật khẩu mới của bạn là: ' . $randomPassword . '</h3>
                <h5><i class="fa-solid fa-triangle-exclamation"></i> Không được đưa thông tin mật khẩu cho bất kì người lạ nào để tránh mất tài khoản !</h5>
                <a href="/login"><button class="btn btn-danger">Đăng nhập tài khoản</button></a><br>
            ';
        } else {
            header('location: login?error=invaliduserdata');
            exit();
        }
    }
}
