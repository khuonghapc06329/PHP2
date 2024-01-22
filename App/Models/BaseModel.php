<?php

namespace App\Models;

use App\Interfaces\ModelInterface;

abstract class BaseModel implements ModelInterface
{
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
    }

    public function create(array $data)
    {
        // Implementation for create

    }

    public function getOne($id, $condition)
    {
        echo '<pre>';
        echo 'Hiển thị thông tin hoặc chạy code trong hàm được gọi ở trang index ';
        echo '</pre>';
    }

    public function update($id, array $data)
    {
        // Implementation for update
    }

    public function getAll()
    {
        // Implementation for getAll
    }

    public function delete($id)
    {
        // Implementation for delete
    }
}
