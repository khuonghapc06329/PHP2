<?php

namespace Core;

use mysqli;

class database
{
    public $x, $y;

    public function __construct()
    {
        $con = mysqli_connect('localhost', 'root', 'mysql', 'php2');
        if (!$con) {
            die("Kết nối thất bại:" . mysqli_connect_error());
        } else {
            echo "Kết nối thành công";
        }
    }

    public function HelloWorld()
    {
        echo "hello world";
    }
} // Dấu ngoặc nhọn đóng thiếu trong mã của bạn

?>