<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div id="Layer1">
  <table width="564" height="42" border="1">
    <tr>
      
      <th>Product Name </th>
   
      <th>Cost</th>
     
      <th>Quantity</th>
    </tr>
	<?php
	session_start();
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "acme24_jul";
$usertype1="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$user=$_POST["select"];
$sql = "select * from cart where username='".$user."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  ?>
    <tr>
		
      <td><?php echo $row["pname"]; ?> </td>
      <td><?php echo $row["price"]; ?> </td>
      <td><?php echo $row["quantity"]; ?></td>
      
	
    </tr>
 <?php }
} else {
  echo "0 results";
}


$conn->close();
	  ?>
  </table>
</body>
</html>
