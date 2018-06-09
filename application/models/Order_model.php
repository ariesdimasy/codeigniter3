<?php 

    class Order_model extends CI_Model{

        function insert_order($arr)
        {
            return $this->db->insert("order_tbl",$arr);
        }

        function insert_order_detail($arr)
        {
            return $this->db->insert("order_detail_tbl",$arr);
        }

    }