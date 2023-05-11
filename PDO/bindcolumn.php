<?php 

	$db_name = "mysql:host=localhost;dbname=test";
	$username = "root";
	$password = "";

	$conn = new PDO($db_name, $username, $password);
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

	$sql = $conn->prepare("SELECT name, email FROM sql_inject");
	$sql->execute();

	// $sql->bindColumn("name", $NAME);
	// $sql->bindColumn("email", $EMAIL);

	$sql->bindColumn(1, $NAME);
	$sql->bindColumn(2, $EMAIL);


	while ($row = $sql->fetch()) {
		echo $NAME . " - " . $EMAIL . "<br>";
	}



 ?>