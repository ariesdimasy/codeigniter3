<?php 

    class Contact extends CI_Controller{
        function __construct()
        {
            parent::__construct();
        }

        function index()
        {
            // passing data dari controller ke view
            $data["title"]  = "Contact";
            $data["name"]   = "Aries Dimas Yudhistira";
 
           $this->load->view("contact",$data);
        }

        function page()
        {
            echo "<h2> Page Contact </h2>";
            echo "<hr>";
        }
    }