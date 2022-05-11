<?php 
    class UsuarioModel extends CI_Model{

        public function selecionarTodos(){
            $dados = $this->db->query("SELECT * FROM usuario")->result();

            return $dados;
        }

        public function inserir($dados){
            try{
                $this->db->insert('usuario', $dados);
                return true;
            }
            catch (Exception $ex){
                return false;
            }
        }

        public function excluir($id){
            $sql="DELETE FROM usuario WHERE id =" . $id;
            $this->db->query($sql);
            return true;
        }

        public function salvarnovo($email, $usuario, $senha ){
            $sql = "INSERT INTO usuario (email, usuario, senha)
                    VALUES
                    ('" . $email . "'),
                    ('" . $usuario . "'),
                    ('" . $senha . "')
            ";

            $this->db->query($sql);

            return true;
        }

        public function buscarId($id){
            $retorno = $this->db->query("SELECT * FROM usuario WHERE id=" . $id);
            return $retorno->result();
        }

        public function buscarUser($email){
            $sql = "SELECT COUNT(1) as total FROM usuario WHERE email='" . $email . "'";

            $retorno = $this->db->query($sql)->result();

            return $retorno;
        }

        public function salvarAlteracao( $id, $email, $usuario, $senha ){
            $sql = "UPDATE usuario
                    SET
                    email = '" . $email . "',
                    usuario = '" . $usuario . "',
                    senha = '" . $senha . "'
                    WHERE id= " . $id . "
                ";

            $this->db->query( $sql );

            return true;
        }
    }
?>