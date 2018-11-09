<?php
class Usuario {
    private $cpf;
    private $nome;
    private $email;

    public function Usuario($cpf, $nome, $email) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}
?>