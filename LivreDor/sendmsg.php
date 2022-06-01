<?php

//include "DB.php";

$db = mysqli_connect('localhost','root','','aveniremploi');



if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

if (isset($_POST['name'])){

$sender = $_POST['name'];
$message = $_POST['message'];

echo $sender . " " . $message . "<br>";

$sql_statement = "INSERT INTO messages(sender,message)
					VALUES ('$sender','$message')";

$result = mysqli_query($db, $sql_statement);

header ("Location: LivreDor.php");

}

else
{

	echo " La balise forme n'a pas été modifiée";

}


?>