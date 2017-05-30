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
	        <h1>Eventos</h1>
	      </div>

        <div class="panel panel-default">
          <div class="panel-body">
            <div class="form-group">
              <div class="col-sm-12">
                <label for="primeiroDestaque" class="control-label">Adicionar Novo Evento: </label>
                <a class="btn btn-primary" href="edicaoEventos.php?id=" role="button">+</a>
              </div>
            </div>
          </div>
        </div>

        <table class="table table-hover">
          <tr>
            <!-- <th>Imagem</th> -->
            <th>Título</th>
            <th>Descrição</th>
            <th>LINK</th>
            <th>AÇÕES</th>
          </tr>

          <?php

          $data = $sql->select("select * from eventos order by id DESC");

          foreach ($data as $eventos) {
          ?>
              <tr>
                <td><?php echo  $eventos['titulo']?></td>
                <td><?php echo  $eventos['descricao']?></td>
                <td><?php echo  $eventos['link']?></td>
                <td>
                  <a class="btn btn-default btn-sm btn-warning" href="edicaoEventos.php?id=<?php echo  $eventos['id']?>" role="button">Alterar</a>
                  <a class="btn btn-default btn-sm btn-danger" href="eventosDao.php?acao=deletar&id=<?php echo  $eventos['id']?>" role="button">Deletar</a>
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
