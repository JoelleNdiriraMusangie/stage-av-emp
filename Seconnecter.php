<!--code connexion_traitement.php -->
<?php 
    session_start(); // Démarrage de la session
    require_once 'DB.php'; // On inclut la connexion à la base de données
 //require_once 'traitement_connexion.php';
?>
<!--code htlm css connexion html -->

<!DOCTYPE html>  
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="./css/connexion.css">
            <title>Connexion</title>
        </head>
        <body>
        
        <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            <div class="login-form">
            <form action="traitement_connexion.php" method="POST"> <!--rediriger l'utilisateur vers un espace mebre où il pourra deposer son cv //utilisateurs.php? ou membres.php? -->
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
            <p class="text-center"><a href="inscription.php"><b>Vous n'avez pas de compte? Créez un compte? Inscription </b></a></p>
           <!-- ici qu'on rajoute le lien lors que on veut faire mot de passe oublier avec landing-->
        </div>
        </body>

        <em>
            <a href="change_password.php"> Mot de passe oublié</a> <hr> <br>
            
        <a href="index.php"> Retour à la page principale </a>
            </em>
</html>