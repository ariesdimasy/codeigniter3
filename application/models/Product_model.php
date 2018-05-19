<?php 

    class Product_model extends CI_Model{
        
        function product_list()
        {
            return $this->db->get("product_tbl")->result_array();
        }

        function product_insert($arr)
        {
            $field = array(
                "product_title" =>$arr["product_title"],
                "price"         =>$arr["price"],
                "stock"         =>$arr["stock"],
                "product_desc"  =>$arr["product_desc"],
                "create_date"   =>$arr["create_date"],
                "ip_address"    =>$arr["ip_address"],
                "user_agent"    =>$arr["user_agent"]
            );

            return $this->db->insert("product_tbl",$field);
        }
        
    }