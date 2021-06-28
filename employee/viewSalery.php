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
	<title>View Salery </title>
	<style type="text/css">
		table{
			width: 100%;
			height: 200px;
			border: 2px solid black;
			background-color: #ffffc7;
		}
		th{
			background-color: #1eae98;
		}
		td{
			text-align: center;
			border: 2px solid #1eae98;
		}
		#a1{
				float:left; background-color: #ffffc7; padding-left: 30px; border-radius: 15px;
			font-size: 25px; text-decoration: none;color:black; padding-right: 30px;
			position: absolute;
		}
		#a1:hover{
			color: orange;
		}
	</style>
</head>
<body>
<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('../header.php');
?>

<table  border="0" >
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
		<td><?php echo $array['id']; ?></td>
		<td><?php echo $array['username']; ?></td>
		<td><?php echo $array['jan']; ?></td>
		<td><?php echo $array['feb']; ?></td>
		<td><?php echo $array['mar']; ?></td>
		<td><?php echo $array['apr']; ?></td>
		<td><?php echo $array['may']; ?></td>
		<td><?php echo $array['jun']; ?></td>
		<td><?php echo $array['jul']; ?></td>
		<td><?php echo $array['aug']; ?></td>
		<td><?php echo $array['sep']; ?></td>
		<td><?php echo $array['oct']; ?></td>
		<td><?php echo $array['nov']; ?></td>
		<td><?php echo $array['dec']; ?></td>
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