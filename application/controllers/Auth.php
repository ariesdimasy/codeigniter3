<?php 

    class Auth extends CI_Controller{

        function __construct()
        {
            parent::__construct();
            $this->load->model("auth_model");
        }

        function login()
        {
            $this->load->view("login");
        }

        function register()
        {   
            $this->load->view("register");
        }

        function test_session()
        {
            echo "name : ".$this->session->userdata("name");
            echo "<br> email : ".$this->session->userdata("email");
        }

        function logout()
        {
            $this->session->sess_destroy();

            redirect("index.php/product");
        }

        function login_process()
        {
            $this->load->library("form_validation");
            // 
            $email = $this->input->post("email");
            $password = $this->input->post("password");

            $this->form_validation->set_rules("email","Email","required|valid_email");
            $this->form_validation->set_rules("password","Password","required");

            if($this->form_validation->run() === true)
            {
                $password = md5($password);

                $customer = $this->auth_model->login_process($email,$password);

                if(!empty($customer))
                {
                     //session
                    $this->session->set_userdata("user_id",$customer["user_id"]);
                    $this->session->set_userdata('email',$email);
                    $this->session->set_userdata("name",$customer["name"]);

                    redirect("index.php/product");
                }else
                {
                    $data["err"] = "Your Email or Password are invalid";
                    $this->load->view("login",$data);
                }
               
            }
            else
            {

                $data["err"] = validation_errors();
                $this->load->view("login",$data);
            }


        }
    }