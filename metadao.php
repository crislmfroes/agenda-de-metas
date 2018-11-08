<?php
include_once('meta.php');
class MetaDao {

    private function getConexao() {
        $str_con = "host=localhost port=5432 dbname=bdmeta user=postgres password=postgres";
        $conexao = pg_connect($str_con);
        if (!$conexao) {
            throw 'conexão com BD falhou!';
            pg_close($conexao);
        }
        return $conexao;
    }

    public function inserir($meta) {
        $vetor = array($meta->getId(), $meta->getNome(), $meta->getDescricao(), $meta->getPrioridade(), $meta->getData(), $meta->getUsuario()->getId());
        $sql = "INSERT INTO Meta (id, nome, descricao, prioridade, dataPrevisao, idUsuario) VALUES ($1, $2, $3, $4, $5, $6)";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);
    }

    public function excluir($id) {
        $vetor = array($id);
        $sql = "DELETE FROM Meta WHERE id=$1";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);
    }

    public function busca($id) {
        $vetor = array($id);
        $sql = "SELECT * FROM Meta WHERE id=$1";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $assoc = pg_fetch_assoc($res);
        $meta = new Meta($assoc['nome'], $assoc['descricao'], $assoc['prioridade']);
        $meta->setId($assoc['id']);
        pg_close($con);
        return $meta;
    }

    public function lista($limit, $offset) {
        $vetor = array($limit, $offset);
        $sql = "SELECT * FROM Meta LIMIT $1 OFFSET $2";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $metas = array();
        while ($assoc = pg_fetch_assoc($res)) {
            $meta = new Meta($assoc['nome'], $assoc['descricao'], $assoc['prioridade'], $assoc['data'], $assoc['idUsuario']);
            $meta->setId($assoc['id']);
            array_push($metas, $meta);
        }
        pg_close($con);
        return $metas;
    }

    public function altera($meta) {
        $vetor = array($meta->getId(), $meta->getNome(), $meta->getDescricao(), $meta->getPrioridade(), $meta->getData(), $meta->getUsuario()->getId());
        $sql = "UPDATE Meta SET nome=$2, descricao=$3, prioridade=$4 dataPrevisao=$5 idUsuario=$6 WHERE id=$1";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);
    }
}
?>