<?php

require '../../inc/configuration.php';

if(!isset($_SESSION['usuario'])) header("Location: ../index.php?erro=1");

$sql = new Sql();
?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Área Administrativa</title>
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>

	<body>

		<?php include_once("../principal/menu.php");?>


			<div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Estilos Musicais</h1>
	      </div>

        <div class="panel panel-default">
          <div class="panel-body">
            <div class="form-group">
              <div class="col-sm-12">
                <label for="primeiroDestaque" class="control-label">Adicionar Novo Estilo Musical: </label>
                <a class="btn btn-primary" href="edicaoEstiloMusical.php?id=" role="button">+</a>
              </div>
            </div>
          </div>
        </div>


        <!-- *************** estilos principais ************** -->
        <div class="panel panel-primary">
          <div class="panel-heading">ESTILOS PRINCIPAIS</div>
        </div>
        <table class="table table-hover">
          <tr>
            <!-- <th>Imagem</th> -->
            <th>IdEstiloMusical</th>
            <th>Título</th>
            <th>Classificação</th>
            <th>Ordem</th>
            <th>Ações</th>
          </tr>

          <?php

          $data = $sql->select("select * from estilosMusicais where classificacao='principal' order by ordem  ASC;");

          foreach ($data as $destaques) {
          ?>
              <tr>
                <td><?php echo  $destaques['idEstiloMusical']?></td>
                <td><?php echo  $destaques['titulo']?></td>
                <td><?php echo  $destaques['classificacao']?></td>
                <td><?php echo  $destaques['ordem']?></td>
                <td>
                  <a class="btn btn-default btn-sm btn-warning" href="edicaoEstiloMusical.php?id=<?php echo  $destaques['idEstiloMusical']?>" role="button">Alterar</a>
                  <a class="btn btn-default btn-sm btn-danger" href="acaoEstiloMusical.php?acao=deletar&id=<?php echo  $destaques['idEstiloMusical']?>" role="button">Deletar</a>
                </td>
              </tr>
          <?php
          }
          ?>

        </table>

				<!-- *************** estilos secundario	 ************** -->
        <div class="panel panel-primary">
          <div class="panel-heading">ESTILOS SECUNDÁRIOS</div>
        </div>
        <table class="table table-hover">
          <tr>
            <!-- <th>Imagem</th> -->
            <th>IdEstiloMusical</th>
            <th>Título</th>
            <th>Classificação</th>
            <th>Ordem</th>
            <th>Ações</th>
          </tr>

          <?php

          $data = $sql->select("select * from estilosMusicais where classificacao='secundario' order by ordem  ASC;");

          foreach ($data as $destaques) {
          ?>
              <tr>
                <td><?php echo  $destaques['idEstiloMusical']?></td>
                <td><?php echo  $destaques['titulo']?></td>
                <td><?php echo  $destaques['classificacao']?></td>
                <td><?php echo  $destaques['ordem']?></td>
                <td>
                  <a class="btn btn-default btn-sm btn-warning" href="edicaoEstiloMusical.php?id=<?php echo  $destaques['idEstiloMusical']?>" role="button">Alterar</a>
                  <a class="btn btn-default btn-sm btn-danger" href="acaoEstiloMusical.php?acao=deletar&id=<?php echo  $destaques['idEstiloMusical']?>" role="button">Deletar</a>
                </td>
              </tr>
          <?php
          }
          ?>

        </table>

				<!-- *************** estilos especial ************** -->
        <div class="panel panel-primary">
          <div class="panel-heading">ESTILOS ESPECIAIS</div>
        </div>
        <table class="table table-hover">
          <tr>
            <!-- <th>Imagem</th> -->
            <th>IdEstiloMusical</th>
            <th>Título</th>
            <th>Classificação</th>
            <th>Ordem</th>
            <th>Ações</th>
          </tr>

          <?php

          $data = $sql->select("select * from estilosMusicais where classificacao='especial' order by ordem  ASC;");

          foreach ($data as $destaques) {
          ?>
              <tr>
                <td><?php echo  $destaques['idEstiloMusical']?></td>
                <td><?php echo  $destaques['titulo']?></td>
                <td><?php echo  $destaques['classificacao']?></td>
                <td><?php echo  $destaques['ordem']?></td>
                <td>
                  <a class="btn btn-default btn-sm btn-warning" href="edicaoEstiloMusical.php?id=<?php echo  $destaques['idEstiloMusical']?>" role="button">Alterar</a>
                  <a class="btn btn-default btn-sm btn-danger" href="acaoEstiloMusical.php?acao=deletar&id=<?php echo  $destaques['idEstiloMusical']?>" role="button">Deletar</a>
                </td>
              </tr>
          <?php
          }
          ?>

        </table>


	      <div class="clearfix"></div>

		</div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



	</body>
</html>
