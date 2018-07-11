<?php
class Category extends SController{
    public function __construct()
    {
        parent::__construct();
    }
    public function categoryList(){
        $data = array();
        $table = "category";
        $catModel = $this->load->model("CatModel");
        $data['cat'] = $catModel->catList($table);
        $this->load->view("category" , $data);
    }
    public function catById(){
        $data = array();
        $table = "category";
        $id = 3 ;
        $catModel = $this->load->model("CatModel");
        $data['cat'] = $catModel->catById($table, $id);
        $this->load->view("catById" , $data);
    }
    public function addcategory(){
        $this->load->view("addcategory");
    }
    public function insertCategory(){
        $table = "category";
        $name = $_REQUEST['name'];
        $title = $_REQUEST['title'];
        $data = array(
            'name' => $name,
            'title' => $title
        );
        $catModel = $this->load->model("CatModel");
        $result = $catModel->insertCat($table , $data);
        $mdata = array();
        if($result==1){
            $mdata['msg'] = "Category added sucessfully....";
        }
        else{
            $mdata['msg'] = "Category not added";
        }
        $this->load->view("addcategory", $mdata);
    }


}
?>