<?php 

//include "DB.php";
$db = mysqli_connect('localhost','root','aveniremploi','');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];

$sql_statement = "DELETE FROM messages WHERE id = $selection_id";

$result = mysqli_query($db, $sql_statement);

header ("Location:admin.php");

}

else
{

	echo " La balise forme n'a pas été modifié";

}

?>