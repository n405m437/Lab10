<?php

$id = $_POST["user"];
$content = $_POST["post"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "n405m437", "Moh7goh7", "n405m437");
$idcheck = "SELECT user_id FROM Users WHERE user_id='" . $id . "'";

$check = mysqli_query($mysqli, $idcheck);

if(mysqli_num_rows($check) > 0) {
	$add = "INSERT INTO Posts (author_id,content) VALUES ('" . $id . "' , '" . $content . "')";
	if($content == '') {
		echo "Content cannot be empty<br>";
	}

	else if(mysqli_query($mysqli, $add)){

		echo "Post was saved.<br>";
	
	}
	else{
		echo "Error: " . $add . "<br>" . $mysqli->error;
		echo "<br><br>";
		echo "Posts was unabled to be saved make sure the Text fields for Username and Post are not empty.<br>";
	}
}
else{
	echo " User doesnt exist please refer to the CreateUser.html page to create a user.<br>";
}
$mysqli->close();

?>
