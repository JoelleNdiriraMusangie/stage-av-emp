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

    </head>



<body>
<body>

<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="#!">Avenir Emploi </a>
        <div class=menutoggle onclick="toggleMenu();"></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">ACCUEIL</a></li>
                <li class="nav-item"><a class="nav-link" href="Nospartenaires.php" onclick="toggleMenu();">NOS PARTENAIRES </a></li>
                <li class="nav-item"><a class="nav-link" href="resultat.php" onclick="toggleMenu();">RESULTAT</a></li>
                <li class="nav-item"><a class="nav-link" href="LivreDor/livreDor.php" onclick="toggleMenu();">LIVRE D'OR</a></li>
                <li class="nav-item"><a class="nav-link" href="#temoignages" onclick="toggleMenu();">REMERCIEMENTS</a></li>
             
                <li class="nav-item"><a class="nav-link" href="MentionsLegales.php" >MENTIONS LEGALES</a></li>
                <li class="nav-item"><a class="nav-link" href="Seconnecter.php" >Connexion membre</a></li>
                <li class="nav-item"><a class="nav-link" href="Admin/admin.php" >Connexion Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="#AgendaPartenaires" >Agenda</a></li>

              

            </ul>
        </div>

    </div>
</nav>
  

<!-- Contact section-->
           <!--en-tëte-->
           <section class="bg-light py-5" id="contact">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">Contactez-nous</h2>
                    <p class="lead mb-0">Nous aimerions avoir de vos nouvelles</p>
                 </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
        
                       <form id="contactForm"   method="POST" action="#" >  
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name= "noms" placeholder="Enter your name..." />
                                <label for="nom">Noms</label>
                                <div class="invalid-feedback" >Un nom est requis.</div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="lastname" type="text" name="prenom" placeholder="Enter your name..." />
                                <label for="lastname">prénom</label>
                                <div class="invalid-feedback" >Un prénom est requis.</div>
                            </div>
    
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email"  name="email" placeholder="name@example.com" required autocomplete="new-password"/>
                                
                                <label for="email">Adresse email</label>
                                <div class="invalid-feedback" >Un email est requis.</div>
                                <div class="invalid-feedback" >L'email n'est pas valide.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="adresse" type="text" name="adresse" placeholder="Entrer votre adresse..." />
                                <label for="adresse">adresse</label>
                                <div class="invalid-feedback" >Une adresse est requis.</div>
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

        <br> <br>

<a href="index.php"> Retour </a>
</body>
</html>