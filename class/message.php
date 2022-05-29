<?php

$newBD = mysqli_connect('localhost', "avenriremploi",'root', '');

if($newBD->connect_errno > 0){
    die('Impossible de se connecter à la base de donnée [' .$newBD->connect_error .']');
}
if (isset($_POSt['name'])){


$name = $_POST['name'];

$name = $_POST['surname'];

$age = $_POST['age'];

echo $name. " " .$username ."" . "$age". "<br";
} else{

    echo "La balise forme n'a pas été modifié "
}
?>