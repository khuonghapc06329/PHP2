<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './Public/phpmailer/src/Exception.php';
require './Public/phpmailer/src/PHPMailer.php';
require './Public/phpmailer/src/SMTP.php';

class HomeController extends BaseController
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

    function HomeController()
    {
        $this->homePage();
    }

    function homePage()
    {
        // dữ liệu ở đây lấy từ repositories hoặc model
        $data = [
            "products" => [
                [
                    "id" => 1,
                    "name" => "Sản phẩm"
                ]
            ]
        ];


        $this->_renderBase->renderHeader();
        // $this->load->render('layouts/client/slider');

        $this->load->render('Client/index', $data);
        $this->_renderBase->renderFooter();
    }

    function detail($id)
    {
        // dữ liệu ở đây lấy từ repositories hoặc model

    }
    function getContact()
    {


        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'khuonghapc06329@fpt.edu.vn';
            $mail->Password   = 'rspctxfwuaypoyuk';
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom($_POST['email'], $_POST['name']);  // Sử dụng giá trị từ trường email và name
            $mail->addAddress('khuonghapc06329@fpt.edu.vn');

            //Content
            $mail->isHTML(true);
            $mail->Subject = $_POST['subject'];
            $mail->Body    = $_POST['content'];  // Sử dụng giá trị từ trường content

            $mail->send();

            echo "
            
            <script>
                alert('Gửi mail thành công');
                document.location.href = '" . ROOT_URL . "?url=HomeController/homePage';
            </script>
            ";
        } catch (Exception $e) {
            echo "Không thể gửi mail. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
