<?php

$liveStream 	= $_POST['liveStream'];
$url 	= $_POST['url'];

require '../../inc/configuration.php';

$sql = new Sql();
$sql->query(("update liveStream set ativarLiveStream =$liveStream, url='$url' "));
// echo "update liveStream set ativarLiveStream =$liveStream, url='$url' ";
header("Location: live.php");
?>
