
<?php
$userid=$_POST["textfield"];
$user=$_POST["textfield2"];
$pass=$_POST["textfield3"];
$usertype=$_POST["select"];
$date=$_POST["textfield4"];
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "acme24_jul";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user values('".$userid."','".$user."','".$pass."','".$usertype."','".$date."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>