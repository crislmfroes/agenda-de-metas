<?php
include_once('../model/metadao.php');
include_once('../model/usuariodao.php');
var_dump($_POST);
$meta = new Meta($_POST['nome'], $_POST['descricao'], (integer) $_POST['prioridade'], new DateTime());
$usuariodao = new UsuarioDao();
$usuario = $usuariodao->busca($_POST['cpf']);
$meta->setUsuario($usuario);
$metadao = new MetaDao();
$metadao->inserir($meta);
header('../view/telaInserirMeta.php');
?>