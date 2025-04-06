<%@LANGUAGE="JAVASCRIPT" CODEPAGE="1252"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer1 {	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 272px;
	top: 100px;
}
-->
</style>
</head>

<body>
<div id="Layer1">
  <form id="form1" name="form1" method="post" action="viewproduct.php">
    <p>View Product</p>
    <p>Select Product ID</p>
    <p>
      <select name="select">
        <?php
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

$sql = "select pid from product;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  ?>
        <option><?php echo $row["pid"];   ?></option>
        <?php }
} else {
  echo "0 results";
}


$conn->close();
	  ?>
      </select>
      <input type="submit" name="Submit" value="Submit" />
    </p>
  </form>
</div>
</body>
</html>
