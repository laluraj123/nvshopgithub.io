<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:../index.php');
$con=mysqli_connect('localhost','root','','osm');
if($con)
{ 
	$q="SELECT * FROM `seller`";
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
	<title>Delete Seller </title>
	<link rel="stylesheet" type="text/css" href="../css/back.css">
	<link rel="stylesheet" type="text/css" href="../css/delete.css">
</head>
<body>
	<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('../header.php');
?>
<form action="deletionSeller.php" method="post">
<table>
	<tr>
		<th>Id</th>
		<th>Sellername</th>
		<th>Address</th>
		<th>mobileno</th>
		<th>email</th>
		<th>Select To Delete</th>
	</tr>
	<?php
	for($i=1; $i<=$num; $i++)
	{
		$array=mysqli_fetch_array($result);
	?>
	<tr>
		<td><?php echo $array['id']; ?></td>
		<td><?php echo $array['sellername']; ?></td>
		<td><?php echo $array['address']; ?></td>
		<td><?php echo $array['mobileno']; ?></td>
		<td><?php echo $array['email']; ?></td>
		<td><input  type="radio" name="r" value="<?php echo $array['id'];?>"></td>
	</tr>
	<?php
}
	?>
	<tr>
		<td><input type="submit" name="" value="Delete"></td>	
	</tr>
</table>
</form>
<?php
include('../footer.php');
?>
</body>
</html>