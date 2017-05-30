
$(document).ready(function(){
  $("#navbarRadio").on("click",function(){
    // console.info("clicou");
    $(".navbar-default").toggleClass("mostraMenuRadio");
    $("#fundoMenu").toggleClass("maskFundoMenu");
    $(".navbar-nav>li>.dropdown-menu").toggleClass("mostraMenuRadio");
  });

  $("#fundoMenu").on("click",function(){
    recolheNavbarRadio();
    recolheNavbarMenuPrincipal();
  });

  $("#btnNavbarMnPrinc").on("click",function(){
    $(".navbarMenuPrincipal").toggleClass("mostraMenuRadio");
    $("#fundoMenu").toggleClass("maskFundoMenu");
    $(".navbarMenuPrincipal .navbar-nav>li>.dropdown-menu").toggleClass("mostraMenuRadio");
  });

  menuPrincipal();

  function mostrarAlerta(type, message) {
    	toastr.options = {
        "closeButton": true,
        "positionClass": "toast-bottom-right",
        "hideDuration": "2000"
      }
      toastr[type](message);
  }

  function recolheNavbarRadio(){
        $(".navbar-default").removeClass("mostraMenuRadio");
        $("#fundoMenu").removeClass("maskFundoMenu");
        $(".navbar-nav>li>.dropdown-menu").removeClass("mostraMenuRadio");
        $("#listaMenu").removeClass("in");
  }

  function recolheNavbarMenuPrincipal(){
    $(".navbarMenuPrincipal").removeClass("mostraMenuRadio");
    $("#fundoMenu").removeClass("maskFundoMenu");
    $(".navbarMenuPrincipal .navbar-nav>li>.dropdown-menu").removeClass("mostraMenuRadio");
    $("#listaMenuPrincipal").removeClass("in");
  }

  function clickNoMenu(id,pagina){
    $(id).on("click",function(){
      recolheNavbarMenuPrincipal();
      if (pagina != ""){
        $.ajax({
          url:pagina,
          success: function(data){
            $("#conteudoPagina").html(data);
          }
        });
      }
    });
  }

  function menuPrincipal(){
    $("#btnHome").on("click",function(){
      recolheNavbarMenuPrincipal();
      window.open("index.php","_self");
    });
    clickNoMenu("#aRadio","view/aRadio.php");

    clickNoMenu("#historia","view/nossaCidade/historia.php");
    clickNoMenu("#pontosTuristicos","view/nossaCidade/pontosTuristicos.php");
    clickNoMenu("#administracao","view/nossaCidade/administracao.php");
    clickNoMenu("#mapaCidade","view/nossaCidade/mapaGuaraPHP.php");

    clickNoMenu("#conselhosComunitarios","view/servicos/conselhosComunitarios.php");
    clickNoMenu("#orgaosSociais","view/servicos/orgaosSociais.php");
    clickNoMenu("#orgaosPublicos","view/servicos/orgaosPublicos.php");
    clickNoMenu("#imprensa","view/servicos/imprensa.php");
    clickNoMenu("#educacao","view/servicos/educacao.php");
    clickNoMenu("#igrejas","view/servicos/igrejas.php");
    clickNoMenu("#seguranca","view/servicos/seguranca.php");

    clickNoMenu("#galeria","view/galeria.php");
    clickNoMenu("#eventos","view/eventos.php");
    clickNoMenu("#nossaCidade","");
    clickNoMenu("#contatos","");
  }



 // ****** Controle do Rádio ******

  var listaPhp = $('#arrayPlayListPhp').html();
  var playList = JSON.parse(listaPhp);

  var i = 1; //numero da musica
  var listAtual = "lista que esta tocando agora";
  var musicas = new  Array ();
  var audio = $("#playAudio").get(0);
  listaMusicasPlayList(playList[0]);

  function listaMusicasPlayList(lista){
    $.ajax({
      url:"view/carregaMusicas.php?radio="+lista,
      success: function(data){
        musicas = JSON.parse(data); //populei a global
        i = Math.floor((Math.random() * musicas.tamanho) + 1) // pega um número aleatorio
        listAtual = lista;
        carregarMusica();
      }
    });
  }

  function carregarMusica(){
    if(audio.canPlayType("audio/mp3") != ''){
      // validaMusicaVazia();
      // console.log(i);
      // console.log(musicas[i]);
      audio.play();
      audio.addEventListener('canplay', play_evento , false);
      audio.addEventListener('timeupdate', atualizar , false);
      audio.addEventListener('ended', carregarMusica , false);
      audio.src = "mp3/" + listAtual + "/" + musicas[i];
      // console.log(musicas[i]);
      // audio.src = "mp3/" + listAtual + "/" + musicas[i]+".mp3";
      // audio.src = "mp3/" + playList + "/" + musicas[i].mp3;
      // document.getElementById('nome_musica').innerHTML =  musicas[i] + "...";
      var tamanhoTituloSemMp3 = musicas[i].length - 4;
      var titulo = musicas[i].substring(0, tamanhoTituloSemMp3);
      document.getElementById('nome_musica').innerHTML = titulo + "...";
      // document.getElementById('nome_musica').innerHTML = playList + " - " + musicas[i];
      // document.getElementById('nome_musica').innerHTML = playList + " - " + musicas[i].titulo;
    }else{
      mostrarAlerta("error", "Seu browser não reproduz mp3");
    }
  }

  // function validaMusicaVazia(){
  //   var temMp3 = musicas[i].length - 4;
  //   // console.log(temMp3);
  //   var mp3 = musicas[i].substring(temMp3, musicas[i].length);
  //   // console.log(mp3);
  //   if (mp3 != ".mp3" ) i++; //pulo a musica vazia
  // }

  function passaMusica(){
    i++;
    // validaMusicaVazia();
    // console.log(musicas.tamanho);
    if( i > musicas.tamanho ) i = 1;
    carregarMusica();
    audio.play();
  }

  function play_evento(){
          document.getElementById('tempo_atual').innerHTML = secToStr( audio.currentTime) ;
          document.getElementById('tempo_total').innerHTML = secToStr( audio.duration );
          // document.getElementById('barra_progresso').max = audio.duration;
          // document.getElementById('barra_progresso').value = audio.currentTime;
  }

  function secToStr( sec_num ) {
          sec_num = Math.floor( sec_num );
          var horas   = Math.floor(sec_num / 3600);
          var minutos = Math.floor((sec_num - (horas * 3600)) / 60);
          var segundos = sec_num - (horas * 3600) - (minutos * 60);

          if (horas   < 10) {horas   = "0"+horas;}
          if (minutos < 10) {minutos = "0"+minutos;}
          if (segundos < 10) {segundos = "0"+segundos;}
          var tempo    = horas+':'+minutos+':'+segundos;
          return tempo;
  }

  function atualizar(){
        document.getElementById('tempo_atual').innerHTML = secToStr( audio.currentTime);
        if (audio.currentTime >= audio.duration) { //passo para a próxima música
          passaMusica();
        }
  }

  function acaoPlayPause(acao){
    $("#btn-play-pause span").toggleClass("glyphicon-play");
    $("#btn-play-pause span").toggleClass("glyphicon-pause");
    $("#btn-play-pause").blur(); /*perde o focu*/
    if (acao == "play")  audio.play();
    if (acao == "pausa") audio.pause();
  }

  $("#btn-play-pause").on("click",function(){
      if (audio.paused)
          acaoPlayPause("play");
       else
          acaoPlayPause("pausa");
  });

  function removePlayAddPause(){
    $("#btn-play-pause span").removeClass("glyphicon-play");
    $("#btn-play-pause span").addClass("glyphicon-pause");
    $("#btn-avancar").blur(); /*perde o focu*/
  }

  $("#btn-voltar").on("click",function(){
      var audio = $("#playAudio").get(0);
      acaoPlayPause("pausa");
      removePlayAddPause();
      if (audio.currentTime <= 3){
        i--;
        if( i < 1 ) i = 1;
        carregarMusica();
      }
      audio.currentTime = 0;
      audio.play();
  });

  $("#btn-avancar").on("click",function(){
      var audio = $("#playAudio").get(0);
      audio.pause();
      removePlayAddPause();
      passaMusica();
  });

  $("#volume").on("change",function(){ //também pode change
    audio.volume = parseFloat($(this).val()); //passa os valores do range para o volume do vídeo
  });

  function volumeInicial(){
    $("#volume").val() = 0.7; //também pode change
    audio.volume = 0.7; //passa os valores do range para o volume do vídeo
  }

// ************* ação do menu de Rádios *******************
function ativaMenu(escolhido){
  playList.forEach(function(current_value) {
			// console.log(current_value);
      lista = "#" + current_value;
      $(lista).removeClass("active");
	});

  menuEscolhido = "#" + escolhido;
  $(menuEscolhido).addClass("active");
}

$(".menuClick").on("click",function(){
  // console.log(playList[0]);
  for (var i = 0; i < playList.length; i++) {
    // console.log(playList[i]);
    if (this.id == playList[i]){
      ativaMenu(playList[i]);
      removePlayAddPause();
      listaMusicasPlayList(playList[i]);
      recolheNavbarRadio();
    }
  }
});

  // *************** fim ação do menu de rádios *******************



});
