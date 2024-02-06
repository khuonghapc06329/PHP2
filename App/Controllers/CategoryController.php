<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\Category;

class CategoryController extends BaseController
{

    private $_renderBase;

    /**
     * Thuốc trị đau lưng
     * Copy lại là hết đau lưng
     * 
     */
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new BaseRender();
    }

    function index()
    {
        // dữ liệu ở đây lấy từ repositories hoặc model

        $category = new Category();
        $data = $category->getAllCategory();

        // $this->_renderBase->renderHeader();
        // $this->load->render('layouts/client/slider');
        $this->load->render('Admin/categories', $data);
        // $this->_renderBase->renderFooter();
    }

    function create()
    {
        // dữ liệu ở đây lấy từ repositories hoặc model


        // $this->_renderBase->renderHeader();
        // $this->load->render('layouts/client/slider');
        $this->load->render('Admin/categories');
        // $this->_renderBase->renderFooter();
    }
    function store()
    {
        if (isset($_POST['submit'])) {
            var_dump($_POST);

            $data = [
                'name' => $_POST['name'],
            ];

            $category = new Category();
            $result = $category->createCategory($data);
            var_dump($result);
            if ($result) {
                header('location: ' . ROOT_URL . '?url=CategoryController/index');
            } else {
                echo 'them loi';
            }
        } else {
            echo 'ko submit';
        }
    }

    function detail($id)
    {
        $category = new Category();
        $data = $category->getOneCategory($id);

        // dữ liệu ở đây lấy từ repositories hoặc model
        $this->load->render('Admin/update-categories', $data);
    }
    function update($id)
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $status = $_POST['status'];

            $data = [
                'name' => $name,
                'status' => $status,
            ];

            $category = new Category();

            $result = $category->updateCategory($id, $data);

            if ($result) {
                // $data = $category->getAllCategory();

                // $this->load->render('admin/category/index', $data);
                header('location: ' . ROOT_URL . '?url=CategoryController/index');
            } else {
                var_dump('khong cap nhat');
            }
        } else {
            var_dump('ko post');
        }
    }
    function delete($id)
    {
        $category = new Category();
        $data = $category->deleteCategory($id);

        // dữ liệu ở đây lấy từ repositories hoặc model
        // $this->load->render('admin/category/detail', $data);
        if ($data) {
            // $data = $category->getAllCategory();

            // $this->_renderBase->renderHeader();
            // $this->load->render('layouts/client/slider');
            // $this->load->render('admin/category/index', $data);
            header('location: ' . ROOT_URL . '?url=CategoryController/index');
        } else {
            echo 'Xoa loi';
        }
    }
}
