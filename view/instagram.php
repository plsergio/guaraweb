<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>instagram</title>
    <!-- Initialize stylesheets to header -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../inc/pongstgrm-3.0.4/source-min/pongstagr.am.min.css"> -->
    <!-- My instagram gallery -->
    <link type="text/css" rel="stylesheet" href="../inc/jQuery-my-instagram-gallery-master/my-instagram-gallery.css" />
    <!-- Fancybox -->
    <link type="text/css" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"/>

  </head>
  <body>
<!-- <div id="selector" class="pongstagrm row"></div> -->
<!-- <div class="instagram"></div> -->
 <!-- <div class="myslider"></div> -->
 <div class="demo"></div>
<!-- Initialize Javascripts to footer -->
<script src="https://code.jquery.com/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- <script src="../inc/instaslider-master/js/instaslider.jquery.min.js"></script> -->
<!-- <script src="../inc/pongstgrm-3.0.4/source-min/pongstagr.am.min.js"></script> -->
<!-- My instagram gallery -->
<script src="../inc/jQuery-my-instagram-gallery-master/my-instagram-gallery.js"></script>
<!-- <script src="../inc/jQuery-my-instagram-gallery-master/my-instagram-gallery-responsivo.js"></script> -->
<!-- Fancybox -->
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script>
$(document).ready(function () {

  // $('#selector').pongstgrm({
  //   accessId:     '3650003999',
  //   // accessId:     'c3f918cad440422eafc0586e305d8f1a',
  //   accessToken:  '3650003999.c3f918c.bb39e69fae1545f4b66129566e46c3e6'
  // });
  //
  // $('#selector').pongstgrm({ show: 'feed' });

//   $('.myslider').instaSlider({
//       clientID: 'c3f918cad440422eafc0586e305d8f1a',
//       access_token: '3650003999.c3f918c.bb39e69fae1545f4b66129566e46c3e6',
//       search: '@iamchristill',
//       prevClass: 'prev',
//       nextClass: 'next',
//       limit: 5,
//       duration: 1000,
//       delay: 5000
// });

    $(".demo").myig(
        ins_id = 3650003999, // your user_id
        ins_count = 10, // Count of media to return
        ins_token = '3650003999.c3f918c.bb39e69fae1545f4b66129566e46c3e6' // your token
    );
    $(".myig_popup").fancybox({
    openEffect : 'fade',
    closeEffect : 'fade'
    });
});
</script>
<script>
jQuery(function($) {
  // $('.instagram').on('willLoadInstagram', function(event, options) {
  //   console.log(options);
  // });
  // $('.instagram').on('didLoadInstagram', function(event, response) {
  //   console.log(response);
  // });
  // $('.instagram').instagram({
  //   hash: 'love',
  //   clientId: 'c3f918cad440422eafc0586e305d8f1a'
  // });
  // $('.instagram').instagram({
  // userId: 3650003999,
  // accessToken: '3650003999.c3f918c.bb39e69fae1545f4b66129566e46c3e6'
  // });
});
</script>

  </body>
</html>
