<!DOCTYPE html>
<html>
<head>
	<title>LIVRE D'OR</title>

   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/style.css" rel="stylesheet" />
      
        <link rel="stylesheet" href="./connexion.css">
        <link rel="stylesheet" href="./css/livredor.css">
</head>
<body>


<div align="center"> 
        
                <!--classe donnée par boostrap--> 
<h2 class="fw-bolder"   style="color:purple;">Témoignages de nos membres, notre Livre d'or</h2>
                    <hr>
<b      style="color:pink;">Bienvenue dans notre Livre d'Or</b>
<br>
<br><p style="color:blue;">Ci-bas l'affichage des messages de nos membres<br>
</p>
<br>
<br>

<?php 

include "messages.php";
?>

<form action="sendmsg.php" method="POST">
	<input type="text" id="fname" name="name" placeholder="Tapez votre nom"><br>
	<textarea name="message" rows="5" cols="100"></textarea><br>
	<button class="btn btn-primary">Envoyer!</button>
</form>
</div>
</body>
</html>