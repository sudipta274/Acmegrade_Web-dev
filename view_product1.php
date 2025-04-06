<?php

session_start();

include 'configurtion.php';





?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shopping Cart</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <style>
        .product{
            border: 1px solid #eaeaec;
            margin: 2px 2px 8px 2px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table,th,tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }

    #Layer1 {
	position:absolute;
	width:252px;
	height:42px;
	z-index:1;
	left: 8px;
	top: 13px;
}
    .style1 {
	font-size: 18px;
	font-weight: bold;
}
    </style>
</head>

<body>
<div class="container" style="width: 65%">

    <h2 style="text-transform: uppercase;">	Shopping Cart</h2>
<?php $val1=$_POST["name"];?>
    <div class="style1" id="Layer1">Hello <?php echo $val1; ?></div>
    <?php
    $query = "select * from product";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){

        while($row = mysqli_fetch_array($result)){
            ?>
            <div class="col-md-3" style="float: left;">
                <form method="post" action="cart.php">
                  <div class="product">
                            <h5 class="text-info"><?php echo $row["pname"];?></h5>
                        <h6 class="text-danger">INR <?php echo $row["cost"];?>.00</h6>
                        <input type="text" name="quantity" class="form-control" value="1">
						<input type="hidden" name="username" value="<?php echo $val1;?>">
                        <input type="hidden" name="name" value="<?php echo $row["pname"];?>">
                        <input type="hidden" name="price" value="<?php echo $row["cost"];?>">
                        <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to cart">
                  </div>
                </form>
            </div>
            <?php
        }
    }
    ?>

   
</div>
</body>
</html>