<?php 

    class Post extends CI_Controller{
        function __construct()
        {
            parent::__construct();
        }
        function index()
        {
            $data["title"] = "Post";
            $this->load->view("post",$data);
        }
    }