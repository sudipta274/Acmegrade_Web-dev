<?php
$quan=$_POST["quantity"];
$user=$_POST["username"];
$pname=$_POST["name"];
$price=$_POST["price"];

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

$sql = "INSERT INTO cart values('".$quan."','".$user."','".$pname."','".$price."')";

if ($conn->query($sql) === TRUE) {
  echo "Product added to cart";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>