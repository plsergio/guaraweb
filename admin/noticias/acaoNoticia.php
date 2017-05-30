<?php

$titulo 	= $_POST['titulo'];
$conteudo 	= $_POST['conteudo'];
$imagem 	= $_POST['imagem'];

$acao 	= $_GET['acao'];
$id 	= $_GET['id'];

require '../../inc/configuration.php';

	if($acao == 'salvar'){
      $sql = new Sql();
			// $sql = "INSERT INTO `noticias`(`imagem`, `titulo`, `conteudo`) VALUES (\'www\',\'água\',\'água\')";
      $sql->query(("insert into noticias (titulo,imagem,conteudo) values('$titulo','$imagem','$conteudo')"));
      header("Location: listaNoticias.php");
  }

	if($acao == 'alterar'){
      $sql = new Sql();
      // echo "update noticias set titulo='$titulo',imagem='$imagem',conteudo='$conteudo' where idnoticias = $id";
      $sql->query(("update noticias set titulo='$titulo',imagem='$imagem',conteudo='$conteudo' where idnoticias = $id"));
      header("Location: listaNoticias.php");
  }

	if($acao == 'deletar'){
      $sql = new Sql();
      $sql->query(("delete from noticias where idnoticias = $id"));
      header("Location: listaNoticias.php");
  }
?>
