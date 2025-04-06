<?php

$user=$_POST["username"];
$pass=$_POST["textfield"];
$usertype=$_POST["select"];
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "acme24_jul";
$user1="";
$pass1="";
$usertype1="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select username, password,usertype from user where username='".$user."' and usertype='".$usertype."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $user1=$row["username"];
	$pass1=$row["password"];
	$usertype1=$row["usertype"];
  }
} else {
  echo "0 results";
}
if($user==$user1 && $pass==$pass1 &&  $usertype==$usertype1)
{
if($usertype1=="Vendor")
{
header("Location:dashboard_admin.html");
}
if($usertype1=="Customer")
{
header("Location:dashboard_user.php?val=".$user1);
}
}
else
{
echo "<h3>UnSuccessful login</h3>";
}
$conn->close();
?>