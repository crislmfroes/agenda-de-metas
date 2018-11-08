<?php

class Meta{
    private $id;
    private $nome;
    private $descricao;
    private $prioridade;
    private $data;
    private $usuario;

    public function __construct($nome, $descricao, $prioridade, $data, $usuario){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->prioridade = $prioridade;
        $this->data = $data;
        $this->usuario = $usuario;
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
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function setPrioridade($prioridade){
        if($prioridade>=1 && $prioridade<=5)
            $this->prioridade = $prioridade;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setData($data) {
        $this->data = $data;
    }
    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
}


?>