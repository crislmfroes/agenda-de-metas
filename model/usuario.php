<?php
class Usuario {
    private $cpf;
    private $nome;
    private $email;

    public function Usuario(string $nome, string $email) {
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

    public function setCpf(string $cpf) {
        if (strlen($cpf) === 11) {
            $this->cpf = $cpf;
        } else {
            throw new Exception('Cpf precisa ter 11 dígitos');
        }
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }
}
?>