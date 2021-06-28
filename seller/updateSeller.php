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
	<title>Update Seller </title>
	<link rel="stylesheet" type="text/css" href="../css/back.css">
	<link rel="stylesheet" type="text/css" href="../css/update.css">
</head>
<body>
<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('../header.php');
?>
<form action="updationseller.php" method="post">
<table>
	<tr>
		<th>Id</th>
		<th>Sellername</th>
		<th>Address</th>
		<th>mobileno</th>
		<th>email</th>
	</tr>
	<?php
	for($i=1; $i<=$num; $i++)
	{
		$array=mysqli_fetch_array($result);
	?>
	<tr>
		<td><?php echo $array['id']; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $array['id']; ?>"></td>
		<td><input type="text" name="sellername<?php echo $i; ?>" value="<?php echo $array['sellername']; ?>"></td>
		<td><input type="text" name="address<?php echo $i; ?>" value="<?php echo $array['address']; ?>"></td>
		<td><input type="text" name="mobileno<?php echo $i; ?>" value="<?php echo $array['mobileno']; ?>"></td>
		<td><input type="text" name="email<?php echo $i; ?>" value="<?php echo $array['email']; ?>"></td>
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