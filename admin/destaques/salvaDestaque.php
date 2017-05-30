<?php

$primeiroDestaque 	= $_POST['primeiroDestaque'];
$segundoDestaque 	= $_POST['segundoDestaque'];
$terceiroDestaque 	= $_POST['terceiroDestaque'];

require '../../inc/configuration.php';

$sql = new Sql();
$sql->query(("update destaques set imagem ='$primeiroDestaque' where iddestaques =1"));
$sql->query(("update destaques set imagem ='$segundoDestaque' where iddestaques =2"));
$sql->query(("update destaques set imagem ='$terceiroDestaque' where iddestaques =3"));
header("Location: destaques.php");
?>
