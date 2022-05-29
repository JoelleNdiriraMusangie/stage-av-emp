<?php
session_start();
$bdd = new PDO ('mysql: host=localhost; dbname=aveniremploi;','root', '');
if (!$_SESSION['mdp']) { //remplacer login par mail ? ou pseudo mais plutôt mail 
	header ('Location: connexion.php');
	exit();
}
?>



<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AVENIR EMPLOI</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="./css/main.css">
<title>Afficher les membres ou utilisateurs </title>

</head>

<body>

    <!--afficher tous les membres-->
    <?php
        $recupUsers = $bdd->query('SELECT * FROM utilisateurs');
        while($user = $recupUsers ->fetch()){    
           ?>
           <p><?= $user['pseudo']; ?> <a href="bannir.php?id=<?=$user['id']; ?>" style="color:red;
           text-decoration: none">Bannir ou Supprimer le membre</a><p>
               <?php
        }
    
    ?>


    <!--fin d'afficher tous les membres-->
<b style="color:purple;">Bienvenue à l'espace d'affichage de tous les membres!</b><br />  

</body>
</html>

