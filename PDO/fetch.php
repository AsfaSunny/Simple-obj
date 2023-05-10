<?php 


$db_name = "mysql:host=localhost;dbname=test";
$user_name = "root";
$password = "";

$conn = new PDO($db_name, $user_name, $password);


// $id = 2;
// $city = 'Feni';
$sql = $conn-> prepare("SELECT City,Name FROM oop");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
echo "</pre>";

?>