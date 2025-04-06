<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer1 {	position:absolute;
	width:619px;
	height:227px;
	z-index:1;
	left: 363px;
	top: 119px;
}
#Layer2 {
	position:absolute;
	width:373px;
	height:41px;
	z-index:2;
	left: 8px;
	top: 14px;
}
-->
</style>
</head>

<body>
<div id="Layer1">
<?php $val1=$_GET["val"]; ?>
  <form id="form1" name="form1" method="post" action="view_product1.php">
  <input type="hidden" name="name" value=<?php echo $val1;?> />
    <input type="submit" name="Submit" value="View Product" />
  </form>
  <p><a href="#"></a></p>
  <p>&nbsp;</p>
  <form id="form2" name="form2" method="post" action="view_cart.php">
    <label>
	<input type="hidden" name="name1" value=<?php echo $val1;?> />
    <input type="submit" name="Submit2" value="View Cart" />
    </label>
  </form>
  <p><a href="#"></a></p>
</div>
<div id="Layer2"><strong>WELCOME</strong> <?php echo $val1; ?></div>
</body>
</html>
