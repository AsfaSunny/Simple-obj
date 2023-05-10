<?php 


$db_name = "mysql:host=localhost;dbname=test";
$user_name = "root";
$password = "";

$conn = new PDO($db_name, $user_name, $password);

$sql = $conn-> query("SELECT * FROM sql_inject");

$result = $sql->fetchAll(PDO::FETCH_NUM);

if (count($result)) {
	foreach ($result as $row) {
		// print_r($row) . "<br>";
		echo "{$row[1]}";
	}
} else {
	echo "No record.";
}


// while ($rows = $sql->fetch(PDO::FETCH_OBJ)) {
// 	// echo "{$rows[0]}. {$rows[1]} - {$rows[2]} -{$rows[3]} <br><br>";
// 	// echo "{$rows['id']}. {$rows['name']} - {$rows['email']} -{$rows['password']} <br><br>";
// 	echo "{$rows->id}. {$rows->name} - {$rows->email} -{$rows->password} <br><br>";
// }



// PDO::FETCH_NUM
// PDO::FETCH_ASSOC

 ?>