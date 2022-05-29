<?php   //permet de cnfirmer le lien mail reçu par lui meme le clientt
$user_id = $_GET['id'];
$token= $_GET['token']

require 'DB.php';
$req= $newBD->prepare('SELECT token FROM users WHERE id=?');
$req->execute ([$user_id]);

$user = $req-> fetch (); 
if($user && $user->token== $token){
    die('ok');

}else{
    die('pas ok');

}