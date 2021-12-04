<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "n405m437", "Moh7goh7", "n405m437");

if($mysqli->connect_errno){
	printf("Connect failed: %s/n", $mysqli->connect_error);
	exit();

}

$usertable = "SELECT user_id FROM Users";

echo "<table border ='1'>
<tr>
<th>User-Id</th>
</tr>";

$result = mysqli_query($mysqli, $usertable);
if(mysqli_num_rows($result)>0){

	while ($row = mysqli_fetch_array($result)) {
        	echo "<tr>";
		echo "<td>" . $row["user_id"] . "</td>";
		echo "</tr>";     
	} 
}
else{
	echo "Error: " . $usertable . "<br>" . $mysqli->error;
	echo "<br><br>";
	echo "User ID is not valid<br>";
}
echo "</table>";
$mysqli->close();

?>


