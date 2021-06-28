<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:../index.php');
$con=mysqli_connect('localhost','root','','osm');
if($con)
{ 
	$q="SELECT * FROM `user`";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
}
else
{
?>
<script type="text/javascript">
	alert('connection failed');
</script>
<a href="adminDashboard.php">Go Back</a>
<?php
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update user </title>
	<link rel="stylesheet" type="text/css" href="../css/back.css">
	<link rel="stylesheet" type="text/css" href="../css/update.css">

</head>
<body>
<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('../header.php');
?>
<form action="updationUser.php" method="post">
<table>
	<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Password</th>
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
		<td><input type="text" name="username<?php echo $i; ?>" value="<?php echo $array['username']; ?>"></td>
		<td><input type="text" name="password<?php echo $i; ?>" value="<?php echo $array['password']; ?>"></td>
		<td><input type="text" name="mobileno<?php echo $i; ?>" value="<?php echo $array['mobileno']; ?>"></td>
		<td><input type="text" name="email<?php echo $i; ?>" value="<?php echo $array['email']; ?>"></td>
	</tr>
	<?php
}
	?>
	<tr>
		<td colspan="6"><input id="input1" style="" type="submit" name="" value="Update"></td>	
	</tr>
</table>
<?php
include('../footer.php');
?>
</body>
</html>