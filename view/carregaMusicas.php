<?php
// $dados = array("titulo"=>"Site de Dicas GuiFerreiraCode","descricao"=>"Dicas de Programação","link"=>"http://guiferreiracode.com");
// $dadosTratados = json_encode($dados);
// echo json_encode($dados);
if (isset($_GET['radio'])) {
    listaMusica($_GET['radio']);
}

function listaMusica($radio) {
  $dir = "../mp3/" .$radio;

  // Open a directory, and read its contents
  if (is_dir($dir)){
    $i = 1;
    if ($dh = opendir($dir)){
      while (($file = readdir($dh)) !== false){
        $tamanhoNomeSemMp3 = strlen($file) - 4;
        $mp3 = substr($file,$tamanhoNomeSemMp3,strlen($file));
        if ($mp3 == ".mp3" ){
          // $musicas[$i] = substr($file,0,$tamanhoNomeSemMp3); //valido a musica vazia
          // $musicas[$i] = substr($file,0,$tamanhoNomeSemMp3); //valido a musica vazia
          $musicas[$i] = $file; //valido a musica vazia
          // $musicas[$i]['nome'] = $file; //valido a musica vazia
          $i = $i + 1;
        }

      }
      closedir($dh);
      $musicas["tamanho"] = $i-1;

    }
  }
  echo json_encode($musicas);
}


 ?>
