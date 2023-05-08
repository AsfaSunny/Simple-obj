<?php 
include 'database.php';
$obj = new IndexDB();


$table = 'student';
$colName = "student.stu_id, student.stu_name, student.stu_address, classes.class_name, student.stu_phone";
$join = "classes ON student.stu_class = classes.class_id";
$limit = 3;

// $obj->pagination_select('student', '*', $join, null, null, $limit);
$obj->pagination_select($table, '*', $join, null, null, $limit);
$Record = $obj->getResult();

echo "<table border='1' width='500px'>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Course Name</th>
            <th>Phone</th>
        </tr>";

foreach ($Record as list("stu_id" => $Id, "stu_name" => $Name, "stu_address" => $Address, "class_name" => $course, "stu_phone" => $phone)) {
    echo "<tr><td>$Id</td><td>$Name</td><td>$Address</td><td>$course</td><td>$phone</td></tr>";
}

echo "</table>";

$obj->only_pagination($table, $join, null, $limit);





 ?>