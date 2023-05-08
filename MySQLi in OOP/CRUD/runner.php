<?php 

include 'database.php';

$obj = new IndexDB();




// $obj->insert('oop', ['Name'=>'Naim', 'City'=>'Chittagong']);

// echo "Insert result is: ";
// print_r($obj->getResult()); 




// $obj->update('oop', ['Name'=>'Omar', 'City'=>'Mecca'], 'id = "4"');
// $obj->update('oop', ['City'=>'Feni'], 'City = "Lemua"');

// echo "Updated result is: ";
// print_r($obj->getResult());




// $obj->delete('oop', 'Id = "4"');
// // $obj->delete('oop', 'City = "Feni"');

// echo "Deleted result is: ";
// print_r($obj->getResult());



// $obj->select_SQL('SELECT * FROM oop');

// echo "All Selected result is: ";
// print_r($obj->getResult());



// $obj->select_only('oop', '*', null, 'city="Feni"', 'Name', null);
// // $obj->select_only('oop', '*', null, 'city="Feni"', 'Name', 2);
// echo "<br>";
// echo "All Selected result is: ";
// print_r($obj->getResult());




$table = 'student';
$colName = "student.stu_id, student.stu_name, student.stu_address, classes.class_name, student.stu_phone";
$join = "classes ON student.stu_class = classes.class_id";
$limit = 2;

// $obj->pagination_select('student', '*', $join, null, null, $limit);
$obj->pagination_select($table, $colName, $join, null, null, $limit);

echo "<br>";
echo "All Selected result is: ";
print_r($obj->getResult());

$obj->only_pagination($table, $join, null, $limit);
 ?>