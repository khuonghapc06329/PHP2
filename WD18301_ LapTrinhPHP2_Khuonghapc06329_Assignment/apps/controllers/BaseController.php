<?php
namespace App\Controllers;

/**
 * Quy tắc đặt tên đúng chuẩn Lavarel đối với Controller
 * Tên Controller bắt đầu bằng danh từ, số ít, hậu tố Controller, Class phải trùng với tên file
 */

class BaseController{
    public function __construct() {
        echo 'BaseController<br>';
    }
}