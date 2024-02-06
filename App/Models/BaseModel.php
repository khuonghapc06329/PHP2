<?php

namespace App\Models;

use App\Interfaces\CrudInterface;
use App\Models\Database;
use PDO;

abstract class BaseModel implements CrudInterface
{

    protected $table;


    private $_connection;

    private $_query;

    public function __construct()
    {
        $this->_connection = new Database();
    }

    public function getAll()
    {
        $this->_query = "SELECT * FROM $this->table ";

        // return $this;

        $stmt   = $this->_connection->PdO()->prepare($this->_query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllUser(array $data)
    {
        $this->_query = "SELECT * FROM $this->table WHERE username = :username AND password = :password";

        $stmt = $this->_connection->PdO()->prepare($this->_query);

        // Bind parameters
        $stmt->bindParam(':username', $data['username'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function isUsernameExists($data)
    {
        $this->_query = "SELECT * FROM $this->table WHERE username = :username";

        $stmt = $this->_connection->PdO()->prepare($this->_query);

        // Bind parameters
        $stmt->bindParam(':username', $data['username'], PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Phương thức kiểm tra xem email đã tồn tại hay chưa
    public function isEmailExists($data)
    {
        $this->_query = "SELECT * FROM $this->table WHERE email = :email";

        $stmt = $this->_connection->PdO()->prepare($this->_query);

        // Bind parameters
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getOne(int $id)
    {
        $this->_query = "SELECT * FROM $this->table WHERE id=$id";

        $stmt   = $this->_connection->PdO()->prepare($this->_query);


        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function create(array $data)
    {
        $this->_query = "INSERT INTO $this->table (";
        foreach ($data as $key => $value) {
            $this->_query .= "$key, ";
        }
        $this->_query = rtrim($this->_query, ", ");

        $this->_query .=   " ) VALUES (";
        foreach ($data as $key => $value) {
            $this->_query .= "'$value', ";
        }
        $this->_query = rtrim($this->_query, ", ");

        $this->_query .= ")";

        $stmt = $this->_connection->PdO()->prepare($this->_query);

        return $stmt->execute();
        // return $stmt;
    }
    public function update(int $id, array $data)
    {
        // $data=[
        //     'name'=> $name,
        //     'status'=> $status,
        //     'description'=> $description
        // ];

        // $this->_query = "UPDATE $this->table SET name='$name',status='$status' WHERE id=$id";


        // tạo câu truy vấn
        $this->_query = "UPDATE $this->table SET ";
        foreach ($data as $key => $value) {
            $this->_query .= "$key = '$value', ";
        }
        $this->_query = rtrim($this->_query, ", ");

        $this->_query .= " WHERE id=$id";

        //    $sql .= " WHERE ";
        //    foreach ($conditions as $key => $value) {
        //        $sql .= "$key = :$key AND ";
        //    }
        //    $sql = rtrim($sql, "AND ");

        // chuẩn bị câu truy vấn
        $stmt = $this->_connection->PdO()->prepare($this->_query);

        // bind các giá trị
        // foreach ($data as $key => $value) {
        //     $stmt->bindValue(":$key", $value);
        // }
        //    foreach ($conditions as $key => $value) {
        //        $stmt->bindValue(":$key", $value);
        //    }

        // return $stmt;
        // thực hiện câu truy vấn
        return $stmt->execute();
        // return $this->_query;
    }
    public function delete(int $id): bool
    {
        $this->_query = "DELETE FROM $this->table WHERE id=$id";

        $stmt   = $this->_connection->PdO()->prepare($this->_query);
        $stmt->execute();
        $affected_rows = $stmt->rowCount();
        return $affected_rows;
    }


    // public function orderBy(string $order = 'ASC')
    // {
    //     $this->_query = $this->_query . "order by " . $order;

    //     return $this;
    // }

    // public function get()
    // {
    //     $stmt   = $this->_connection->PdO()->prepare($this->_query);
    //     $stmt->execute();

    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }


    // public function limit(int $limit = 10)
    // {
    //     $stmt   = $this->_connection->PdO()->prepare($this->_query);
    //     $result = $stmt->execute();

    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }
    public function getAllUserLogin(array $data)
    {
        $this->_query = "SELECT * FROM $this->table WHERE username = ? AND password = ? ";

        // return $this;

        $stmt   = $this->_connection->PdO()->prepare($this->_query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllToken(array $data)
    {
        $this->_query = "SELECT * FROM $this->table WHERE email = :email";

        $stmt = $this->_connection->PdO()->prepare($this->_query);

        // Bind parameters
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function token($newToken, $emailExists)
    {
        $this->_query = "UPDATE $this->table SET token = ? WHERE email = ?";
        $stmt = $this->_connection->PdO()->prepare($this->_query);

        // Bind parameters
        $stmt->bindParam(1, $newToken, PDO::PARAM_STR);
        $stmt->bindParam(2, $emailExists, PDO::PARAM_STR);

        // Execute the statement
        $stmt->execute();

        // If you want to fetch results, you can use fetch or fetchAll
        // In this case, fetchAll is used
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function RetrievalPass($password, $token, $email)
    {
        // Cập nhật mật khẩu mới
        $updatePasswordQuery = "UPDATE $this->table SET password = ? WHERE token = ?";
        $stmt = $this->_connection->PdO()->prepare($updatePasswordQuery);

        // Bind parameters
        $stmt->bindParam(1, $password, PDO::PARAM_STR);
        $stmt->bindParam(2, $token, PDO::PARAM_STR);
        $stmt->execute();

        // Đặt giá trị token thành null
        $updateTokenQuery = "UPDATE $this->table SET token = null WHERE email = ?";
        $stmt = $this->_connection->PdO()->prepare($updateTokenQuery);

        // Bind parameters
        $stmt->bindParam(1, $email, PDO::PARAM_STR);
        $stmt->execute();

        // Chuyển hướng sau khi cập nhật mật khẩu và token
    }
}
