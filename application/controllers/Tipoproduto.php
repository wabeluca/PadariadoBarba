<?php

    class Tipoproduto extends CI_Controller {

        public function __construct(){
            parent::__construct();

            
            if(!isset($_SESSION["barba"])){
                echo "Você precisa estar logado";
                header("location: /login");
            }
            
        }

        public function index() {
            $this->load->model("TipoProdutoModel");

            $tipo = $this->TipoProdutoModel->selecionarTodos();
            $tabela = "";
            
            foreach ($tipo as $item ) {
                $tabela = $tabela . "<tr>";
                if( isset($_SESSION["barba"])){
                    $tabela = $tabela . "
                            <td style='cursor: pointer'>
                                <a href='/tipoproduto/alterar?codigo=" . $item->id . "'>
                                ✏️
                                </a>
                                <a href='/tipoproduto/excluir?codigo=" . $item->id . "'>
                                ❌
                                </a>
                            </td>";
                }

                        $tabela = $tabela . "
                            <td>" . $item->nome_tipo ."</td>
                        </tr>
                    ";
                }

            $data = array(
                "lista_produtos" => $tipo,
                "tabela" => $tabela,
                "titulo" => "Voce esta em padaria do barba",
            );

            $this->template->load("templates/adminTemp", "tipoproduto/index.php", $data);
        }

        public function novo() {

            $nome_tipo = $_POST['nome_tipo'];


            $data = array(
                "nome_tipo" => $nome_tipo,

            );

            $this->load->model("TipoProdutoModel");
            $this->TipoProdutoModel->inserir($data);

        }

        public function alterar(){
            $this->load->model("TipoProdutoModel");

            $id = $_GET["codigo"];

            $retorno = $this->TipoProdutoModel->buscarId($id);
            
            $data = array(
                "titulo"=>"Alteração de veiculo",
                "produto" =>$retorno[0],
            );

            $this->template->load("templates/adminTemp","tipoproduto/formAlterar", $data);

        }

        public function salvarAlteracao(){
            $this->load->model("TipoProdutoModel");

            $id = $_POST["id"];
            $nome_tipo = $_POST["nome_tipo"];

            $retorno = $this->TipoProdutoModel->salvarAlteracao(
                $id, $nome_tipo);

            if($retorno == true){
                header('location: /tipoproduto');
            }
            else{
                echo "houve erro na alteração";
            }

        }

        public function formNovo() {
            if( isset($_SESSION["barba"])){


                $this->template->load("templates/adminTemp", "tipoproduto/formnovo");
            }
            else{
                header("location: /tipoproduto");
            }
        }


        public function salvarNovo(){
            $this->load->model("TipoProdutoModel");

            $nome_tipo = $_POST["nome_tipo"];


            $retorno = $this->TipoProdutoModel->buscarProduto($nome_tipo);

            //var_dump($_POST);

            
            if( $retorno[0]->total >0 ){
                echo "Falha ao incluir, o produto ja está cadastrado";
            } else {
                $retorno = $this->TipoProdutoModel->salvarNovo(
                    $nome_tipo
                );
                header("location: /tipoproduto");
            }
            
        }

        public function excluir(){
            $this->load->model("TipoProdutoModel");

            $id = $_GET["codigo"];

            $this->TipoProdutoModel->excluir($id);

            header("location: /tipoproduto");
        }

    }

?>