<?php
abstract Class Dao {
    protected function getConexao() {
        $str_con = "host=localhost port=5432 dbname=bdmeta user=postgres password=postgres";
        $conexao = pg_connect($str_con);
        if (!$conexao) {
            throw 'conexão com BD falhou!';
            pg_close($conexao);
        }
        return $conexao;
    }
    abstract public function inserir($meta);
    abstract public function excluir($id);
    abstract public function busca($id);
    abstract public function lista($limit, $offset);
    abstract public function altera($meta);
}
?>