<?php

$id = $_POST["user"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "n405m437", "Moh7goh7", "n405m437");

if($mysqli->connect_errno){
	printf("Connect failed: %s/n", $mysqli->connect_error);
	exit();

}

$add = "INSERT INTO Users (user_id) VALUES ('" . $id . "')";

if(mysqli_query($mysqli, $add)){

	echo "New User created.<br>";
	
}
else{
	echo "Error: " . $add . "<br>" . $mysqli->error;
	echo "<br><br>";
	echo "User ID is not valid<br>";
}
$mysqli->close();

?>
