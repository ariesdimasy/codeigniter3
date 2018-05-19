<?php
    // Admin/Product
    class Product extends CI_Controller{
        
        function __construct()
        {
            parent::__construct();
            $this->load->model("product_model"); // load model 
        }

        function index()
        {
            $data["content"] = "admin/product/product";
            $data["product"] = $this->product_model->product_list();
            $this->load->view("Admin/index",$data);
        }

        // FORM INSERT PRODUCT
        function product_insert()
        {
            $data["content"] = "admin/product/product_insert";
            $this->load->view("Admin/index",$data);
        }

        function insert_process()
        {
            /*
                Array ( 
                [product_title] => SDCZXCzxc 
                [price] => 234532432 
                [stock] => 21 
                [product_desc] => asdASFSGDFAGFGAFDDG ) 
            */
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $this->load->library("form_validation");

                $product_title = $this->input->post("product_title"); // $_POST["product_title"]
                $price         = $this->input->post("price");
                $stock         = $this->input->post("stock");
                $product_desc  = $this->input->post("product_desc");

                $this->form_validation->set_rules("product_title","Product Title","required");
                $this->form_validation->set_rules("price","Price","required|numeric");
                $this->form_validation->set_rules("stock","Stock","required|numeric");
                $this->form_validation->set_rules("product_desc","Product Description","required");
                
                if($this->form_validation->run() === true)
                {
                    // process insert 
                    $arr = array(
                        "product_title"=>$product_title,
                        "price"=>$price,
                        "stock"=>$stock,
                        "product_desc"=>$product_desc,

                        "image"=>"",
                        "create_date"=>date("Y-m-d H:i:s"),
                        "ip_address"=>$this->input->ip_address(),
                        "user_agent"=>$this->input->user_agent()
                    );

                    $this->product_model->product_insert($arr);

                    redirect("index.php/admin/product");
                }
                else
                {
                    
                }
            }
            else
            {
                echo "<h1> 404 Not found </h1>";
            }
        }
    }