<?php

class Category extends SController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function categoryList()
    {
        $data = array();
        $table = "category";
        $catModel = $this->load->model("CatModel");
        $data['cat'] = $catModel->catList($table);
        $this->load->view("category", $data);
    }

    public function catById()
    {
        $data = array();
        $table = "category";
        $id = 3;
        $catModel = $this->load->model("CatModel");
        $data['cat'] = $catModel->catById($table, $id);
        $this->load->view("catById", $data);
    }

    public function addcategory()
    {
        $this->load->view("addcategory");
    }

    public function insertCategory()
    {
        $table = "category";
        $name = $_REQUEST['name'];
        $title = $_REQUEST['title'];
        $data = array(
            'name' => $name,
            'title' => $title
        );
        $catModel = $this->load->model("CatModel");
        $result = $catModel->insertCat($table, $data);
        $mdata = array();
        if ($result == 1) {
            $mdata['msg'] = "Category added sucessfully....";
        } else {
            $mdata['msg'] = "Category not added";
        }
        $this->load->view("addcategory", $mdata);
    }
    public function updateCategory()
    {
        $table = "category";
        $id = 6;
        $catModel = $this->load->model("CatModel");
        $data = array();
        $data['catById'] = $catModel->catById($table, $id);
        $this->load->view("catupdate" ,$data);
    }

    public function updateCat()
    {
        $table = "category";
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $title = $_REQUEST['title'];
        $data = array(
            'name' => $name,
            'title' => $title
        );
        $cond = "id=$id";
        $catModel = $this->load->model("catModel");
        $result = $catModel->updateCat($table, $data, $cond);
        $mdata = array();
        if ($result == 1) {
            $mdata['msg'] = "Category updated sucessfully....";
        } else {
            $mdata['msg'] = "Category not updated";
        }
        $this->load->view("catupdate" ,$mdata);
    }

    public function deleteCatById()
    {
        $table = "category";
        $cond = "id=1";
        $catModel = $this->load->model("catModel");
        $catModel->delCatById($table, $cond);
    }
}

?>