<?php

class Meta{
    private $id;
    private $nome;
    private $descricao;
    private $prioridade;
    private $data;
    private $usuario;

    public function __construct(string $nome, string $descricao, int $prioridade, DateTime $data){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->prioridade = $prioridade;
        $this->data = $data;
    }
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getPrioridade(){
        return $this->prioridade;
    }
    public function getData(){
        return $this->data;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function setDescricao(string $descricao){
        $this->descricao = $descricao;
    }
    public function setPrioridade(int $prioridade){
        if($prioridade>=1 && $prioridade<=5)
            $this->prioridade = $prioridade;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function setId(int $id){
        $this->id = $id;
    }
    public function setData(DateTime $data) {
        $this->data = $data;
    }
    public function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }
}


?>