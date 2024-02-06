<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './Public/phpmailer/src/Exception.php';
require './Public/phpmailer/src/PHPMailer.php';
require './Public/phpmailer/src/SMTP.php';

class ForgotPassController extends BaseController
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

        $forgot = new User();
        $data = $forgot->getAll();

        // $this->_renderBase->renderHeader();
        // $this->load->render('layouts/client/slider');
        $this->load->render('Client/forgot-password', $data);
        // $this->_renderBase->renderFooter();
    }

    function checkForgotPassword()
    {
        if (empty($_POST['email'])) {
            echo 'Vui lòng nhập email';
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo 'Email không đúng định dạng';
        } else {
            $this->getEmail();
        }
    }
    function getEmail()
    {

        // var_dump($_POST);

        $data = [
            'email' => $_POST['email'],

        ];

        $forgot = new User();
        $emailExists = $forgot->checkEmail($data);
        if ($emailExists) {
            // var_dump($emailExists);
            $newToken = rand(0000, 9999);
            $forgot->toKenCreate($newToken, $emailExists[0]['email']);
            $token_select = $forgot->getAllToken($data);
            // var_dump($token_select[0]['token']);

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'khuonghapc06329@fpt.edu.vn';
                $mail->Password   = 'rspctxfwuaypoyuk';

                $mail->Port       = 587;


                // Thiết lập thông tin người gửi và người nhận
                $mail->setFrom('khuonghapc06329@fpt.edu.vn', 'Backend Developer');
                $mail->addAddress($_POST['email']);

                // Thiết lập nội dung email
                $mail->isHTML(true);
                $mail->Subject = 'Please click on the link below to confirm to retrieve your new password:';
                $mail->Body = 'Link: http://localhost:8000/?url=RetrievalPassController/index&token=' . $token_select[0]['token'] . '&email=' . $emailExists[0]['email'];

                // Gửi email
                $mail->send();

                echo "
                    Gửi yêu cầu thành công vui lòng kiểm tra Email của bạn !
                    ";
            } catch (Exception $e) {
                echo "Không thể gửi mail. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo 'Email không tồn tại';
        }
    }
}
