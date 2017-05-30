<?php

require '../inc/configuration.php';

$sql = new Sql();
?>}

<section id="eventosPHP">

    <div class="container">
        <div class="titulo">
            <h1>EVENTOS</h1>
        </div>

        </br>

        <table class="table table-hover">
              <!-- <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>LINK</th>
              </tr> -->

              <?php

              $data = $sql->select("select * from eventos order by id DESC");

              foreach ($data as $eventos) {
              ?>
                  <tr></br>
                    <h4><b><?php echo  $eventos['titulo']?></b></h4>
                    <?php echo  $eventos['descricao']?>
                    <a href="<?php echo  $eventos['link']?>" class="btn btn-primary btn-sm active" role="button" target="_blank">Link</a>
                    </br>
                  </tr>
              <?php
              }
              ?>

            </table>

    </div>



</section>
