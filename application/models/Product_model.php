<?php 

    class Product_model extends CI_Model{
        
        function product_list()
        {
            return $this->db->get("product_tbl")->result_array();
            /*$str = "SELECT * FROM product_tbl";
            $q   = $this->db->query($str);
            $f   = $q->result_array();
            return $f;*/
        }

        function product_list_limit($start,$limit)
        {
            return $this->db->get("product_tbl",$limit,$start)->result_array();
        }

        function product_detail($product_id)
        {
            //return $this->db->get_where("product_tbl",array("product_id",$product_id))->row_array();
            $str = "SELECT * FROM product_tbl WHERE product_id = '$product_id'";
            $q   = $this->db->query($str);
            $f   = $q->row_array();
            return $f;
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

        function product_update($arr)
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

            $this->db->where("product_id",$arr["product_id"]);
            return $this->db->update("product_tbl",$field);
        }

        function delete_process($product_id)
        {
            $this->db->where("product_id",$product_id);
            return $this->db->delete("product_tbl");
        }

        function search_product($keyword)
        {
            $str  = "SELECT * FROM product_tbl WHERE   ";
            $str .= "product_title LIKE '%$keyword%'OR ";
            $str .= "product_desc LIKE '%$keyword%' OR ";
            $str .= "price LIKE '%$keyword%'           ";

            $q = $this->db->query($str);
            $f = $q->result_array();

            return $f;
        }
        
    }