<?php
$pname=$_GET["val"];
$price=$_GET["val1"];
$quantity=$_GET["val2"];

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

$sql = "delete from cart where pname='".$pname."' and price='".$price."' and quantity='".$quantity."'";

if ($conn->query($sql) === TRUE) {
  echo "Product removed from cart";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
