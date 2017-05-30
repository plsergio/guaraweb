<link type="text/css" rel="stylesheet" href="inc/jQuery-my-instagram-gallery-master/my-instagram-gallery.css" />
<link type="text/css" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"/>

<section id="galeriaPHP">

    <div class="container">
        <div class="titulo">
            <h1>GALERIA</h1>
        </div>
    </div>

    <div class="demo"></div>

</section>


<!-- <script src="inc/jQuery-my-instagram-gallery-master/my-instagram-gallery.js"></script> -->
<!-- <script src="inc/jQuery-my-instagram-gallery-master/my-instagram-gallery-responsivo.js"></script> -->
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> -->
<script>
$(document).ready(function () {

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
