
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
        <link rel="stylesheet" href="css/connexion.css">




    </head>

    <body>

        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Avenir Emploi </a>
                <div class=menutoggle onclick="toggleMenu();"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#features">ACCUEIL</a></li>
                        <li class="nav-item"><a class="nav-link" href="Nospartenaires.php" onclick="toggleMenu();">NOS PARTENAIRES </a></li>
                        <li class="nav-item"><a class="nav-link" href="resultat.php" onclick="toggleMenu();">RESULTAT</a></li>
                        <li class="nav-item"><a class="nav-link" href="LivreDor/livreDor.php" onclick="toggleMenu();">LIVRE D'OR</a></li>
                        <li class="nav-item"><a class="nav-link" href="remerciements.php" onclick="toggleMenu();">REMERCIEMENTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="NousContacter.php">CONTACT </a></li>
                        <li class="nav-item"><a class="nav-link" href="MentionsLegales.php" >MENTIONS LEGALES</a></li>
                        <li class="nav-item"><a class="nav-link" href="Seconnecter.php" >Connexion membre</a></li>
                        <li class="nav-item"><a class="nav-link" href="Admin/admin.php" >Connexion Admin</a></li>
                        <li class="nav-item"><a class="nav-link" href="AgendaE/CreerAgenda.php" >Agenda</a></li>

                      

                    </ul>
                </div>

            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Avenir Emploi, une association d'aide pour tous  </h1>
                            <p class="lead text-white-50 mb-4">Avenir emploi est une aossication Lilloise, permettant aux membres inscrits de trouver un emploi et ou une formation.  <br>Elle est situé au 132 Rue des Arts 59100 Roubaix France.</br> <br> Dirigée par Monsieur Etienne Ntambwe et joignable au:</br><br>0374680563 et via le mail: aveniremploi59@yahoo.fr</br>  </p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Découvrir nos actions</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">A propos de nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder"> Demande de formation </h2>
                        <p>Lors de votre demande de formation,il vous suffit d'être inscrit en tant que membre de l'association Lilloise Avenir Emploi et de réserver un créneau disponible à cet effet. Avenir Emploi vous aides à la redaction et l'amélioration de votre Curriculum Vitae ainsi que de votre lettre de motivation au goût du jour.  Nous vous accompagnons voir jusqu'à votre recherche d'emploi pour le poste dont vous vous êtes formé. Dans le cas où, vous n'avez pas de vision sur quelle formation vous voulez vous y mettre, nous sommes là pour vous guider à effectuer un choix en accord avec vos convictions.</p>
                        <a class="text-decoration-none" href="ACCUEIL/Inscription.php">
                           Prêt pour S'inscrire?
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder">Demande d'emploi</h2>
                        <p>Pour une demande d'emploi, nous vous aidons à la redaction, l'amélioration de votre Curriculum Vitae ainsi que de votre lettre de motivation. Pour celà, il vous suffit d'être inscrit en tant que membre de l'association Lilloise Avenir Emploi, remplir la fiche des renseignements en ligne et de réserver un créneau disponible pour celà.</p>
                        <a class="text-decoration-none" href="ACCUEIL/inscription.php">
                            Prêt à s'inscrire?
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    
            <!-- a la pace de ça mettre une photo  d'avenir emploi  pour maintenir le footer---->
                </div>
            </div>
        </section>

     </head>


     <body> 
         
        <!-- Agenda section-->
        <section class="py-5 border-bottom" id="AgendaPartenaires">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder"> Agenda des diverses salles pour les associations partenaires </h2>
<p> en cours de maintenance d'ici 2 semaines max until 15 JUIN 2022 <p>

</div>
</div>
</div>
</body>
            <script src="./src/main.js"></script>
            
            <script type="text/javascript" src="jquery.js"></script>
          

         
                    
        <!-- Footer-->
        <footer class="py-5 bg-dark">
        
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Votre site web 2022</p></div>
            <section class="mentionslegales" id="mentionslegales">
                <div class="contenu">
                <!-- ne pas oublier de telecharger le pdf ici dans assets nommer mentions légales a demander à l'association pour l'inclure-->
            </section>

<p> rajouter des photos de Avenir Emploi<p>

        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        
        <script>
         function toggleMenu(){
             const toggleMenu = document.querySelector('.menutoggle');
             const navbar = document.querySelector('navbar');
             menutoggle.classList.toggle('active');
             navbar.classList.toggle('active')
         }   
        </script>
    </body>
</html>
