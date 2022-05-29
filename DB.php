<?php
   
$host='localhost';  // plutard ce sera ovh.fr?
$port=3306; //enlever le port 
$dbname='aveniremploi';
$user='root';
$pwd='';
try {
    
//connexion à la base de donnée avec l'interface PDO ou PHP DATA OBJECTS  de nos 5 elements ci dessous 
    $newBD = new PDO ("mysql:host=$host;port=$port; dbname=$dbname;charset=utf8", $user, $pwd);
  
    $newBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  
}
catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

//modifier plutard avec le bindparam pour eviter les injections 
//https://www.hostinger.fr/tutoriels/comment-inserer-des-donnees-dans-une-table-mysql-via-php

  