<form method="post">
    <p>Email hiển thị có dữ liệu: khuonghapc06329@gmail.com</p>
    <input placeholder="Nhập email" type="email" name="email">
    <input name="click" type="submit">
</form>
<?php
    if(isset($_POST['click']) && $_POST['click']){
        if(isset($user['name']) && isset($user['password'])){
            echo 'Tên tài khoản là: '. $user['name'];
            echo '<br>';
            echo 'Mật khẩu là: '. $user['password'];
        }else{
            echo 'Không tồn tại';
        }
    }
    
?>