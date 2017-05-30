<?php

require '../../inc/configuration.php';

if(!isset($_SESSION['usuario'])) header("Location: ../index.php?erro=1");

$sql = new Sql();

$data = $sql->select("select * from destaques where selecionado = 'sim' order by iddestaques ASC;");
$destaques = array();
for ($i=0; $i < 3; $i++) {
    $destaques[$i] = $data[$i]['imagem'];
}
?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

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
	        <h1>Destaques</h1>
	      </div>

				<form class="form-horizontal" action="salvaDestaque.php" method="post">
					<div class="panel panel-default">
						<div class="panel-body">
						  <div class="form-group">
								<img src="https://www.instagram.com/p/<?php echo  $destaques[0]?>/media/?size=m" for="primeiroDestaque" class="col-sm-2 control-label" alt="" />
						    <div class="col-sm-10">
									<label for="primeiroDestaque" class="control-label">Primeiro Destaque</label>
						      <input type="text" class="form-control" name="primeiroDestaque" value="<?php echo  $destaques[0]?>">
						    </div>
						  </div>
					  </div>
				  </div>

					<div class="panel panel-default">
						<div class="panel-body">
						  <div class="form-group">
								<img src="https://www.instagram.com/p/<?php echo  $destaques[1]?>/media/?size=m" for="segundoDestaque" class="col-sm-2 control-label" alt="" />
						    <div class="col-sm-10">
									<label for="segundoDestaque" class="control-label">Segundo Destaque</label>
						      <input type="text" class="form-control" name="segundoDestaque" value="<?php echo  $destaques[1]?>">
						    </div>
						  </div>
					  </div>
				  </div>

					<div class="panel panel-default">
						<div class="panel-body">
						  <div class="form-group">
								<img src="https://www.instagram.com/p/<?php echo  $destaques[2]?>/media/?size=m" for="terceiroDestaque" class="col-sm-2 control-label" alt="" />
						    <div class="col-sm-10">
									<label for="terceiroDestaque" class="control-label">Terceiro Destaque</label>
						      <input type="text" class="form-control" name="terceiroDestaque" value="<?php echo  $destaques[2]?>">
						    </div>
						  </div>
					  </div>
				  </div>

					<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>

				</form>

	      <div class="clearfix"></div>

		</div>


	    </div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>
