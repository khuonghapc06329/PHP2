<?php

namespace App;

use App\Core\Database;

class Login
{
    public function login()
    {
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user']['user_id'];
            $name = $_SESSION['user']['name'];
            $address = $_SESSION['user']['address'];
            $phone = $_SESSION['user']['phone'];

            return "
            <div class='text-center' style='min-height:100vh; padding-top: 15%'>
            <h3>Mã tài khoản: {$user_id} </h3><br>
             <h3>Họ tên người dùng: {$name} </h3><br>
             <h3>Địa chỉ: {$address} </h3><br>
             <h3>Số điện thoại: {$phone} </h3><br>
              <a href='/logout'><button class='btn btn-danger' type='submit'>Đăng xuất</button></a>
              </div>
              ";
        } else {
            echo  '<div class="container col-md-5 mx-auto mt-5">
            <h1>Đăng nhập tài khoản</h1><br>
            ';

            if (isset($_POST['submit'])) {

                $this->loginUser();
            }
            return '
            
            <form action="/login" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Địa chỉ Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-danger">Đăng nhập</button>
          </form><br>
          <a style="text-decoration:none" href="/forgot_pass">Quên mật khẩu ?</a>
          </div>
            ';
        }
    }

    public function loginUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {

            echo '<h5><i class="fa-solid fa-circle-exclamation"></i> Vui lòng nhập email và mật khẩu !</h5>';
        }

        // Kiểm tra tính hợp lệ của email
        else if (!preg_match('/@fpt\.edu\.vn$/', $email)) {
            echo '<h5> <i class="fa-solid fa-circle-exclamation"></i> Vui lòng nhập đúng định dạng email!</h5>';
        }


        // Kiểm tra tính hợp lệ của mật khẩu (ví dụ: ít nhất 6 ký tự)
        else if (strlen($password) < 2) {
            echo '<h5> <i class="fa-solid fa-circle-exclamation"></i> Vui lòng nhập mật khẩu ít nhất 2 ký tự !</h5>';
        }

        // Kiểm tra tính hợp lệ của mật khẩu (ví dụ: chứa ít nhất một số)
        else if (!preg_match("/\d/", $password)) {
            echo '<h5> <i class="fa-solid fa-circle-exclamation"></i> Vui lòng nhập mật khẩu ít nhất một số !</h5>';
        } else {
            // Gọi hàm để kiểm tra người dùng
            $this->getUser($email, $password);
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header("location:/");
    }

    protected function getUser($email, $password)
    {
        $db = new Database();
        $sql = "SELECT * FROM users WHERE email = ? AND  password = ?";
        $result = $db->pdo_query_one($sql, $email, $password);

        if ($result) {
            if (isset($result['user_id'], $result['email'], $result['password'])) {
                $_SESSION['user'] = $result;
                header('location: /');
            } else {
                header('location: login?error=invaliduserdata');
                exit();
            }
        } else if (!$result) {
            echo '<h5> <i class="fa-solid fa-circle-exclamation"></i> Địa chỉ email hoặc mật khẩu không đúng !</h5>';
        }
    }
}
