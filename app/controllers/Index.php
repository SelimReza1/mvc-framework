<?php

class Index extends SController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $data = array();
        $table = "post";
        $postModel = $this->load->model("PostModel");
        $data['allpost'] = $postModel->getAllPost($table);
        $this->load->view("home", $data);
    }
    public function postDetails(){

    }

}

?>