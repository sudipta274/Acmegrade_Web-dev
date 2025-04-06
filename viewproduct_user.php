<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:564px;
	height:322px;
	z-index:1;
	top: 96px;
	left: 318px;
}
-->
</style>
</head>

<body>
<div id="Layer1">
  <table width="564" height="42" border="1">
    <tr>
      <th>Product ID </th>
      <th>Product Name </th>
      <th>Manufactuer</th>
      <th>Cost</th>
      <th>Product Type </th>
      <th>Date</th>
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

$sql = "select * from product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  ?>
    <tr>
		
      <td><?php echo $row["pid"]; ?> </td>
      <td><?php echo $row["pname"]; ?> </td>
      <td><?php echo $row["manufacturer"]; ?></td>
      <td><?php echo $row["cost"]; ?></td>
      <td><?php echo $row["ptype"]; ?></td>
      <td><?php echo $row["manufact_date"]; ?></td>
	  <td><input type="text" class="product-quantity" name="quantity" value="1" size="2" /></td><td><input type="submit" value="Add to Cart" class="btnAddAction" /></td>
	  <td> <a href="cart.php?action=add&id=<?php echo $row["pid"]; ?>">Add to Cart</a></td>
    </tr>
 <?php }
} else {
  echo "0 results";
}


$conn->close();
	  ?>
  </table>
</div>
</body>
</html>
