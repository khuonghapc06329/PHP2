<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\User;

class LoginController extends BaseController
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

        $login = new User();
        $data = $login->getAll();

        // $this->_renderBase->renderHeader();
        // $this->load->render('layouts/client/slider');
        $this->load->render('Client/login', $data);
        // $this->_renderBase->renderFooter();
    }

    function checkLogin()
    {
        // Kiểm tra xem tên tài khoản có được nhập hay không
        if (empty($_POST['username']) && empty($_POST['password'])) {
            echo 'Vui lòng nhập đầy đủ thông tin';
        } else {
            // Kiểm tra xem tên tài khoản có dấu hay không
            $username = $_POST['username'];
            if ($this->hasAccent($username)) {
                echo 'Tên tài khoản không được chứa dấu.';
            } elseif ($this->hasWhitespace($username)) {
                echo 'Tên tài khoản không được chứa khoảng trắng.';
            } else {
                // Tiếp tục xử lý đăng nhập
                $this->getUser();
            }
        }


        // Hàm kiểm tra xem chuỗi có chứa dấu không

    }
    function hasAccent($str)
    {
        return preg_match('/[áàảãạâấầẩẫậăắằẳẵặéèẻẽẹêếềểễệíìỉĩịóòỏõọôốồổỗộơớờởỡợúùủũụưứừửữựýỳỷỹỵ]/u', $str);
    }

    // Hàm kiểm tra xem chuỗi có chứa khoảng trắng không
    function hasWhitespace($str)
    {
        return preg_match('/\s/', $str);
    }
    function getUser()
    {

        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password']

        ];

        $login = new User();
        $result = $login->getAllUserLogin($data);
        if ($result) {
            $_SESSION['user'] = $result;

            header('location: ' . ROOT_URL . '?url=HomeController/homePage');
            // echo '
            //     <script>window.location.href = "' . ROOT_URL . '?url=HomeController/homePage";</script>
            // ';
        } else {
            echo 'Thông tin đăng nhập không chính xác';
        }
    }
    // public function Logout()
    // {
    //     session_unset();
    //     session_destroy();
    //     header('location' . ROOT_URL . '?url=HomeController/homePage');
    // }
}
