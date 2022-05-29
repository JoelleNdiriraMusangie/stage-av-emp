<?php
session_start();
if(!$_SESSION['mdp']){  //si l'utilisateur n'est pas connectée alors redirection vers la page connexion.php  sinon direction admin.php
    header('Location:connexion.php');
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
<title>Home</title>
</head>

<body>
<hr> 
<a href="membres.php"><em>Afficher tous les membres</em></a>
</body>
</html>

