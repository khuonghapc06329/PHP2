<?php

namespace App\Models;



class Category extends BaseModel
{

    protected $table = 'categories';


    public function getAllCategory()
    {
        return $this->getAll();
    }
    public function getOneCategory($id)
    {
        return $this->getOne($id);
    }

    public function updateCategory($id, $data)
    {
        return $this->update($id, $data);
    }
    public function deleteCategory($id)
    {
        return $this->delete($id);
    }


    public function createCategory($data)
    {
        return $this->create($data);
    }
}
