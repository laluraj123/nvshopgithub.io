<?php
$con=mysqli_connect('localhost','root','','osm');
if($con)
{
	$username=$_POST['username'];
	$amount=$_POST['amount'];
	$mobileno=$_POST['mobileno'];
	$email=$_POST['email'];
	$q="INSERT INTO `person` (`username`,`amount`,`mobileno`,`email`) VALUES( '$username','$amount',$mobileno,'$email')";
	$result=mysqli_query($con,$q);
	if($result)
	{
		?>
		<script type="text/javascript">
			alert("Person Inserted Successfully");
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("User Already exist");
		</script>
		<?php
	}
}
else
{
	echo "connection failed";
}

?>
<a href="../userDashboard.php">Go Back</a>