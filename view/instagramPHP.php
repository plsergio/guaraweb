<?php

  function fetchData($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 20);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
  }

  $galeria = array();

  $result = fetchData("https://api.instagram.com/v1/users/3650003999/media/recent/?access_token=3650003999.c3f918c.bb39e69fae1545f4b66129566e46c3e6");
  $result = json_decode($result);
  $contador = 0;
  foreach ($result->data as $post) {
    // echo $post->images->low_resolution->url;
    // echo "<img src=" .$post->images->low_resolution->url . " alt='#' />";
    $galeria[$contador] = $post->link;
    // $galeria[$contador] = $post->images->low_resolution->url;
    $contador = $contador + 1;
    // echo "<br>";
  }
?>
