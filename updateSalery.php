<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:../index.php');
$con=mysqli_connect('localhost','root','','osm');
if($con)
{ 
	$q="SELECT * FROM `salery`";
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
<form action="updationEmployee.php" method="post">
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>January </th>
		<th>February</th>
		<th>March</th>
		<th>April</th>
		<th>May</th>
		<th>June</th>
		<th>July</th>
		<th>August</th>
		<th>September</th>
		<th>October</th>
		<th>November</th>
		<th>December</th>
	</tr>
	<?php
	for($i=1; $i<=$num; $i++)
	{
		$array=mysqli_fetch_array($result);
	?>
	<tr>
		<td><?php echo $array['id']; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $array['id']; ?>"></td>
		<td><input type="text" name="username<?php echo $i; ?>" value="<?php echo $array['username']; ?>"></td>
		<td><input type="text" name="jan<?php echo $i; ?>" value="<?php echo $array['jan']; ?>"></td>
		<td><input type="text" name="feb<?php echo $i; ?>" value="<?php echo $array['feb']; ?>"></td>
		<td><input type="text" name="mar<?php echo $i; ?>" value="<?php echo $array['mar']; ?>"></td>
		<td><input type="text" name="apr<?php echo $i; ?>" value="<?php echo $array['apr']; ?>"></td>
		<td><input type="text" name="may<?php echo $i; ?>" value="<?php echo $array['may']; ?>"></td>
		<td><input type="text" name="jun<?php echo $i; ?>" value="<?php echo $array['jun']; ?>"></td>
		<td><input type="text" name="jul<?php echo $i; ?>" value="<?php echo $array['jul']; ?>"></td>
		<td><input type="text" name="aug<?php echo $i; ?>" value="<?php echo $array['aug']; ?>"></td>
		<td><input type="text" name="sep<?php echo $i; ?>" value="<?php echo $array['sep']; ?>"></td>
		<td><input type="text" name="oct<?php echo $i; ?>" value="<?php echo $array['oct']; ?>"></td>
		<td><input type="text" name="nov<?php echo $i; ?>" value="<?php echo $array['nov']; ?>"></td>
		<td><input type="text" name="dec<?php echo $i; ?>" value="<?php echo $array['dec']; ?>"></td>
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