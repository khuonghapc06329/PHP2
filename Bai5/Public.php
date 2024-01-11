<?php
//Public là các biến hoặc thành viên được đặt là public thì được truy cập bất cứ nơi nào kể cả bên ngoài class
    class Example {
        public $publicVar;
    
        public function publicMethod() {
            echo "Đây là phương pháp sử dụng Public.";
        }
    }
    
    $obj = new Example();
    $obj->publicVar = "Biến Public";
    echo $obj->publicVar;  // In ra "Public Variable"
    $obj->publicMethod();  // Gọi method public
    
?>