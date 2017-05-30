$(document).ready(function() {

  // $('#conteudoPagina').load('view/home.php',function(){
  //   // $("#owl-demo").lightBox();
  // });

  $("#owl-demo").owlCarousel({
    items : 4,
    lazyLoad : true,
    navigationText: ["Anterior", "Próximo"],
    navigation : true
  });

  $("#owl-galeria").owlCarousel({
    items : 4,
    lazyLoad : true,
    navigationText: ["Anterior", "Próximo"],
    navigation : true
  });

// var galeria = '<img src="https://www.instagram.com/p/BI-6rGhAMNv/media/?size=l">';
// galeria += '<img src="https://www.instagram.com/p/BI_fM-ZACPk/media/?size=l">';
// galeria += '<img src="https://www.instagram.com/p/BI_c91kAAJ_/media/?size=l">';
// galeria += '<img src="https://www.instagram.com/p/BI-VB19AiqU/media/?size=l">';
// $('#fotoramaGaleria').append(galeria);
  // ************** acesso ao instagram **************
  // $(".demo").myig(
  //     ins_id = 3650003999, // your user_id
  //     ins_count = 10, // Count of media to return
  //     ins_token = '3650003999.c3f918c.bb39e69fae1545f4b66129566e46c3e6' // your token
  // );
  // $(".myig_popup").fancybox({
  // openEffect : 'fade',
  // closeEffect : 'fade'
  // });

  // $('#selector').pongstgrm({
  //   accessId:     '3650003999',
  //   accessToken:  '3650003999.c3f918c.bb39e69fae1545f4b66129566e46c3e6'
  // });
  // // *******************************************************
  //
  // $('#selector').pongstgrm({ show: 'recent' });


  // $('.clickInstagram').on('click',function(){
    // $.ajax({
    //   type:"POST",
    //   url:"https://api.instagram.com/v1/users/self/media/recent/?access_token=3650003999.c3f918c.bb39e69fae1545f4b66129566e46c3e6",
    //   contentType: "application/json;charset=utf-8",
    //   dataType:"jsonp",
    //   success: function(data){
    //     console.log("entrou");
    //     // var lista = JSON.parse(data);
    //     var arraysInstagram = data['data'];
    //     var cont = 0;
    //     var galeriaInstagram = "";
    //     // galeriaInstagram = "<div id='owl-galeria' class='owl-carousel'>";
    //     arraysInstagram.forEach(function(current_value) {
    //   			console.log(current_value['link']);
    //         // galeriaInstagram += "<img src='"+current_value['link']+"media/?size=t'>";
    //         galeriaInstagram += '<img src="https://www.instagram.com/p/BI_fM-ZACPk/media/?size=l">';
    //         // galeriaInstagram =  "<a class='clickInstagram' data-toggle='modal' data-target='#clickModal' data-id='1'            data-titulo='.'            data-conteudo='.'>            <div class='item'>            <img src='"+current_value['link']+"media/?size=t' alt='Evento1' style='display: block;'>            </div>            </a>            ";
    //         // galeriaInstagram = galeriaInstagram + "<a class='clickInstagram' data-toggle='modal' data-target='#clickModal' data-id='1'            data-titulo='.'            data-conteudo='.'>            <div class='item'>            <img src='"+current_value['link']+"media/?size=t' alt='#'>            </div>            </a>            ";
    //         // <a class='clickInstagram' data-toggle='modal' data-target='#clickModal' data-id='1'
    //         // data-titulo='.'
    //         // data-conteudo='<img id='imgModal' class='lazyOwl' src='https://www.instagram.com/p/BI-VB19AiqU/media/?size=l' alt='Evento1' /> '>
    //         // <div class='item'>
    //         // <img class='lazyOwl' data-src='https://www.instagram.com/p/BI-VB19AiqU/media/?size=t' alt='Evento1'>
    //         // </div>
    //         // </a>
    //         // var galeriaInstagram = "<a class='clickInstagram' data-toggle='modal' data-target='#clickModal' data-id='1' data-titulo='.' data-conteudo=''<img id='imgModal' class='lazyOwl' src='"+current_value['link']+"media/?size=l' alt='#' /> '>  <div class='item'> <img class='lazyOwl' data-src='"+current_value['link']+"media/?size=t' alt='Evento1'> </div> </a>";
    //         console.log(galeriaInstagram);
    //   	});
    //     // $('#fotoramaGaleria').append(galeriaInstagram);
    //     // galeriaInstagram = galeriaInstagram + "  </div>";
    //     // $("#owl-galeria").html(galeriaInstagram);
    //     // $("#galeriaID").html(galeriaInstagram);
    //     // console.log(cont);
    //     // var link = arraysInstagram['0'];
    //     // console.log(arraysInstagram['0']);
    //     // console.log(link['link']);
    //     // $(".modal-body").html(list);
    //     // var img = "<img id='imgModal' class='lazyOwl' src='"+data['thumbnail_url']+"' alt='' /> ";
    //     // var json_text = JSON.stringify(data, null, 2);
    //     // var your_object = JSON.parse(json_text);
    //     // console.log(data.Array[6][@name=’@link’]);
    //     // console.log(data['Array[6]']);
    //     // console.log(data['link']);
    //     // $(".modal-body").html(data['html']);
    //   }
    // });
  // });

  $('#clickModal').on('show.bs.modal', function(event) {
        $target = {};
        ['id','titulo','conteudo','link'].forEach(function(value, key) {
            $target[value] = $(event.relatedTarget).data(value);
        });

        $(".modal-title").text($target.titulo);
        $(".modal-body").html($target.conteudo);
        // var conteudo = $(".clickInstagram").data('conteudo');
        //   // link = this.id;
        //   // console.log(link);
        // $("#conteudoGaleriaModal").attr("href", "https://www.instagram.com/p/BIj6f2SBfSH");
      //  $(".new").addClass('hidden');
        // $(".close-changes").text('Salvar').data('button');
        // $("#clickGaleriaBody").html($target.conteudo);
        // $(".modal-body").html(conteudo);
    // });
  });

  // $('#clickGaleria').on('hidden.bs.modal', function(event) {
  //   $(".modal-body").html("...");
  // });

  $("#linkGaleria").on("click",function(){
    $.ajax({
      url:"view/galeria.php",
      success: function(data){
        $("#conteudoPagina").html(data);
        // var listMusic = JSON.parse(data);
      }
    });
  });
  $("#maisLinkGaleria").on("click",function(){
    $.ajax({
      url:"view/galeria.php",
      success: function(data){
        $("#conteudoPagina").html(data);
        // var listMusic = JSON.parse(data);
      }
    });
  });

});
