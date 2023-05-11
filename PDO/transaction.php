<?php 

try{
	$db_name = "mysql:host=localhost;dbname=test";
	$username = "root";
	$password = "";

	$conn = new PDO($db_name, $username, $password);
	$conn->beginTransaction();

	$ins_sql = $conn->prepare("INSERT INTO `oop`(`Name`, `City`) VALUES (?, ?)");
	$upd_sql = $conn->prepare("UPDATE `city_student` SET `students`=students+1 WHERE `city_name`= ?");

	
	if (!$ins_sql->execute(["Minhaz", "Sylhet"])) {
		throw new Exception("Insert Query is Failed");
	}

	if (!$upd_sql->execute(["Sylhet"])) {
		throw new Exception("Update Query is Failed");
	}

	$conn->commit();

}catch(Exception $e){
	$conn->rollback();
	echo $e->getMessage();
}


 ?>