<?php
$id 	= $_GET['id'];

require '../../inc/configuration.php';

if(!isset($_SESSION['usuario'])) header("Location: ../index.php?erro=1");

if ($id == ""){
	$titulo = "";
	$classificacao = "";
	$ordem = "";
} else {
	$sql = new Sql();
	$data = $sql->select("select * from estilosMusicais where idEstiloMusical = '$id'");
	$titulo = $data[0]['titulo'];
	$classificacao = $data[0]['classificacao'];
	$ordem = $data[0]['ordem'];
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
	        			<h1>Novo Estilo Musical</h1>
					<?php
						}else{
					?>
								<h1>Alterar Estilo Musical</h1>
					<?php
						}
					?>
	      </div>

				<?php
					if ($id == ""){
				?>
							<form class="form-horizontal" action="acaoEstiloMusical.php?acao=salvar" method="post">
				<?php
					}else{
				?>
							<form class="form-horizontal" action="acaoEstiloMusical.php?id=<?php echo $id ?>&acao=alterar" method="post">
				<?php
					}
				?>
					<div class="panel panel-default">
						<div class="panel-body">
						  <div class="form-group">
								<!-- <img src="https://www.instagram.com/p/<php echo  $destaques[0]?>/media/?size=m" for="primeiroDestaque" class="col-sm-2 control-label" alt="" /> -->
						    <div class="col-sm-10">
                  <label for="primeiroDestaque" class="control-label">IdEstiloMusical</label>
                  <input type="text" class="form-control" name="id" value="<?php echo  $id?>">

									<label for="primeiroDestaque" class="control-label">Título</label>
						      <input type="text" class="form-control" name="titulo" value="<?php echo  $titulo?>">

									<label for="primeiroDestaque" class="control-label">Classificação</label>
									<select class="form-control" name="classificacao">
									  <option  value="principal" <?=($classificacao == 'principal')?'selected':''?>>Principal</option>
									  <option  value="secundario" <?=($classificacao == 'secundario')?'selected':''?>>Secundário</option>
									  <option  value="especial" <?=($classificacao == 'especial')?'selected':''?>>Especial</option>
									</select>

									<label for="primeiroDestaque" class="control-label">Ordem</label>
									<input type="text" class="form-control" name="ordem" value="<?php echo  $ordem?>">
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
