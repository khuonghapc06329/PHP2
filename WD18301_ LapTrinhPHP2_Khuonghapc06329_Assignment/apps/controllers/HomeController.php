<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class HomeController extends BaseController{
    public function __construct() {
        parent::__construct();

        echo 'HomeController<br>';
    }
}