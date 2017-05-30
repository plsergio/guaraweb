<?php

session_start();


$usuario 	= $_POST['usuario'];
$senha 		= $_POST['senha'];

$resultado_id = 1;

if($resultado_id){


	if(($usuario == 'admin') && ($senha == 'franciscoxavier')){


		$_SESSION["usuario"]	= $usuario;
		$_SESSION["email"]		= "contato@guaraweb.com";
		// echo "entrou";
		header("Location: principal/home.php");

	} else {
		header("Location: index.php?erro=1");
	}


} else {
	echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
}

// erro: false
// resource

?>
