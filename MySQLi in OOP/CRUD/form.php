<?php 

include 'database.php';
$obj = new IndexDB();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Form</title>
</head>
<body>
	<form method="POST" action="save-data.php">
		<label for="">Name</label>
		<input type="text" name="sname"><br><br>

		<label for="">Address</label>
		<input type="text" name="saddress"><br><br>

		<label for="">Course</label>
		<select name="scourse" id="">
			<?php
				$obj->select_only('classes');
				$result = $obj->getResult();

				foreach ($result as list('class_id' => $cid, 'class_name' => $cls_name)) {
					echo "<option value='$cid'>$cls_name</option>";
				}
			?>
		</select>
		<br><br>

		<label for="">Phone</label>
		<input type="text" name="sphone"><br><br>

		<input type="submit" value="save"><br>
	</form>
	
</body>
</html>