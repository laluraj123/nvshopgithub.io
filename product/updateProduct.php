<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:../index.php');
$con=mysqli_connect('localhost','root','','osm');
if($con)
{ 
	$q="SELECT * FROM `product`";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
}
else
{
?>
<script type="text/javascript">
	alert('connection failed');
</script>
<a href="userDashboard.php">Go Back</a>
<?php
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update user </title>
	<link rel="stylesheet" type="text/css" href="../css/update.css">
	<link rel="stylesheet" type="text/css" href="../css/back.css">
	
</head>
<body>
	<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('../header.php');
?>
<form action="updationProduct.php" method="post">
<table>
	<tr>
		<th>Id</th>
		<th>Product name</th>
		<th>Product Company</th>
		<th>Product Price</th>
		<th>Product Quantity</th>
	</tr>
	<?php
	for($i=1; $i<=$num; $i++)
	{
		$array=mysqli_fetch_array($result);
	?>
	<tr>
		<td><?php echo $array['id']; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $array['id']; ?>"></td>
		<td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $array['name']; ?>"></td>
		<td><input type="text" name="company<?php echo $i; ?>" value="<?php echo $array['company']; ?>"></td>
		<td><input type="text" name="price<?php echo $i; ?>" value="<?php echo $array['price']; ?>"></td>
		<td><input type="text" name="qty<?php echo $i; ?>" value="<?php echo $array['qty']; ?>"></td>
	</tr>
	<?php
}
	?>
	<tr>
		<td><input type="submit" value="update" name=""></td>
	</tr>
</table>
<?php
include('../footer.php');
?>
</body>
</html>