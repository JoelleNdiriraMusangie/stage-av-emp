<?php
session_start();
$bdd = new PDO ('mysql: host=localhost; dbname=aveniremploi;','root', '');
if (isset($_GET['id']) AND !empty($_GET['id'])){
    $getid= $_GET['id'];
    $recupUser = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() >0) {//si jamais recupUser n'est pas vide on execute notre sinon erreur 
        $bannirUser = $bdd->prepare('DELETE FROM utilisateurs WHERE id=? ');
        $bannirUser->execute(array($getid));

        header('Location: membres.php');

    }else{
            echo "Aucun membre n'a été trouvé";
        }
} else{
    echo "L'identifiant n'a pas été récupéré";
}
    ?>