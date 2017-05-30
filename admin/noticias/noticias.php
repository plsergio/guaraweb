<?php
$id 	= $_GET['id'];

require '../../inc/configuration.php';

if(!isset($_SESSION['usuario'])) header("Location: ../index.php?erro=1");

if ($id == ""){
	$imagem = "";
	$conteudo = "";
	$titulo = "";
} else {
	$sql = new Sql();
	$data = $sql->select("select * from noticias where idnoticias = $id;");
	$imagem = $data[0]['imagem'];
	$conteudo = $data[0]['conteudo'];
	$titulo = $data[0]['titulo'];
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
		<link rel="stylesheet" href="../../css/jquery-te-1.4.0.css">

	</head>

	<body>

      <?php include_once("../principal/menu.php");?>

			<div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
					<?php
						if ($id == ""){
					?>
	        			<h1>Nova Notícia</h1>
					<?php
						}else{
					?>
								<h1>Alterar Notícia</h1>
					<?php
						}
					?>
	      </div>

				<?php
					if ($id == ""){
				?>
							<form class="form-horizontal" action="acaoNoticia.php?acao=salvar" method="post">
				<?php
					}else{
				?>
							<form class="form-horizontal" action="acaoNoticia.php?id=<?php echo $id ?>&acao=alterar" method="post">
				<?php
					}
				?>
				<form class="form-horizontal" action="acaoNoticia.php?acao=salvar" method="post">

					<div class="panel panel-default">
						<div class="panel-body">
						  <div class="form-group">
								<!-- <img src="https://www.instagram.com/p/<php echo  $destaques[0]?>/media/?size=m" for="primeiroDestaque" class="col-sm-2 control-label" alt="" /> -->
						    <div class="col-sm-10">
                  <label for="primeiroDestaque" class="control-label">Url da Imagem</label>
                  <input type="text" class="form-control" name="imagem" value="<?php echo  $imagem?>">
									<label for="primeiroDestaque" class="control-label">Título</label>
						      <input type="text" class="form-control" name="titulo" value="<?php echo  $titulo?>">
						      <!-- <input type="text" class="jqte-test" name="titulo" value="<?php echo  $titulo?>"> -->
									<label for="primeiroDestaque" class="control-label">Conteúdo</label>
						      <textarea name="conteudo" class="form-control" rows="10"><?php echo  $conteudo?></textarea>
									<p>
				            <b>Para formatar o texto: </b>
				            <a href="https://html-online.com/editor/"  target="_blank">Clique Aqui</a><br>
				          </p>
						      <!-- <textarea name="conteudo" class="jqte-test"><?php echo  $conteudo?></textarea> -->
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
		<script src="../../js/jquery-te-1.4.0.min.js"></script>
    <!-- <script>
    	$('.jqte-test').jqte();

    	// settings of status
    	var jqteStatus = true;
    	$(".status").click(function()
    	{
    		jqteStatus = jqteStatus ? false : true;
    		$('.jqte-test').jqte({"status" : jqteStatus})
    	});
    </script> -->

	</body>
</html>
