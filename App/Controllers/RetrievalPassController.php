<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\User;

class RetrievalPassController extends BaseController
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

        $change = new User();
        $data = $change->getAll();

        // $this->_renderBase->renderHeader();
        // $this->load->render('layouts/client/slider');
        $this->load->render('Client/change-new-pass', $data);
        // $this->_renderBase->renderFooter();
    }
    function checkRetrievalPassword()
    {
        $token = $_GET['token'];
        $email = $_GET['email'];
        // echo $token, $email;
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        // echo $password, $confirm_password;
        if (empty($password) || empty($confirm_password)) {
            echo '
               Vui lòng không để trống thông tin
                ';
        } elseif ($password === $confirm_password) {
            // Kiểm tra xem cả hai mật khẩu có giống nhau không
            $this->getNewPass($password, $token, $email);
            echo '
            <script>
            alert("Đổi mật khẩu thành công !");
            window.location.href = "' . ROOT_URL . '?url=LoginController/index";
            </script>

        ';
        } else {
            echo '
                Mật khẩu không chính xác
                ';
        }
    }
    function getNewPass($password, $token, $email)
    {
        $changePass = new User();
        $changePass->RetrievalPassword($password, $token, $email);
    }
}
