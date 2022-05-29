<?php 

//include "DB.php";
$db = mysqli_connect('localhost','root','','aveniremploi');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

include "messages.php";

?>

<form action="sendadmin.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT id FROM messages";

$myresult = mysqli_query($db, $sql_command);

while($id_rows = mysqli_fetch_assoc($myresult))
{
	$id = $id_rows['id'];
	echo "<option value=$id>".$id."</option>";
}

?>
</select>

<button>SUPPRIMER</button>
</form>