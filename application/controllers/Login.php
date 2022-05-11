<?php
    class Login extends CI_Controller{

        private $qqr = "fihaosidhfurfkej63456rngeuugsouf@#452345ghiiortifgjkgnidfvgi,uihaodfguihnr,,uiaergoiir;gijzdfkkl;iasingiso;ionjafglulahnuihgadfknglivreisdkgpdf1200459468923jknefghk469ijfgn58wmr89 9825iknfg89n9mdfg9ndfb lulaksdgni930n234/;.@!@#$%¨&";

        public function __construct(){
            parent:: __construct();

            $this->load->model("LoginModel");

        }

        public function salvarregistro(){

            $num1 = rand (0,9);
            $num2 = rand (0,9);
            $num3 = rand (0,9);
            $num4 = rand (0,9);
            $num5 = rand (0,9);
            $num6 = rand (0,9);

            $chave = $num1 . '' . $num2 . '' . 
                     $num3 . '-' . $num4 . '' . 
                     $num5 . '' . $num6;



            $data = array(
                "email" => $_POST["email"],
                "usuario" => $_POST["usuario"],
                "chave" => $chave
            );

            //$this->load->model("LoginModel");
            $retorno = $this->LoginModel->registrar($data);

            if($retorno)
            $this->template->load("templates/adminTemp", "login/sucesso");
            else
                echo "Erro ao criar usuário";
        }

        public function registro(){
            $this->template->load("templates/adminTemp", "login/register");
        }

        public function registroHome(){
            $this->template->load("templates/adminRegister", "login/register");
        }


        public function RegistrarSenha(){
            $this->template->load("templates/adminTemp", "login/registrarsenha");
        }

        public function AlterarSenha(){
           
            $senha = md5($_POST["senha"] . $this->qqr);
            $email = $_POST["email"];
            $chave = $_POST["chave"];

            //$this->load->model("LoginModel");

            $retorno = $this->LoginModel->CriarSenha($email, $senha, $chave);

            if($retorno)
                $this->template->load("templates/adminTemp", "login/sucesso");
            else
                echo "Erro ao cadastrar senha.";
        }

        public function Index(){
            $this->template->load("templates/adminLogin", "login/login");
        }

        public function ValidaLogin(){
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $senha = md5($senha . $this->qqr);

            //$this->load->model("LoginModel");

            $retorno = $this->LoginModel->ValidaLogin($email, $senha);

            if($retorno){
            $_SESSION["barba"] = array(
                "email" => $email,
            );
                header('location: /produto');
            }else{
                header('location: /login');
            }
        }

        public function alterar(){
            $this->load->model("UsuarioModel");

            $id = $_GET["codigo"];

            $retorno = $this->UsuarioModel->buscarId($id);
            
            $data = array(
                "titulo"=>"Alteração de usuario",
                "user" =>$retorno[0]
            );

            $this->template->load("templates/adminTemp","login/formAlterar", $data);

        }

        public function Deslogar(){
            unset($_SESSION);
            header('location: /login');
        }

    }

?>