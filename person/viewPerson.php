<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:../index.php');
$con=mysqli_connect('localhost','root','','osm');
if($con)
{ 
	$q="SELECT * FROM `person`";
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
	<title>view Person </title>
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
	<input style="font-size: 26px;" type="text" name="search" placeholder="Search User name "> <input style="font-size: 26px;" type="submit" value="Search">
</form>
<table>
	<tr>
		<th>Id</th>
		<th>name</th>
		<th>Amount</th>
		<th>mobileno</th>
		<th>email</th>
	</tr>
	<?php
	for($i=1; $i<=$num; $i++)
	{
		$array=mysqli_fetch_array($result);
	?>
	<tr>
		<td><?php echo $array['id']; ?></td>
		<td><?php echo $array['username']; ?></td>
		<td><?php echo $array['amount']; ?></td>
		<td><?php echo $array['mobileno']; ?></td>
		<td><?php echo $array['email']; ?></td>
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