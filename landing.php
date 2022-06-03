<?php //ESPACE MEMBRE<>
    session_start();
    require_once 'DB.php'; // ajout connexion bdd 

 // si la session existe pas soit si l'on est pas connecté on redirige vers index.php
 if(!isset($_SESSION['user'])){  //user n'existe pas ici mais pseudo si 
    header('Location:index.php'); 
    die();
}

// On récupere les données de l'utilisateur
$req = $newBD->prepare('SELECT * FROM utilisateurs WHERE token = ?');
$req->execute(array($_SESSION['user']));  //user ici non plus mais mail ou pseudo eux si 
$data = $req->fetch();
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Espace membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/main.css">
  

</head>
  <body>
        <div class="container">
            <div class="col-md-12">
                <?php 
                        if(isset($_POST['err'])){
                            $err = htmlspecialchars($_POST['err']);
                            switch($err){
                                case 'password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>


                <div class="text-center">
                        <h1 class="p-5">Bonjour <?php echo $data['pseudo']; ?> !</h1>                     
                        <hr />
                        <a href="Deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
                          Changer mon mot de passe
                        </button>
                </div>
            </div>
        </div>    
                                
        <!-- Modal à revoir le traitement -->
        <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Changer mon mot de passe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                            <div class="modal-body">
                                <form action="change_password.php" method="POST">
                                    <label for='password'>Mot de passe actuel</label>
                                    <input type="password" id="password" name="password" class="form-control" required/>
                                    <br />
                                    <label for='new_password'>Nouveau mot de passe</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                                    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
                                    <br />
                                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>




<!--a modifier plutard pour que l'utiloisateur arrive à mettre son avatar dans son espace utilisateur c'est un plus pour moi-->
<!-- metrre ou rajouter code php our stockage au serveur-->
            <div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Changer mon avatar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="change_avatar.php" method="POST" enctype="multipart/form-data">
                                <label for="avatar">Images autorisées : png, jpg, jpeg, gif - max 20Mo</label>
                                <input type="file" name="avatar_file">
                                <br />
                                <button type="submit" class="btn btn-success">Modifier</button>
                            </form>
                        </div>
                        <br />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>


<!-- apès inscription de la personne--> 
<!-- Contact section-->
           <!--en-tëte-->
           <section class="bg-light py-5" id="contact">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">veuillez remplir votre profil</h2>
                    <p class="lead mb-0">Nous aimerions avoir de vos nouvelles</p>
                 </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
        
                       <form id="contactForm"   method="POST" action="upload.php" >  

                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name= "noms" placeholder="Entrer votre nom..." />
                                <label for="nom">Nom(s)</label>
                                <div class="invalid-feedback" >Un nom est requis.</div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="lastname" type="text" name="prenom" placeholder="Entrer votre prénom..." />
                                <label for="lastname">prénom</label>
                                <div class="invalid-feedback" >Un prénom est requis.</div>
                            </div>
    
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email"  name="email" placeholder="noms@example.com" required autocomplete="new-password"/>
                                
                                <label for="email">Adresse email</label>
                                <div class="invalid-feedback" >Un email est requis.</div>
                                <div class="invalid-feedback" >L'email n'est pas valide.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="adresse" type="text" name="adresse" placeholder="Entrer votre adresse..." />
                                <label for="adresse">adresse</label>
                                <div class="invalid-feedback" >Une adresse est requise.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" name="phone" placeholder="(+33) 77777777" />
                                <label for="phone">Numéro de télephone</label>
                                <div class="invalid-feedback" >Un numéro de téléphone est requis.</div>
                            </div>

                           <p   class="form-floating mb-3" for ="genre"> <div ><b>Genre</b>
                                <label >Homme</label>
                                <input  id="genre" type="radio" name="genreH" value="H"/>
                                <label >Femme</label>
                                <input id="genre" type="radio" name="genreF" value="F"/>
                            </div>

                            <div ><b>Situation professionelle</b>
                                <label class="form-control"></label>
                                <select name="sp">
                                    <option value="DemandeurEmp">Demandeur d'emploi</option>
                                    <option value="DemandeurForma">Demandeur de formation</option>
                                </select>
                            </div>
                        </p>
            
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" name="message" placeholder="Entrer votre message ici..." style="height: 10rem" ></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback">Un messagees requis.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                 <div class="text-center mb-3">
                                    <div class="fw-bolder">Soumission du formulaire réussie!</div>
                                </div>
                            </div>

                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erreur lors de l’envoi du message !</div></div>

                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Envoyer</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


<!----->

<!-- upload a fichier cv et lm -->

<!----->
<hr>


<!-- connexion à la bd pour upload a file-->
<?php

    $conn = mysqli_connect('localhost','root','','aveniremploi');
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "Admin/upload/".$fileName;
        
        $query = "INSERT INTO files(file) VALUES ('$fileName')";
        $run = mysqli_query($conn,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo "success! votre fichier a été téléchargé";
        }
        else{
            echo "error".mysqli_error($conn);
        }
        
    }
    
    ?>


<section class="bg-light py-5" id="contact">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">

                    <h2 class="fw-bolder">Veuillez télécharger des fichiers PDF</h2>
                    <p class="lead mb-0"> Télécharger votre CV et votre lettre de motivation sous format PDF ici</p>
                </div>
                 
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                    <div class="formulaire">
                        <!-- -->

                    <form action="" method="post" enctype="multipart/form-data">
                        Selectionner un fichier à télécharger:
                    <input class="form-control"type="file" name="file" value="Envoyer votre fichier">
                    <input class="bouton2" type="submit"  name="submit" value="Envoyer votre fichier"  >
                    </form>

                    <!-- requette sqlpour telecharger le fichier  -->
                    
                    <?php
                    $query2 = "SELECT * FROM files ";
               $run2 = mysqli_query($conn,$query2);
               
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>
               <a href="download.php?file=<?php echo $rows['file'] ?>">Télecharger le fichier</a><br>
               <?php
               }
              ?>
<br/><br/>
<a href="index.php"> Retour à la page principale </a>
</section>

            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
