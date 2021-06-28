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
	<title>view user </title>
	<link rel="stylesheet" type="text/css" href="../css/back.css">
	<link rel="stylesheet" type="text/css" href="../css/view.css">
	<style type="text/css">
	form{
				float: right; margin-right: 50px; font-size: 35px; margin-top: 10px; margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('../header.php');
?>
<form method="post" action="search.php">
	<input style="font-size: 26px;" type="text" name="search" placeholder="Search Product name "> <input style="font-size: 26px;" type="submit" value="Search">
</form>
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
		<td><?php echo $array['id']; ?></td>
		<td><?php echo $array['name']; ?></td>
		<td><?php echo $array['company']; ?></td>
		<td><?php echo $array['price']; ?></td>
		<td><?php echo $array['qty']; ?></td>
	</tr>
	<?php
}
	?>
</table>
<?php
include('../footer.php');
?>
</body>
</html>