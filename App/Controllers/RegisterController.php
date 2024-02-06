<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\User;

class RegisterController extends BaseController
{

    private $_renderBase;

    /**
     * Thuốc trị đau lưng
     * Copy lại là hết đau lưng
     * 
     */
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new BaseRender();
    }

    function index()
    {
        // dữ liệu ở đây lấy từ repositories hoặc model

        $register = new User();
        $data = $register->getAll();

        // $this->_renderBase->renderHeader();
        // $this->load->render('layouts/client/slider');
        $this->load->render('Client/register', $data);
        // $this->_renderBase->renderFooter();
    }
    function checkRegister()
    {

        // Kiểm tra xem các trường cần thiết đã được nhập hay chưa
        if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
            echo 'Vui lòng nhập đủ thông tin';
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            // Kiểm tra xem tên tài khoản có dấu và khoảng trắng hay không
            if ($this->hasSpecialCharacters($username) || $this->hasWhitespace($username)) {
                echo 'Tên tài khoản không được chứa dấu hoặc khoảng trắng.';
            } else {
                // Kiểm tra độ dài mật khẩu
                if (strlen($password) < 2) {
                    echo 'Mật khẩu phải có ít nhất 2 ký tự.';
                } else {
                    // Kiểm tra định dạng email
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo 'Email không đúng định dạng.';
                    } else {
                        $this->getRegister();
                    }
                }
            }
        }


        // Hàm kiểm tra xem chuỗi có chứa ký tự đặc biệt hay không

    }
    function hasSpecialCharacters($str)
    {
        return preg_match('/[!@#$%^&*(),.?":{}|<>]/', $str);
    }

    // Hàm kiểm tra xem chuỗi có chứa khoảng trắng hay không
    function hasWhitespace($str)
    {
        return preg_match('/\s/', $str);
    }
    function getRegister()
    {

        // var_dump($_POST);

        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'email' => $_POST['email']

        ];

        $register = new User();

        $usernameExists = $register->checkUsername($data);
        $emailExists = $register->checkEmail($data);
        if ($usernameExists) {
            echo 'Tài khoản đã tồn tại';
        } else if ($emailExists) {
            echo 'Email đã được sử dụng';
        } else {
            $result = $register->createUser($data);
            if ($result) {
                echo 'Tại tài khoản thành công';
            } else {
                echo 'Tạo tài khoản không thành công';
            }
        }
    }

    // public function Logout()
    // {
    //     session_unset();
    //     session_destroy();
    //     header('location' . ROOT_URL . '?url=HomeController/homePage');
    // }
}
