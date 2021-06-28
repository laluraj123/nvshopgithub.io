<?php
$con=mysqli_connect('localhost','root','','osm');
if($con)
{
	$name=$_POST['name']; //product name 
	$company=$_POST['company']; // product_company
	$price=$_POST['price']; // product_pric e
	$qty=$_POST['qty']; // qty
	$q="INSERT INTO `product` (`name`,`company`,`price`,`qty`) VALUES( '$name','$company',$price,$qty)";
	$result=mysqli_query($con,$q);
	if($result)
	{
		?>
		<script type="text/javascript">
			alert("Product Inserted Successfully");
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Product Already exist");
		</script>
		<?php
	}
}
else
{
	echo "connection failed";
}

?>
<a href="../userDashboard.php">Go Back</a>