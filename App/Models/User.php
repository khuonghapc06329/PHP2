<?php

namespace App\Models;



class User extends BaseModel
{

    protected $table = 'users';


    public function getAllUserLogin($data)
    {
        return $this->getAllUser($data);
    }
    public function createUser($data)
    {
        return $this->create($data);
    }
    public function checkEmail($data)
    {
        return $this->isEmailExists($data);
    }

    public function checkUsername($data)
    {
        return $this->isUsernameExists($data);
    }
    public function toKenCreate($newToken, $emailExists)
    {
        return $this->token($newToken, $emailExists);
    }
    public function RetrievalPassword($password, $token, $email)
    {
        return $this->RetrievalPass($password, $token, $email);
    }
}
