<?php

    class Test extends CI_Controller{

        function __construct()
        {
            parent::__construct();
        }

        function index()
        {
            $this->load->view("test");
        }

        function contact()
        {
            $this->load->view("contact");
        }
    }