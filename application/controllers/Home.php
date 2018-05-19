<?php 

    class Home extends CI_Controller{
        function __construct()
        {
            parent::__construct();
        }

        function index()
        {
            $data["title"] = "Home";
            $this->load->view("home",$data);
        }

        function baseurl()
        {
            echo base_url("assets");
        }
    }