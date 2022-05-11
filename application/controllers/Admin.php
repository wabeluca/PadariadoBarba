<?php
    class Login extends CI_Controller{

        public function __construct(){
            parent::__construct();
    
            
            if(!isset($_SESSION["barba"])){
                echo "Você precisa estar logado";
                header("location: admin/login");
            }
            
        }
        
    
        public function index()
        {
            // $this->load->view('welcome_message');
            $this->template->load('templates/adminTemp', 'index.html');
        }

        public function produto(){
            
        }
    }
