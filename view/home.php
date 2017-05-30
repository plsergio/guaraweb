<?php include_once("instagramPHP.php");?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">

<?php

// $destaques[1] = "img/planetaRock.jpg";
// $destaques[0] = "https://www.instagram.com/p/BJULoaEgWjl/";
// $destaques[1] = "https://www.instagram.com/p/BJVvD-hAPDI/";
// $destaques[2] = "https://www.instagram.com/p/BI-6rGhAMNv/";



$sql = new Sql();

$data = $sql->select("select * from destaques where selecionado = 'sim' order by iddestaques desc;");
$destaques = array();
for ($i=0; $i < 3; $i++) {
    $destaques[$i] = $data[$i]['imagem'];
}
// $sql = new Sql();

$data = $sql->select("select * from noticias order by idnoticias DESC;");
$noticias = array();
$contador = 0;
foreach ($data as &$noticia) {
    $noticias[$contador]['imagem'] = $noticia['imagem'];
    $noticias[$contador]['titulo'] = $noticia['titulo'];
    $noticias[$contador]['conteudo'] = $noticia['conteudo'];
    $contador = $contador + 1;
}

// $noticias[0]['imagem'] = "https://www.instagram.com/p/BJURAvzA325/";
// $noticias[0]['titulo'] = "k-libre Release";
// $noticias[0]['conteudo'] = "
// A experiência tensa e agressiva trazida por Muse foi o ponto de partida para dar forma ao conteúdo dramático das letras.<br>
// A partir dessa primeira influência, a ideia foi fazer o percurso trilhado pelo trio inglês. <br>
// A referência mais próxima foi encontrada em Radiohead, o vocal chorado e melodioso, junto ao caráter experimental da banda, trouxe os primeiros elementos que compõem a base sonora, cênica e literária do projeto K-Libre. Depois de alcançada a dramaticidade que traduz a angústia teatral, buscou-se na ópera elementos que reforçassem o projeto cenográfico de Corações em Guerra, algo que teve apoio no estilo inovador de Queen.<br>
// Para finalizar a essência da banda, Pink Floyd foi a escolha conceitual. Somada a essas influências-base, foram adicionadas: Foo Fighters, Oasis, The Strokes, Jet, Franz Ferdinand e Queens of The Stone Age.";


// $galeria = array();
// $galeria[0] = "https://www.instagram.com/p/BJURAvzA325/";
// $galeria[1] = "https://www.instagram.com/p/BI-6rGhAMNv/";
// $galeria[2] = "https://www.instagram.com/p/BI_fM-ZACPk/";
// $galeria[3] = "https://www.instagram.com/p/BI_c91kAAJ_/";
// $galeria[4] = "https://www.instagram.com/p/BI-VB19AiqU/";

?>
<section id="conteudoPagina">

<?php
// $transmissaoAoVivo = true;
if ($transmissaoAoVivo == false){ ?>

    <section>
      <div class="destaques">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <div class="item active imgDestaque">
                      <!-- <img src="<php echo  $destaques[0]?>media/?size=l" class="imgDestaque" alt="..."> -->
                      <img src="https://www.instagram.com/p/<?php echo  $destaques[0]?>/media/?size=l" class="imgDestaque" alt="...">
                      <!-- <a data-flickr-embed="true"  href="https://www.flickr.com/photos/146104633@N02/28886361356/in/datetaken/" title="klibre planeta rock"><img src="https://c5.staticflickr.com/9/8441/28886361356_1f900b3207_z.jpg" width="640" height="237" alt="klibre planeta rock"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script> -->
                    <!-- <img src="<php echo  $destaques[0]?>" class="imgDestaque" alt="..."> -->
                      <!-- <img src="<php echo  $destaques[0]?>media/?size=t" class="imgDestaque" alt="..."> -->
                      <div class="carousel-caption">
                      </div>
                  </div>
                  <?php
                  for ($i=1; $i < count($destaques) ; $i++) {
                  ?>
                        <div class="item imgDestaque">
                          <!-- <img src="<php echo  $destaques[$i] ?>media/?size=l" class="imgDestaque" alt="..."> -->
                          <img src="https://www.instagram.com/p/<?php echo  $destaques[$i]?>/media/?size=l" class="imgDestaque" alt="...">

                          <div class="carousel-caption">
                          </div>
                        </div>
                  <?php } ?>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>

      </div>

    </section>

<?php }else{ ?>
  <section>
      <div class="container">
        <iframe width="100%" height="70%" src="https://www.youtube.com/embed/<?php echo $urlLiveStream  ?>?rel=0&arp;autoplay=1" frameborder="0" allowfullscreen></iframe>
      </div>
  <section>
<?php } ?>

    <section>
        <div class="container">
          <div  class="col-md-3 col-sm-4 col-xs-12">
            <img class="img-responsive propaganda" src="img/DUTRACLINIC.jpg" alt="" />
          </div>
          <div class="col-md-3 col-sm-4 propaganda visible-lg visible-md visible-sm">
            <img class="img-responsive propaganda" src="img/etigraf.jpg" alt="" />
          </div>
          <div class="col-md-3 col-sm-4 propaganda visible-lg visible-md visible-sm">
            <img class="img-responsive propaganda" src="img/GUARAFM.jpg" alt="" />
          </div>
          <div class="col-md-3 propaganda visible-lg visible-md">
            <img class="img-responsive propaganda" src="img/logojpimoveis.png" alt="" />
          </div>
        </div>
    </section>

    <section>
      <div class="container">
          <div class="titulo">
              <h1>ÚLTIMAS NOTÍCIAS</h1>
          </div>
      </div>

      <div class="container">
        <div id="owl-demo" class="owl-carousel">

          <?php
          for ($i=0; $i < count($noticias) ; $i++) {
          ?>

            <a data-toggle="modal" data-target="#clickModal" data-id="1"
            data-titulo="<?php echo $noticias[$i]['titulo'] ?>"
            data-conteudo="
                <img id='imgModal' src='<?php echo $noticias[$i]['imagem'] ?>media/?size=l' alt='' />
                <p id='chamadaModal'><?php echo $noticias[$i]['conteudo'] ?></p>
            ">
            <!-- <a data-toggle="modal" data-target="#clickEvento"> -->
                <div class="item"><img class="lazyOwl" data-src="<?php echo $noticias[$i]['imagem'] ?>media/?size=t" alt="Evento1">
                    <h4 class="tituloEvento"><?php echo $noticias[$i]['titulo'] ?></h4>
                    <p class="chamadaEvento">
                      <?php
                        $chamada = substr($noticias[$i]['conteudo'],0,300);
                        echo $chamada. ">...";
                      ?>
                      </p></p>
                    </p>
                </div>
            </a>

          <?php
          }
          ?>
        </div>
      </div>
    </section>



    <section>
      <div class="container">
          <div class="titulo">
            <a id="linkGaleria">
              <h1>GALERIA</h1>
            </a>
          </div>
      </div>


      <div id="galeriaID" class="container">
        <!-- <div id="selector"></div> -->
        <div id="owl-galeria" class="owl-carousel demoss">
          <!-- <div class="demo"> </div> -->

          <!-- <a data-toggle="modal" data-target="#clickModal">
              <div class="item"><img class="lazyOwl" data-src="img/not1.jpg" alt="Evento1">
            </div>
          </a> -->
          <!-- ************* youtube ************** -->
          <!-- <div class="yt-thumb video-thumb" data-toggle="modal" data-target="#clickModal">
            <span class="yt-thumb-simple">
                <img alt="" data-ytimg="1"  src="http://img.youtube.com/vi/YQHsXMglC9A/hqdefault.jpg" onload=";__ytRIL(this)">
            </span>
          </div> -->
          <!-- **************************************** -->

          <!-- ************* instagram full *********** -->
          <!-- <div class="item">
          <blockquote class="lazyOwl instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BI3u1IgAXCT/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma foto publicada por Thalita (@thalitasouza_)</a> em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-08-09T02:14:50+00:00">Ago 8, 2016 às 7:14 PDT</time></p></div></blockquote>
          <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
          </div> -->

          <!-- ************* Flirck ****************** -->
          <!-- <div class="item" class="lazyOwl">
            <a data-flickr-embed="true"  href="https://www.flickr.com/photos/stu_patta/28786195556" title="Ashness"><img src="https://c5.staticflickr.com/9/8871/28786195556_bb7b1d667c_m.jpg" width="240" height="160" alt="Ashness"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </div> -->
          <!-- ***************************************** -->
          <?php
          foreach ($galeria as $foto) {
          ?>
              <a class="clickInstagram" data-toggle="modal" data-target="#clickModal" data-id="1"
              data-titulo=""
              data-conteudo="<img id='imgModal' class='lazyOwl' src='<?php echo $foto ?>media/?size=l' alt='' /> ">
              <div class="item">
              <img class="lazyOwl" data-src="<?php echo $foto ?>media/?size=t" alt="Evento1">
              </div>
              </a>
          <?php } ?>

          <a id="maisLinkGaleria">
              <div class="item">
                <img class="lazyOwl" data-src="img/plus-sign-black-clipart-1.jpg" alt="Evento1">
                <!-- <span class="glyphicons glyphicons-plus-sign"></span> -->
              </div>
          </a>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="clickModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">
                <!-- titulo dinamico -->
              </h4>
            </div>
            <div class="modal-body">
              <!-- entrada de conteudo dinamico -->
            </div>

            <!-- <div  class="col-xs-12">
              <img class="img-responsive propagandaModal" src="img/DUTRACLINIC.jpg" alt="" />
            </div> -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- <section>
      <div id="fotoramaGaleria" class="fotorama demo" data-nav="thumbs">
        <img src="<php echo $galeria[0] ?>media/?size=l">
        <img src="<php echo $galeria[1] ?>media/?size=l">
        <img src="<php echo $galeria[2] ?>media/?size=l">
        <img src="<php echo $galeria[3] ?>media/?size=l">
      </div>
    </section> -->


  </section> <!-- FIM CONTEUDO PÁGINA-->
