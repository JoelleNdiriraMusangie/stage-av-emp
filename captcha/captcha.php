<?php
session_start();
$_SESSION['captcha']= mt_rand(1000,9999);
$img = imagecreate(100,30);
$font = 'images/'; //nom de l'image dans mon dossier images à telehcaregre plein 

?>