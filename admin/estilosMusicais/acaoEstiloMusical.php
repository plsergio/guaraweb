<?php

$titulo 	= $_POST['titulo'];
$classificacao 	= $_POST['classificacao'];
$ordem 	= $_POST['ordem'];

$acao 	= $_GET['acao'];
$id 	= $_GET['id'];

require '../../inc/configuration.php';

	if($acao == 'salvar'){
			$id 	= $_POST['id'];
      $sql = new Sql();
      $sql->query(("insert into estilosMusicais (idEstiloMusical,titulo,classificacao,ordem) values('$id','$titulo','$classificacao','$ordem')"));
      header("Location: estilosMusicais.php");
  }

	if($acao == 'alterar'){
      $sql = new Sql();
      $sql->query(("UPDATE `estilosMusicais` SET `idEstiloMusical` = '$id', `titulo` = '$titulo', `classificacao` = '$classificacao', `ordem` = '$ordem' WHERE `estilosMusicais`.`idEstiloMusical` = '$id'"));
      header("Location: estilosMusicais.php");
  }

	if($acao == 'deletar'){
      $sql = new Sql();
      $sql->query(("delete from estilosMusicais where idEstiloMusical = '$id'"));
      header("Location: estilosMusicais.php");
  }
?>
