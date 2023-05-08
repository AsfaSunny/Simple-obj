<?php 

$servername = 'Localhost';
$username = 'root';
$password = '';
$dbname = 'test';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection Error: " . $conn->connect_error);
}

$sql = "SELECT * FROM oop";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		echo "Id: {$row['Id']}" . "<br>";
		echo "Name: {$row['Name']}" . "<br>";
		echo "City: {$row['City']}" . "<br>";
		echo "<br><br><br>";
	}
} else {
	echo "No Result Found.";
}


$conn->close();
 ?>