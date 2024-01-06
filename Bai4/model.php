<?php
    include 'config.php';
    //Lấy dữ liệu của bảng users từ database
    $result = mysqli_query($con, "SELECT * FROM users");
?>