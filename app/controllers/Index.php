<?php

class Index extends SController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $this->load->view('header');

        $data = array();
        $table = "post";
        $postModel = $this->load->model("PostModel");
        $data['allpost'] = $postModel->getAllPost($table);
        $this->load->view("content", $data);
        $this->load->view('sidebar');
        $this->load->view('footer');
    }
    public function postDetails($id){
        $this->load->view('header');
        $data = array();
        $tablePost = "post";
        $tableCat = "category";
        $postModel = $this->load->model("PostModel");
        $data['postbyid'] = $postModel->getPostById($tablePost, $tableCat, $id);
        $this->load->view("details", $data);
        $this->load->view('sidebar');
        $this->load->view('footer');
    }
    public function postByCat(){

    }

}

?>