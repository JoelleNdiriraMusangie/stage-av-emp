<?php
require 'DB.php';

//connexion à la base de donnée avec l'interface PDO ou PHP DATA OBJECTS  de nos 5 elements ci dessous 

if (isset($_POOST['noms']))&&
    isset($_POST['prenom'])&&
    isset($_POST['telephone'])&&
    isset($_POST['mail'])&&
    isset($_POST['adresse'])&&
    isset($_POST['genreH'])&&
    isset($_POST['genreF'])&&
    isset($_POST['sp'])
    isset($_POST['message'])&&{
        $insertion=$newBD->prepare('INSERT INTO profil VALUES( NULL
        , :nom,:prenom, :telephone, :mail, :adresse, :genre, ;situation)');
        $insertion->bindValue(':nom', $_POST['noms']);
        $insertion->bindValue(':prenom', $_POST['prenom']);
        $insertion->bindValue(':telephone', $_POST['telephone']);
        $insertion->bindValue(':mail', $_POST['mail']);
        $insertion->bindValue(':adresse', $_POST['adresse']);
        $insertion->bindValue(':genre', $_POST['genre']);
        $insertion->bindValue('situation', $_POST['situation']);
        if ($verification){
            echo "<br>Ton Insertion est reussie";
        }
    }else{
        echo "Une variable n'est pas déclarée et ou est null";
    }
?>


<?php
session_start(); // pour recuperer les info liez au user

$pdo= new PDO("mysql:host=localhost;dbname=avenirEmploie",
"root", "");
if(isset($_POST['submit'])){
    if (!empty($_POST['email']) AND !empty($_POST['pwd'])) {
       
$email =$_POST['email'];
$pwd =$_POST['pwd']; 

$_SESSION['email_saisi']=$email;

$recupUser=$pdo->prepare('SELECT * FROM profil WHERE email =? AND pwd =?'); //y a pas pwd pour un contact form 
$recupUser->execute(array($email,$pwd));



if($recupUser->rowCount()>0){

//slectioner recupe user fetch= pour recup lid 
while($user=$recupUser->fetch()){

       
       
      if($user["ROLE"]=='user' || $user["ROLE"]=='guide' ){ //a la place de profil metrre nom de la table profil 
        $_SESSION['user']=$user;
      
       header('location:profile.php?idclient='.$user["code_client"]);}  //ici aussi modfir code client par id client? ou id?
       


      }}


}}
