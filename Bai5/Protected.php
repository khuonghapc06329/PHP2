<?php
/* Protected là  Các thành viên được đặt là protected chỉ có thể được truy
 cập từ bên trong class và các class con kế thừa từ nó. */
class Example {
    protected $protectedVar;

    protected function protectedMethod() {
        return "Đây là phương pháp sử dụng Protected.";
    }
    
}

class SubExample extends Example {
    public function accessProtected() {
        // Gán giá trị cho protectedVar từ class con
        $this->protectedVar = "Protected Variable";

        // Gọi protectedMethod từ class con
        $result = $this->protectedMethod();

        return $result;
    }

    // Phương thức công cộng để lấy giá trị của protectedVar
    public function getProtectedVar() {
        return $this->protectedVar;
    }
}

// Tạo một đối tượng của class con
$subObj = new SubExample();

// Gọi phương thức accessProtected từ class con
$resultFromSub = $subObj->accessProtected();

// Sử dụng phương thức công cộng để lấy giá trị của protectedVar
echo $subObj->getProtectedVar();  // In ra "Protected Variable"
echo $resultFromSub;  // In ra "This is a protected method."
?>