<?php
$pid=$_POST["select2"];
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

$sql = "delete from product where pid='".$pid."'";

if ($conn->query($sql) === TRUE) {
  echo "Product Deleted";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>