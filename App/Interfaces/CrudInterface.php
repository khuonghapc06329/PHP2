<?php

namespace App\Interfaces;

interface CrudInterface
{

    /**
     * Phương thức getAll() dùng để lấy tất cả records
     */
    public function getAll();

    /**
     * Phương thức getOne() dùng để lấy một record
     * @param int $id
     * @return array $record
     */
    public function getOne(int $id);

    /**
     * Phương thức create dùng để tạo mới dữ liệu
     * @return mixed
     */
    public function create(array $data);


    public function update(int $id, array $data);

    public function delete(int $id): bool;

    public function getAllUser(array $data);
    public function getAllToken(array $data);
    public function token($newToken, $emailExists);
    public function RetrievalPass($password, $token, $email);
}
