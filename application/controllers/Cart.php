<?php 

    class Cart extends CI_Controller{

        function __construct()
        {
            parent::__construct();

            $this->load->library("cart");
            $this->load->model("product_model");
        }

        function index()
        {
            $data = array();
            $this->load->view("cart",$data);
        }

        function test()
        {
            foreach($this->cart->contents() as $item)
            {
                print_r($item);
            }
            
        }

        function add($product_id)
        {
            if(!empty($product_id))
            {
               
                $product_detail = $this->product_model->product_detail($product_id);
               

                $data = array(
                    'id'      => $product_detail['product_id'],
                    'qty'     => 1,
                    'price'   => $product_detail['price'],
                    'name'    => $product_detail['product_title']
                    //'options' => array('Size' => 'L', 'Color' => 'Red')
                );

                $this->cart->insert($data);

                redirect("index.php/cart");

            }else{
                show_404();
            }
           
        }

        function update()
        {
            $qty = $this->input->post("qty");
            $rowid = $this->input->post("rowid");
            $data = array();

            for($i = 0; $i < count($qty); $i++)
            {
                array_push($data,array(
                    
                    "rowid"=>$rowid[$i],
                    "qty"=>$qty[$i]

                ));
            }

            $this->cart->update($data);

            redirect("index.php/cart");
        }

        function delete($rowid)
        {
            $data = array(
                    
                "rowid"=>$rowid,
                "qty"=>0

            ); 

            $this->cart->update($data);
            redirect("index.php/cart");

        }

        function checkout()
        {
            $this->load->model("order_model");
            $email_sess = $this->session->userdata("email");
            if(!empty($email_sess))
            {
                // order 
                $order = array(
                    "user_id"=>$this->session->userdata("user_id"),
                    "total"=>$this->cart->total()
                );

                $this->order_model->insert_order($order);

                // order detail 
                foreach($this->cart->contents() as $items )
                {
                    $order_detail = array(
                        "product_id"=>$items["id"],
                        "price"=>$items["price"], 
                        "qty"=>$items["qty"],
                        "subtotal"=>$items["subtotal"]
                    );

                    $this->order_model->insert_order_detail($order_detail);
                }
                
                exit(" back ..");
                $this->cart->destroy();

                redirect("index.php/product");
            }else
            {
                redirect("index.php/auth/login");
            }
        }


    }