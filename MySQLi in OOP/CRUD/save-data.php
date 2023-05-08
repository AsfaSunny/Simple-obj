<?php 
include 'database.php';
$obj = new IndexDB();


$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$scourse = $_POST['scourse'];
$sphone = $_POST['sphone'];

// echo $sname;

$values = ["stu_name"=>$sname, "stu_address"=>$saddress, "stu_class"=>$scourse, "stu_phone"=>$sphone];

if ($obj->insert("student", $values)) {
    echo "<h2>Inserted Successfully!!!</h2";
} else {
    echo "<h2>Insertation Error 404!!!</h2";
}

 ?>