<?php

namespace App\Core;

use App\Controllers\BaseController;

class BaseRender extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderHeader()
    {
        $this->load->render('./../../Public/Includes/Client/header');
    }

    public function renderFooter()
    {
        $this->load->render('./../../Public/Includes/Client/footer');
    }
}
