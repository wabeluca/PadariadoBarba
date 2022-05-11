<?php

    class Usuario extends CI_Controller {
        
        public function __construct(){
            parent::__construct();

            
            if(!isset($_SESSION["barba"])){
                echo "Você precisa estar logado";
                header("location: /login");
            }
            
        }

        private $qqr = "fihaosidhfurfkej63456rngeuugsouf@#452345ghiiortifgjkgnidfvgi,uihaodfguihnr,,uiaergoiir;gijzdfkkl;iasingiso;ionjafglulahnuihgadfknglivreisdkgpdf1200459468923jknefghk469ijfgn58wmr89 9825iknfg89n9mdfg9ndfb lulaksdgni930n234/;.@!@#$%¨&";

        public function index() {
            $this->load->model("UsuarioModel");

            $usuario = $this->UsuarioModel->selecionarTodos();
            $tabela = "";
            
            foreach ($usuario as $item ) {
                $tabela = $tabela . "<tr>";
                if( isset($_SESSION["barba"])){
                    $tabela = $tabela . "
                            <td style='cursor: pointer'>
                                <a href='/login/alterar?codigo=" . $item->id . "'>
                                ✏️
                                </a>
                                <a href='/usuario/excluir?codigo=" . $item->id . "'>
                                ❌
                                </a>
                            </td>";
                }

                        $tabela = $tabela . "
                            <td>" . $item->email ."</td>
                            <td>" . $item->usuario ."</td>
                            <td>" . $item->senha ."</td>

                        </tr>
                    ";
                }

            $data = array(
                "lista_usuario" => $usuario,
                "tabela" => $tabela,
                "titulo" => "Voce esta em padaria do barba",
            );

            $this->template->load("templates/adminTemp", "usuario/index.php", $data);
        }


        

        public function formNovo() {
            if( isset($_SESSION["barba"])){


                $this->template->load("templates/adminTemp", "usuario/formnovo");
            }
            else{
                header("location: /usuario");
            }
        }

        public function salvarNovo(){
            $this->load->model("UsuarioModel");

            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];

            $retorno = $this->UsuarioModel->buscarUser($email);

            //var_dump($_POST);

            
            if( $retorno[0]->total >0 ){
                echo "Falha ao incluir, o produto ja está cadastrado";
            } else {
                $retorno = $this->Usuario->salvarNovo($email, $usuario, $senha);
                header("location: /Usuario");
            }
            
        }

        public function excluir(){
            $this->load->model("UsuarioModel");

            $id = $_GET["codigo"];

            $this->UsuarioModel->excluir($id);

            header("location: /usuario");
        }

        public function salvarAlteracao(){
            $this->load->model("UsuarioModel");

            $id = $_POST["id"];
            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = md5($_POST["senha"] . $this->qqr);


            $retorno = $this->UsuarioModel->salvarAlteracao( $id, $email, $usuario, $senha);

            if($retorno == true){
                header('location: /usuario');
            }
            else{
                echo "houve erro na alteração";
            }

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

            $this->load->model("LoginModel");
            $retorno = $this->LoginModel->registrar($data);

            if($retorno)
            $this->template->load("templates/adminSucesso", "registro/sucesso");
            else
                echo "Erro ao criar usuário";
        }

        public function RegistrarSenha(){
            $this->template->load("templates/adminCadastro", "registro/cadastro");
        }
        
        public function AlterarSenha(){
           
            $senha = md5($_POST["senha"] . $this->qqr);
            $email = $_POST["email"];
            $chave = $_POST["chave"];

            //$this->load->model("LoginModel");

            $retorno = $this->LoginModel->CriarSenha($email, $senha, $chave);

            if($retorno)
                $this->template->load("templates/adminFinalizado", "registro/sucesso");
            else
                echo "Erro ao cadastrar senha.";
        }


    }

?>