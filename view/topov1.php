<?php

$menuRadio = array();
$menuRadio[0]['id'] = "agora";
$menuRadio[0]['titulo'] = "Ouça Agora";
$menuRadio[0]['ordem'] =0;
$menuRadio[0]['classificacao'] = "principal";

$menuRadio[1]['id'] = "genteDeCasa";
$menuRadio[1]['titulo'] = "Gente de Casa";
$menuRadio[1]['ordem'] =0;
$menuRadio[1]['classificacao'] = "principal";

$menuRadio[2]['id'] = "mpb";
$menuRadio[2]['titulo'] = "MPB";
$menuRadio[2]['ordem'] = 1;
$menuRadio[2]['classificacao'] = "principal";


$menuRadio[3]['id'] = "gospel";
$menuRadio[3]['titulo'] = "Gospel";
$menuRadio[3]['ordem'] =0;
$menuRadio[3]['classificacao'] = "principal";


$menuRadio[4]['id'] = "sertanejo";
$menuRadio[4]['titulo'] = "Sertanejo";
$menuRadio[4]['ordem'] =0;
$menuRadio[4]['classificacao'] = "principal";

$menuRadio[5]['id'] = "flashBack";
$menuRadio[5]['titulo'] = "Flash Back";
$menuRadio[5]['ordem'] = 2;
$menuRadio[5]['classificacao'] = "secundario";

$menuRadio[6]['id'] = "popRockNacional";
$menuRadio[6]['titulo'] = "Pop Rock Nacional";
$menuRadio[6]['ordem'] = 4;
$menuRadio[6]['classificacao'] = "secundario";

$menuRadio[7]['id'] = "popRockInternacional";
$menuRadio[7]['titulo'] = "Pop Rock Internacional";
$menuRadio[7]['ordem'] = 4;
$menuRadio[7]['classificacao'] = "secundario";

$menuRadio[8]['id'] = "dance";
$menuRadio[8]['titulo'] = "Dance";
$menuRadio[8]['ordem'] = 3;
$menuRadio[8]['classificacao'] = "secundario";

$menuRadio[9]['id'] = "jazzBlues";
$menuRadio[9]['titulo'] = "Jazz Blues";
$menuRadio[9]['ordem'] = 5;
$menuRadio[9]['classificacao'] = "secundario";

$menuRadio[10]['id'] = "cantoria";
$menuRadio[10]['titulo'] = "Cantoria";
$menuRadio[10]['ordem'] = 5;
$menuRadio[10]['classificacao'] = "secundario";

$menuRadio[11]['id'] = "70s";
$menuRadio[11]['titulo'] = "70's";
$menuRadio[11]['ordem'] = 7;
$menuRadio[11]['classificacao'] = "secundario";

$menuRadio[12]['id'] = "80s";
$menuRadio[12]['titulo'] = "80's";
$menuRadio[12]['ordem'] = 8;
$menuRadio[12]['classificacao'] = "secundario";

$menuRadio[13]['id'] = "90s";
$menuRadio[13]['titulo'] = "90's";
$menuRadio[13]['ordem'] = 8;
$menuRadio[13]['classificacao'] = "secundario";

$menuRadio[14]['id'] = "newAge";
$menuRadio[14]['titulo'] = "New Age";
$menuRadio[14]['ordem'] = 6;
$menuRadio[14]['classificacao'] = "secundario";

$menuRadio[15]['id'] = "motocross";
$menuRadio[15]['titulo'] = "Motocross";
$menuRadio[15]['ordem'] = 9;
$menuRadio[15]['classificacao'] = "especial";

$menuRadio[16]['id'] = "festaJunina";
$menuRadio[16]['titulo'] = "Festa Junina";
$menuRadio[16]['ordem'] = 10;
$menuRadio[16]['classificacao'] = "especial";

$menuPrincipal = array();
$menuSecundario = array();
$menuEspecial = array();
$playListJS = array();


for ($i=0; $i < count($menuRadio) ; $i++) {

    // sort($menuRadio);
    $playListJS[$i] = $menuRadio[$i]['id'];

    if ($menuRadio[$i]['classificacao'] == "principal"){
      if ($i == 0){
        $menuPrincipal[0] = "<li id='" . $menuRadio[0]['id'] . "' class='active menuClick'><a href='#'>" . $menuRadio[0]['titulo'] . " <span class='sr-only'>(current)</span></a></li>";
      } else {
        $menuPrincipal[$i] = "<li id='" . $menuRadio[$i]['id'] . "' class='menuClick'><a href='#'>" .$menuRadio[$i]['titulo']. "</a></li>";
      }
    }

    if ($menuRadio[$i]['classificacao'] == "secundario"){
      $menuSecundario[$i] = "<li id='" . $menuRadio[$i]['id'] . "' class='menuClick'><a href='#'>" .$menuRadio[$i]['titulo']. "</a></li>";
    }

    if ($menuRadio[$i]['classificacao'] == "especial"){
      $menuEspecial[$i] = "<li id='" . $menuRadio[$i]['id'] . "' class='menuClick'><a href='#'>" .$menuRadio[$i]['titulo']. "</a></li>";
    }

}

function populaPlayListPHP($playListJS){
  echo "<div id='arrayPlayListPhp'  style='display:none;'>";
  echo json_encode($playListJS);
  echo "</div>";
}

populaPlayListPHP($playListJS);
 ?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/radioGuaraWeb.css">
    <link rel="stylesheet" href="css/topo.css">
    <link rel="stylesheet" href="http://codeseven.github.io/toastr/">
    <!-- <link type="text/css" rel="stylesheet" href="inc/jQuery-my-instagram-gallery-master/my-instagram-gallery.css" />
    <link type="text/css" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"/> -->


    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.css"> -->
    <!-- My instagram gallery -->
    <!-- <link type="text/css" rel="stylesheet" href="inc/jQuery-my-instagram-gallery-master/my-instagram-gallery.css" /> -->
    <!-- Fancybox -->
    <!-- <link type="text/css" rel="  stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"/> -->



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Rádio Guará Web</title>
  </head>
  <body>
    <header>
        <div id="fundoMenu"></div>
        <div class="container">
            <div class="container bg_radio">

              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-9">
                <div>
                  <img src="img/logo.png" alt="#" class=" logo img-responsive"/>
                </div>
              </div>

              <div class="menuRadio">
                <nav id="navRadio" class="navbar navbar-default navbar-right">
                  <div class="container-fluid">

                    <div id="listaMusicasPHP"></div>
                    <!-- <div id="listaMusicasPHP" style="display:none;"></div> -->

                    <div class="navbar-header">
                      <button id="navbarRadio" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#listaMenu" aria-expanded="false">
                        <!-- <span> * Escolha sua Rádio *</span> -->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <!-- <a class="navbar-brand" href="#">Rádio: Jass &amp; Blues</a> -->
                    </div>
                    <div class="collapse navbar-collapse" id="listaMenu" >
                      <ul class="nav navbar-nav">
                        <?php
                        foreach ($menuPrincipal as $mprincipal) {
                          echo $mprincipal;
                        }
                        ?>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mais Estilos <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <?php
                            foreach ($menuSecundario as $mSecund) {
                              echo $mSecund;
                            }
                            ?>

                            <li role="separator" class="divider"></li>
                            <li><a href="#">Especiais</a></li>
                            <li role="separator" class="divider"></li>
                            <?php
                            foreach ($menuEspecial as $mEsp) {
                              echo $mEsp;
                            }
                            ?>
                          </ul>
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
              </div><!-- /.Fim Menu Rádio -->

              <div class="container showMusica">
                <div>
                  <span id="nome_musica" class="visible-lg visible-md visible-sm"></span>
                  <span class="visible-lg visible-md">(</span>
                  <span id="tempo_atual" class="visible-lg visible-md"> 00:00:00-</span>
                  <span class="visible-lg visible-md">/</span>
                  <span id="tempo_total" class="visible-lg visible-md">00:00:00</span>
                  <span class="visible-lg visible-md">)</span>
                </div>
              </div>


              <!-- <audio id="playAudio"> -->
              <audio id="playAudio" autoplay="autoplay">
                seu navegador não suporta HTML5
              </audio>

              <div class="container controleRadio">
                <div class="col-lg-7 col-md-7 col-xs-12">
                  <button type="button" class="btn btn-primary-outline controles" id="btn-voltar" aria-label="Left Align">
                    <!-- <span class="glyphicon glyphicon-backward" aria-hidden="true"></span> -->
                    <span class="glyphicon glyphicon-backward visible-lg visible-md visible-sm" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-primary-outline controles" id="btn-play-pause" aria-label="Left Align">
                    <span class="glyphicon glyphicon-pause  visible-lg visible-md" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-play visible-sm visible-xs" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-primary-outline controles" id="btn-avancar" aria-label="Left Align">
                    <!-- <span class="glyphicon glyphicon-forward" aria-hidden="true"></span> -->
                    <span class="glyphicon glyphicon-forward visible-lg visible-md visible-sm" aria-hidden="true"></span>
                  </button>
                </div>
                <div class="col-lg-5 col-md-5 col-xs-12 visible-lg visible-md">
                  <div class="col-lg-4 col-md-4">
                    <button id="btnVolume" type="button" class="btn btn-primary-outline controles" aria-label="Left Align">
                      <span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                    </button>
                  </div>
                  <div class="col-lg-8 col-md-8">
                    <input type="range" id="volume" min="0" max="1" step="0.01" value="1">
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="menuPrincipal">
          <div class="container">
            <nav class="navbar navbarMenuPrincipal container">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" id="btnNavbarMnPrinc" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#listaMenuPrincipal" aria-expanded="false">
                    <!-- <span class="sr-only">Toggle navigation</span> -->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">
                      <span id="btnHome" class="glyphicon glyphicon-home" aria-hidden="true"></span>
                  </a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="listaMenuPrincipal">
                  <ul class="nav navbar-nav">
                    <li id="aRadio"><a href="#">A Rádio</a></li>
                    <li id="minhaSatelite"><a href="#">Minha Satélite</a></li>
                    <li id="eventos"><a href="#">Eventos</a></li>
                    <li id="galeria"><a href="#">Galeria</a></li>
                    <li id="contatos"><a href="#">Contatos</a></li>
                  </ul>
                  <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                      <input type="pesquisa" class="form-control" placeholder="Pesquisar...">
                      <button id="btnPesquisar" type="submit" class="btn btn-default visible-lg visible-md">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                      </button>
                    </div>
                  </form>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>

          </div>
        </div>

    </header>
