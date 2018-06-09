<?php 

    class Product extends CI_Controller{

        function __construct()
        {
            parent::__construct();
            $this->load->model("product_model");
        }

        function index()
        {

            $this->load->library("pagination"); // load library pagination
            $page = isset($_GET["page"]) ? $_GET["page"] : 1; // ini adalah halaman

            // bagian untuk mengetahui jumlah data dalam suatu table =========
            $strcount = "SELECT count(product_id) as 'count' FROM product_tbl";
            $q2 = $this->db->query($strcount);
            $jml_data = $q2->row_array();
            // ================================================================
            $limit = 9; // menampilkan jumlah data per halaman
            $start = ($page - 1) * $limit; // rumus mengetahui start data
            //print_r($jml_data);

            $config['base_url'] = base_url('index.php/product');
            $config['total_rows'] = $jml_data['count'];
            $config['per_page'] = $limit;
            $config['page_query_string'] = TRUE; // set jadi query string
            $config["use_page_numbers"] = TRUE; // memunculkan halaman real
            $config['query_string_segment'] = 'page'; //query sting

             // setting tampilan page number 
             $config["full_tag_open"] = "<nav class='float-left'><ul class='pagination'>";
             $config["full_tag_close"] = "</ul></nav>";
 
             $config["next_link"] = "&gt;";
             $config["next_tag_open"] = "<li class='page-item'>";
             $config["next_tag_close"] = "</li>";
 
             $config["prev_link"] = "&lt;";
             $config["prev_tag_open"] = "<li class='page-item'>";
             $config["prev_tag_close"] = "</li>";
 
             $config["cur_tag_open"] = "<li class='page-item active disabled'>
             <a class='page-link'> ";
             $config["cur_tag_close"] = "</a></li>";
 
             $config['attributes'] = array('class' => 'page-link');
 
             $this->pagination->initialize($config);

             $data["page_number"] = $this->pagination->create_links();

             // all data 
            $data["product"] = $this->product_model->product_list_limit($start,$limit); // list data product
            
            $this->load->view("product",$data);
        }

        function search()
        {
          
            $keyword = $this->input->post("keyword");

            if(empty($keyword))
            {
                redirect("index.php/product");
                exit;
            }

             // all data 
            $data["product"] = $this->product_model->search_product($keyword); // list data product
            $data["page_number"] = "";
            $data["keyword"] = $keyword;

            $this->load->view("product",$data);
        }

    }