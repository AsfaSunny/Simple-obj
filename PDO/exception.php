<?php 

try{
	$db_name = "mysql:host=localhost;dbname=test";
	$username = "root";
	$password = "";

	$conn = new PDO($db_name, $username, $password);

	$sql = $conn->prepare("SELECT * FROM sql_inject");
	$sql->execute();

	$error = $sql->errorInfo();

	if ($error[1]) {
		echo $error[2];
	} else {
		$result = $sql->FetchAll(PDO::FETCH_ASSOC);

		echo "<pre>";
		print_r($error);
		echo "</pre>";
	}

}catch(PDOException $e){
	echo $e->getMessage();
}


 ?>