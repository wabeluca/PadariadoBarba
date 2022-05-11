<?php

    class ProdutoModel extends CI_Model {

        public function selecionarTodos() {
            //SELECT * FROM veiculo

            $retorno = $this->db->query("
            SELECT 
            P.*,
            T.nome_tipo AS tipo
            FROM produto AS P
            INNER JOIN tipo_produto AS T
            	ON T.id = P.tipo_produto");
            return $retorno->result();
        }

        public function selecionarWhere( $clausula ) {
            //SELECT * FROM veiculo WHERE modelo LIKE '%Fusca%'
        }

        public function buscarId($id){
            $retorno = $this->db->query("SELECT * FROM produto WHERE id=" . $id);
            return $retorno->result();
        }

        public function buscarProduto($nome){
            $sql = "SELECT COUNT(1) as total FROM produto WHERE nome='" . $nome . "'";

            $retorno = $this->db->query($sql)->result();

            return $retorno;
        }

        public function salvarAlteracao( $id, $nome, $perecivel, $tipo_produto, $valor, $imagem ){
            $sql = "UPDATE produto
                    SET
                        nome = '" . $nome . "',
                        perecivel = " . $perecivel . ",
                        tipo_produto = '" . $tipo_produto ."',
                        valor = " . $valor . ",
                        imagem = '" . $imagem . "'
                    WHERE id= " . $id . "
                ";

            $this->db->query( $sql );

            return true;
        }

        public function salvarnovo($nome, $perecivel, $tipo_produto, $valor, $imagem ){
            $sql = "INSERT INTO produto (nome, perecivel, tipo_produto, valor, imagem)
                    VALUES
                    ('" . $nome . "', " . $perecivel . " ,'" . $tipo_produto . "', " .  $valor . " ,'" . $imagem . "')
            ";

            $this->db->query($sql);

            return true;
        }

        public function excluir($id){
            $sql="DELETE FROM produto WHERE id =" . $id;
            $this->db->query($sql);
            return true;
        }
    }
?>