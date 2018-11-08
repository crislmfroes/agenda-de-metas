<?php
include_once('metadao.php');
$metadao = new MetaDao();
#inserir
$meta = new Meta('Meta 1', 'Meta Template', 1);
$meta->setId(27);
$metadao->inserir($meta);
#excluir
$metadao->excluir(27);
#buscar
$metadao->inserir($meta);
var_dump($metadao->busca(27));
#listar
var_dump($metadao->lista(100, 0));
#alterar
$meta2 = new Meta('Meta 2', 'Meta Template 2', 2);
$meta2->setId(27);
$metadao->altera($meta2);
var_dump($metadao->busca(27));
?>