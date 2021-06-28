<?php
$con=mysqli_connect('localhost','root','','osm');
if($con)
{
	$value=$_POST['r'];
	$q="DELETE FROM `person` WHERE `id`=$value";
	$result=mysqli_query($con,$q);
	if($result)
	{
		?>
		<script type="text/javascript">
			alert('Data Deleted Successfully');
		</script>
		<?php
		 ?>
		 <a href="../userDashboard.php">Go Back</a>
		 <?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert('Data Deleted Successfully');
		</script>
		<?php
		 ?>
		 <a href="../userDashboard.php">Go Back</a>
		 <?php
	}
}
else
{
	echo "Connection failed";
}
?>