<?php
include_once('metadao.php');
$metadao = new MetaDao();
$usuariodao = new UsuarioDao();
#inserir
$meta = new Meta('Meta 1', 'Meta Template', 1, new DateTime('2018-07-18'));
$usuario = new Usuario('Cris Lima Froes', 'cris.lima.froes@gmail.com');
$usuario->setCpf('11111111111');
$usuariodao->inserir($usuario);
$meta->setUsuario($usuario);
$metadao->inserir($meta);
#excluir
$metadao->excluir($meta->getId());
#buscar
$metadao->inserir($meta);
var_dump($metadao->busca($meta->getId()));
#listar
var_dump($metadao->lista(100, 0));
#alterar
$meta->setDescricao('Qualquer coisa!');
$metadao->altera($meta);
var_dump($metadao->busca($meta->getId()));
?>