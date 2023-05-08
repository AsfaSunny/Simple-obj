<?php 

session_start();
if (isset($_SESSION['id'])) {
	header("location: dashboard.php");
}


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "test";

$connection = new mysqli($servername, $username, $password, $db_name);


if ($connection->connect_error) {
   die("Connection failed: " . $connection->connect_error);
}




 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>SQL Injection Proof</title>
  <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	<div id="main">
    <div id="header">
      <h1>User Login</h1>
    </div>
    <div id="content">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

        <div class="form-group">
          <label>E-mail</label>
          <input  type="text" name="email" autocomplete="off" />
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" />
        </div>

        <input type="submit" class="btn" name="submit" id="submit" value="Submit" />

      </form>
      
      <?php 

        if (isset($_POST['submit'])) {
          if (!isset($_POST['email']) || $_POST['email'] == '') {
            echo "<div class='message error'>All The Fields Required to fills. </div>";
          } else if (!isset($_POST['email']) || $_POST['email'] == '') {
            echo "<div class='message error'>All The Fields Required to fills. </div>";
          } else {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $sql = $connection->prepare("SELECT * FROM sql_inject WHERE email = ? AND password = ?");
            $sql->bind_param("ss", $email, $password);
            $sql->execute();

            $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";
            // exit;

            if (count($result) > 0) {
              session_start();

              $_SESSION['id'] = $result[0]['id'];
              $_SESSION['name'] = $result[0]['name'];
              $_SESSION['email'] = $result[0]['email'];

              header("location: dashboard.php"); 
            } else {
              echo "<div class='message error'>Incorrect Email or Password</div>";
            }
            $sql->close();
          }
        }
        $connection->close();
       ?>
    </div>
  </div>
 	
 </body>
 </html>