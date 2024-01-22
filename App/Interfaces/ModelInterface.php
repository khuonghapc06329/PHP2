<?php

namespace App\Interfaces;

interface ModelInterface
{
    // chứa các phương thức bắt buộc các hàm triển khai đều phải gọi (CRUD)
    public function create(array $data);
    public function getOne($id, $condition);
    public function getAll();
    public function update($id, array $data);
    public function delete($id);
}
