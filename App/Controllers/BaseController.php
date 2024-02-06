<?php

namespace App\Controllers;

use App\Core\Render;

/**
 * Quy tắc đặt tên đúng chuẩn Lavarel đối với Controller
 * Tên Controller bắt đầu bằng danh từ, số ít, hậu tố Controller, Class phải trùng với tên file
 */

class BaseController
{
    protected Render|array $load;
    function __construct()
    {
        $this->load = new Render();
    }

    public function  redirect($url, $refresh = null): void
    {
        header('location:' . $url);
    }
}
