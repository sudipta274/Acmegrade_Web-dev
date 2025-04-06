<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer2 {
	position:absolute;
	width:180px;
	height:47px;
	z-index:1;
	left: 681px;
	top: 15px;
}
-->
</style>
<script type="text/javascript">
function show()
{
alert("Thank you!!! Order placed");
window.location.href = "dashboard_user.php";
}
</script>
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
$user=$_POST["name1"];
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
      <td><a href="delete_cart.php?val=<?php echo $row["pname"]; ?>&amp;val1=<?php echo $row["price"];?>&amp;val2=<?php echo $row["quantity"];?>">Delete Cart</a></td>
	
    </tr>
 <?php }
} else {
  echo "0 results";
}


$conn->close();
	  ?>
  </table>
  <div id="Layer2">
    <form id="form1" name="form1" method="post" action="">
      <input type="submit" name="Submit" value="Place Order" onclick="show();"/>
    </form>
  </div>
</div>
</body>
</html>
