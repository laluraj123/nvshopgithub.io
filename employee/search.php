<?php
$con=mysqli_connect('localhost','root','','osm');
if(!$con)
	exit();
$username=$_POST['search'];
$q="SELECT * FROM `employee` WHERE `name`='$username'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num)
{
	$array=mysqli_fetch_assoc($result);
	$name=$array['name'];
	$id=$array['id'];
	$father=$array['father'];
	$mobile=$array['mobile'];
	$aadhar=$array['aadhar'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search</title>
	<style type="text/css">
		table{
			width: 100%;   height: 200px;
			border: 2px solid black;  background-color: #ffffc7;
		}
		th{
			background-color: #1eae98;
		}
		td{
			text-align: center;
			border: 2px solid #1eae98;
		}
		#a1{
				float:left; background-color: #ffffc7; padding-left: 30px; border-radius: 15px; font-size: 25px; text-decoration: none;color:black; padding-right: 30px; position: absolute;
		}
		#a1:hover{
			color: orange;
		}
	</style>
</head>
<body>
<a id="a1" href="viewEmployee.php">Back</a>
<?php 
include('../header.php');
?>
<table style="margin-top: 100px; margin-bottom: 100px;">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Father Name </th>
		<th>Mobile No</th>
		<th>Aadhar No </th>
	</tr>
	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $father; ?></td>
		<td><?php echo $mobile; ?></td>
		<td><?php echo $aadhar; ?></td>
	</tr>
 	</table>
 <?php
include('../footer.php');
 ?>	
</body>
</html>
<?php 
}
else
{
	?>
	<script type="text/javascript">
		alert('No record Exist');
	</script>
	<h1 style="font-size: 36px;"><a href="viewEmployee.php">Go Back</a></h1>

	<?php 
}
?>