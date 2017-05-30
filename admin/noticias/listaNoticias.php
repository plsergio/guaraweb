<?php

require '../../inc/configuration.php';

if(!isset($_SESSION['usuario'])) header("Location: ../index.php?erro=1");

$sql = new Sql();

$data = $sql->select("select * from noticias order by idnoticias DESC");
$noticias = array();
$contador = 0;
foreach ($data as $noticia) {
    // $noticias[$contador]['imagem'] = $noticia['imagem'];
    $noticias[$contador]['titulo'] = $noticia['titulo'];
    $noticias[$contador]['id'] = $noticia['idnoticias'];
    // $noticias[$contador]['conteudo'] = $noticia['conteudo'];
    $contador = $contador + 1;
}
?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<title>Área Administrativa</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>

	<body>

		  <?php include_once("../principal/menu.php");?>

			<div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Notícias</h1>
	      </div>

        <form class="form-horizontal" action="" method="post">

          <div class="panel panel-default">
            <div class="panel-body">
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="primeiroDestaque" class="control-label">Adicionar Nova Notícia: </label>
                  <a class="btn btn-primary" href="noticias.php?id=" role="button">+</a>
                </div>
              </div>
            </div>
          </div>

          <table class="table table-hover">
            <tr>
              <!-- <th>Imagem</th> -->
              <th>Título</th>
              <th>Ação</th>
            </tr>

            <?php
            for ($i=0; $i < count($noticias) ; $i++) {
            ?>

                <tr>
                  <!-- <td><php echo  $noticias[$i]['imagem']?></td> -->
                  <td><?php echo  $noticias[$i]['titulo']?></td>
                  <td>
                    <a class="btn btn-default btn-sm btn-warning" href="noticias.php?id=<?php echo  $noticias[$i]['id']?>" role="button">Alterar</a>
                    <a class="btn btn-default btn-sm btn-danger" href="acaoNoticia.php?acao=deletar&id=<?php echo  $noticias[$i]['id']?>" role="button">Deletar</a>
                  </td>
                </tr>

              <?php
              }
              ?>

          </table>


        </form>

	      <div class="clearfix"></div>

		</div>


	    </div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>
