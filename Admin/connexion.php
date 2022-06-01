<?php 
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "Admin59";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut  AND $mdp_saisi  == $mdp_par_defaut){
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location:admin.php'); //si le mdp saisi et le mdp par defaut sont== alors connexon à l'espace admin.php admin.php = index.php pour utilisateur ?
        } else{
            echo "Votre mot de passe ou pseudo est incorrect";
        }
    }else{
        echo "Veuillez compléter tous les champs...";
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Espace de connexion admin</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./connexion/main.css">
</head>

<body>




<br><br>
    <hr>
    

    
</body>

  <form method="POST" action="" align="center">
      <input type="text" name="pseudo" autocomplete="off">
      <br>
      <input type="password" name="mdp">
      <br><be>
          <input type="submit" name="valider">
</form>

</html>
