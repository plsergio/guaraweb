<?php
$id 	= $_GET['id'];

require '../../inc/configuration.php';

if(!isset($_SESSION['usuario'])) header("Location: ../index.php?erro=1");

if ($id == ""){
	$titulo = "";
	$descricao = "";
	$link = "";
} else {
	$sql = new Sql();
	$data = $sql->select("select * from eventos where id = '$id'");
	$titulo = $data[0]['titulo'];
	$descricao = $data[0]['descricao'];
	$link = $data[0]['link'];
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
					<?php
						if ($id == ""){
					?>
	        			<h1>Novo Evento</h1>
					<?php
						}else{
					?>
								<h1>Alterar Evento</h1>
					<?php
						}
					?>
	      </div>

				<?php
					if ($id == ""){
				?>
							<form class="form-horizontal" action="eventosDao.php?acao=salvar" method="post">
				<?php
					}else{
				?>
							<form class="form-horizontal" action="eventosDao.php?id=<?php echo $id ?>&acao=alterar" method="post">
				<?php
					}
				?>
					<div class="panel panel-default">
						<div class="panel-body">
						  <div class="form-group">
								<!-- <img src="https://www.instagram.com/p/<php echo  $destaques[0]?>/media/?size=m" for="primeiroDestaque" class="col-sm-2 control-label" alt="" /> -->
						    <div class="col-sm-10">

									<label for="primeiroDestaque" class="control-label">Título</label>
						      <input type="text" class="form-control" name="titulo" value="<?php echo  $titulo?>">

									<label for="primeiroDestaque" class="control-label">Descrição</label>
									<input type="text" class="form-control" name="descricao" value="<?php echo  $descricao?>">

									<label for="primeiroDestaque" class="control-label">LINK</label>
									<input type="text" class="form-control" name="link" value="<?php echo  $link?>">
						    </div>
              </div>
            </div>

						<?php
							if ($id == ""){
						?>
									<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
						<?php
							}else{
						?>
									<button type="submit" class="btn btn-primary btn-lg btn-block">Alterar</button>
						<?php
							}
						?>



				</form>

	      <div class="clearfix"></div>

		</div>


	    </div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>
