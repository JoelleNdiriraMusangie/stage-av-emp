<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>

  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/style.css" rel="stylesheet" />
        
        <link rel="stylesheet" href="./connexion.css">
        <link rel="stylesheet" href="./css/messages.css">


</head>
<body>

<div align="center">

	<table>

<tr> <th style="color:black"> ID </th> <th style="color:black"> UTILISATEUR </th> <th style="color:black">MESSAGE</th> </tr> 

<?php
//include "DB.php";


$db = mysqli_connect('localhost','root','','aveniremploi');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}



$sql_statement = "SELECT * FROM messages";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $id = $row['id'];
  $mysender = $row['sender']; //SENDER = UTILISATEUR 
	$message = $row['message'];

	echo "<tr>" . "<th>" . $id . "</th>" . "<th>" . $mysender . "</th>" . "<th>" . $message . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
<footer> 
 <!-- <a href="index.php"> Retour à la page principale  </a></footer>-->
</html>