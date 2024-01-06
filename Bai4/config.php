<?php
//Kết nối database
    $con = mysqli_connect('localhost','root','mysql','php2');
    if(!$con){
        echo 'Kết nối không thành công';
    }
?>