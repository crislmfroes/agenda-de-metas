<?php
include_once('usuario.php');
class UsuarioDao {

    private function getConexao() {
        $str_con = "host=localhost port=5432 dbname=bdmeta user=postgres password=postgres";
        $conexao = pg_connect($str_con);
        if (!$conexao) {
            throw 'conexão com BD falhou!';
            pg_close($conexao);
        }
        return $conexao;
    }

    public function inserir($usuario) {
        $vetor = array($usuario->getCpf(), $usuario->getNome(), $usuario->getEmail());
        $sql = "INSERT INTO usuario (cpf, nome, email) VALUES ($1, $2, $3)";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);
    }

    public function excluir($id) {
        $vetor = array($id);
        $sql = "DELETE FROM usuario WHERE cpf=$1";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);
    }

    public function busca($id) {
        $vetor = array($id);
        $sql = "SELECT * FROM usuario WHERE cpf=$1";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $assoc = pg_fetch_assoc($res);
        $usuario = new Usuario($assoc['nome'], $assoc['email']);
        $usuario->setCpf($assoc['cpf']);
        pg_close($con);
        return $usuario;
    }

    public function lista($limit, $offset) {
        $vetor = array($limit, $offset);
        $sql = "SELECT * FROM usuario LIMIT $1 OFFSET $2";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $usuarios = array();
        while ($assoc = pg_fetch_assoc($res)) {
            $usuario = new Usuario($assoc['nome'], $assoc['email']);
            $usuario->setCpf($assoc['cpf']);
            array_push($usuarios, $usuario);
        }
        pg_close($con);
        return $usuarios;
    }

    public function altera($usuario) {
        $vetor = array($usuario->getCpf(), $usuario->getNome(), $usuario->getEmail());
        $sql = "UPDATE usuario SET nome=$2, email=$3 WHERE cpf=$1";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);
    }
}
?>