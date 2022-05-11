<?php

    class Produto extends CI_Controller {

        public function __construct(){
            parent::__construct();

            
            if(!isset($_SESSION["barba"])){
                echo "Você precisa estar logado";
                header("location: /login");
            }
            
        }

        public function index() {
            $this->load->model("ProdutoModel");

            $produtos = $this->ProdutoModel->selecionarTodos();
            $tabela = "";
            
            foreach ($produtos as $item ) {
                $tabela = $tabela . "<tr>";
                if( isset($_SESSION["barba"])){
                    $tabela = $tabela . "
                            <td style='cursor: pointer'>
                                <a href='/produto/alterar?codigo=" . $item->id . "'>
                                ✏️
                                </a>
                                <a href='/produto/excluir?codigo=" . $item->id . "'>
                                ❌
                                </a>
                            </td>";
                }

                        $tabela = $tabela . "
                            <td>" . $item->nome ."</td>
                            <td>" . $item->perecivel ."</td>
                            <td>" . $item->tipo ."</td>
                            <td>" . $item->valor ."</td>
                            <td>
                                <img src='" . $item->imagem . "' style='width: 100px' />
                            </td>
                        </tr>
                    ";
                }

            $data = array(
                "lista_produtos" => $produtos,
                "tabela" => $tabela,
                "titulo" => "Voce esta em padaria do barba",
            );

            $this->template->load("templates/adminTemp", "produto/index.php", $data);
        }

        public function novo() {

            $nome = $_POST['nome'];
            $perecivel = @$_POST['perecivel'];
            $tipo_produto = $_POST['tipo_produto'];
            $valor = $_POST['valor'];


            $data = array(
                "nome" => $nome,
                "perecivel" => $perecivel,
                "tipo_produto" => $tipo_produto,
                "valor" => $valor
            );

            $this->load->model("ProdutoModel");
            $this->produtomodel->inserir($data);

        }

        public function alterar(){
            $this->load->model("ProdutoModel");

            $id = $_GET["codigo"];

            $retorno = $this->ProdutoModel->buscarId($id);
            
            $data = array(
                "titulo"=>"Alteração de veiculo",
                "produto" =>$retorno[0],
                "opcoes" => $this->montaTipos($retorno[0]->tipo_produto)
            );

            $this->template->load("templates/adminTemp","produto/formAlterar", $data);

        }

        public function salvarAlteracao(){
            $this->load->model("ProdutoModel");

            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $perecivel = $_POST["perecivel"];
            $tipo_produto = $_POST["tipo_produto"];
            $valor = $_POST["valor"];
            $imagem = $_POST["imagem"];

            $retorno = $this->ProdutoModel->salvarAlteracao(
                $id, $nome, $perecivel, $tipo_produto, $valor, $imagem
            );

            if($retorno == true){
                header('location: /produto');
            }
            else{
                echo "houve erro na alteração";
            }

        }

        public function formNovo() {
            if( isset($_SESSION["barba"])){

                $opcao = $this->montaTipos(0);

                $data = array(
                    'opcoes' => $opcao
                );

                $this->template->load("templates/adminTemp", "produto/formnovo", $data);
            }
            else{
                header("location: /produto");
            }
        }

        private function montaTipos( $idTipo ){
            $this->load->model("TipoProdutoModel");
            $tipo = $this->TipoProdutoModel->selecionarTodos();

            $option = "";
            
            foreach($tipo as $linha){
                $selecionado = "";

                if ($idTipo == $linha->id)
                    $selecionado = "selected";
                $option .= "<option 
                                value='" . $linha->id . "'
                                " . $selecionado . "
                            >" 
                                . $linha->nome_tipo . 
                            " </option>";            
                    }

            return $option;
        }

        public function salvarNovo(){
            $this->load->model("ProdutoModel");

            $nome = $_POST["nome"];
            $perecivel = $_POST["perecivel"];
            $tipo_produto = $_POST["tipo_produto"];
            $valor = $_POST["valor"];
            $imagem = $_POST["imagem"];

            $retorno = $this->ProdutoModel->buscarProduto($nome);

            //var_dump($_POST);

            
            if( $retorno[0]->total >0 ){
                echo "Falha ao incluir, o produto ja está cadastrado";
            } else {
                $retorno = $this->ProdutoModel->salvarNovo(
                    $nome, $perecivel, $tipo_produto, $valor, $imagem
                );
                header("location: /produto");
            }
            
        }

        public function excluir(){
            $this->load->model("ProdutoModel");

            $id = $_GET["codigo"];

            $this->ProdutoModel->excluir($id);

            header("location: /produto");
        }

    }

?>