<?php

namespace App;

class Home
{
    public static function index()
    {
        echo
        '
            <div class="text-center" style="min-height:100vh; padding-top: 20%">
                <h2>Hi !</h2>
                <h1><i class="fa-solid fa-house"></i> Chào mừng bạn đến với trang chủ bài lab 5</h1>
                ';
        if (isset($_SESSION['user'])) {
            echo ' <a href="/login"><button class="btn btn-danger">Thông tin tài khoản</button></a>';
        } else {
            echo '
                    <a href="/login"><button class="btn btn-danger">Đăng nhập tài khoản</button></a>
                ';
        }
        echo ' <a href="/upload"><button class="btn btn-danger">File upload</button></a>
            </div>';
    }
}
