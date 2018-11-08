<?php
include_once('metadao.php');
$meta = new Meta($_POST['nome'], $_POST['descricao'], (integer) $_POST['prioridade']);
$meta->setId((integer) $_POST['id']);
$metadao = new MetaDao();
$metadao->inserir($meta);
header('http://localhost:8080/telaform.html');
?>