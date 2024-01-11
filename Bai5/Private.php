<?php
//Private là Các thành viên được đặt là private chỉ có thể được truy cập từ bên trong class chứa nó.
class Example {
    private $privateVar;

    private function privateMethod() {
        return "Đây là phương pháp sử dụng Private.";
    }

    public function setPrivateVar($value) {
        $this->privateVar = $value;
    }

    public function getPrivateVar() {
        return $this->privateVar;
    }

    public function callPrivateMethod() {
        return $this->privateMethod();
    }
}

$obj = new Example();

// Sử dụng phương thức công cộng để gán giá trị cho privateVar
$obj->setPrivateVar("Biến Private");

// Sử dụng phương thức công cộng để lấy giá trị của privateVar
echo $obj->getPrivateVar();  // In ra "Private Variable"

// Sử dụng phương thức công cộng để gọi privateMethod
echo $obj->callPrivateMethod();  // In ra "This is a private method."

    
?>