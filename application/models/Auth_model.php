<?php

    class Auth_model extends CI_Model{

        function login_process($email,$password)
        {
            $this->db->where("email",$email);
            $this->db->where("password",$password);
            return $this->db->get("customer_tbl")->row_array();
        }

    }