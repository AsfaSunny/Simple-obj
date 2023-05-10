<?php 


$db_name = "mysql:host=localhost;dbname=test";
$user_name = "root";
$password = "";

$conn = new PDO($db_name, $user_name, $password);


// $id = 2;
// $city = 'Feni';
// $sql = $conn-> prepare("SELECT * FROM oop WHERE City = :city AND Id >= :id");

// $sql->bindValue(1, $city, PDO::PARAM_STR);
// $sql->bindValue(2, $id, PDO::PARAM_INT);

// $sql->execute(array(':city' => $city, ':id' => $id));

// $result = $sql->fetchAll(PDO::FETCH_NUM);

// if (count($result)) {
// 	foreach ($result as $row) {
// 		// print_r($row) . "<br>";
// 		echo "{$row[0]} - {$row[1]} - {$row[2]}";
// 	}
// } else {
// 	echo "No record.";
// }


$name = "Ramim";
$city = 'Dhaka';

$sql = $conn-> prepare("INSERT INTO oop (Name, City) VALUES (:name, :city)");

$sql->execute(array(':name' => $name, ':city' => $city));

 ?>