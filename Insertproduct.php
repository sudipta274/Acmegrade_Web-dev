
<?php
$pid=$_POST["textfield"];
$pname=$_POST["textfield2"];
$manu=$_POST["textfield3"];
$cost=$_POST["textfield4"];
$ptype=$_POST["textfield5"];
$mdate=$_POST["textfield6"];
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

$sql = "INSERT INTO product values('".$pid."','".$pname."','".$manu."','".$cost."','".$ptype."','".$mdate."')";

if ($conn->query($sql) === TRUE) {
  echo "New product record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>