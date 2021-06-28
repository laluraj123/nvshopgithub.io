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
	<title>view user </title>
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
		form{
				float: right; margin-right: 50px; font-size: 35px; margin-top: 10px; margin-bottom: 10px;
		}
	</style>
</head>
<body>
<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('header.php');
?>
<form method="post" action="search.php">
	<input style="font-size: 26px;" type="text" name="search" placeholder="Search User name "> <input style="font-size: 26px;" type="submit" value="Search">
</form>

<table  border="0" >
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
		<td><?php echo $array['id']; ?></td>
		<td><?php echo $array['username']; ?></td>
		<td><?php echo $array['password']; ?></td>
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