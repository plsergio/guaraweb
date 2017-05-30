<?php

$titulo 	= $_POST['titulo'];
$descricao 	= $_POST['descricao'];
$link 	= $_POST['link'];

$acao 	= $_GET['acao'];
$id 	= $_GET['id'];

require '../../inc/configuration.php';

	if($acao == 'salvar'){
      $sql = new Sql();
      $sql->query(("insert into eventos (titulo,descricao,link) values('$titulo','$descricao','$link')"));
			header("Location: listaEventos.php");
  }

	if($acao == 'alterar'){
      $sql = new Sql();
      $sql->query(("UPDATE `eventos` SET `titulo` = '$titulo', `descricao` = '$descricao', `link` = '$link' WHERE `id` = '$id'"));
      header("Location: listaEventos.php");
  }

	if($acao == 'deletar'){
      $sql = new Sql();
      $sql->query(("delete from eventos where id = '$id'"));
      header("Location: listaEventos.php");
  }
?>
