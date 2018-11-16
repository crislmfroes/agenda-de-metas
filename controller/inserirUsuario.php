<?php
include_once('../model/usuariodao.php');
var_dump($_POST);
$usuario = new Usuario($_POST['nome'], $_POST['email']);
$usuario->setCpf($_POST['cpf']);
$usuariodao = new UsuarioDao();
$usuariodao->inserir($usuario);
header('../view/telaInserirMeta.php');
?>