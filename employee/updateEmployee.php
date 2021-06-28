<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:../index.php');
$con=mysqli_connect('localhost','root','','osm');
if($con)
{ 
	$q="SELECT * FROM `employee`";
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
	<title>Update Employee </title>
	<link rel="stylesheet" type="text/css" href="../css/back.css">
	<link rel="stylesheet" type="text/css" href="../css/update.css">

</head>
<body>
<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('../header.php');
?>
<form action="updationEmployee.php" method="post">
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Father Name</th>
		<th>mobileno</th>
		<th>email</th>
		<th>Aadhar No</th>
	</tr>
	<?php
	for($i=1; $i<=$num; $i++)
	{
		$array=mysqli_fetch_array($result);
	?>
	<tr>
		<td><?php echo $array['id']; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $array['id']; ?>"></td>
		<td><input type="text" name="username<?php echo $i; ?>" value="<?php echo $array['name']; ?>"></td>
		<td><input type="text" name="father<?php echo $i; ?>" value="<?php echo $array['father']; ?>"></td>
		<td><input type="text" name="mobileno<?php echo $i; ?>" value="<?php echo $array['mobile']; ?>"></td>
		<td><input type="text" name="email<?php echo $i; ?>" value="<?php echo $array['email']; ?>"></td>
		<td><input type="text" name="aadhar<?php echo $i; ?>" value="<?php echo $array['aadhar']; ?>"></td>
	</tr>
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