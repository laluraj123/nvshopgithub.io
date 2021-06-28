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
	<title>Delete Employee</title>
	<link rel="stylesheet" type="text/css" href="../css/delete.css">
	<style type="text/css">
		
	</style>
</head>
<body>
<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('../header.php');
?>
<form action="deletionEmployee.php" method="post">
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Father</th>
		<th>mobileno</th>
		<th>email</th>
		<th>Aadhar No</th>
		<th>Select To Delete</th>
	</tr>
	<?php
	for($i=1; $i<=$num; $i++)
	{
		$array=mysqli_fetch_array($result);
	?>
	<tr>
		<td><?php echo $array['id']; ?></td>
		<td><?php echo $array['name']; ?></td>
		<td><?php echo $array['father']; ?></td>
		<td><?php echo $array['mobile']; ?></td>
		<td><?php echo $array['email']; ?></td>
		<td><?php echo $array['aadhar']; ?></td>
		<td><input  type="radio" name="r" value="<?php echo $array['id'];?>"></td>
	</tr>
	<?php
}
	?>
	<tr>
		<td colspan="6"><input id="input1" style="" type="submit" name="" value="Delete"></td>	
	</tr>
</table>
</form>
<?php
include('../footer.php');
?>
</body>
</html>