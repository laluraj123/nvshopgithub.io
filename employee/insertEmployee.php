<?php
$con=mysqli_connect('localhost','root','','osm');
if($con)
{
	$name=$_POST['username'];
	$father=$_POST['father'];
	$mobileno=$_POST['mobileno'];
	$email=$_POST['email'];
	$aadhar=$_POST['aadhar'];
	$q="INSERT INTO `employee` (`name`,`father`,`mobile`,`email`,`aadhar`) VALUES( '$name','$father',$mobileno,'$email','$aadhar')";
	$result=mysqli_query($con,$q);
	$r="INSERT INTO `salery` (`username`) VALUES('$name')";
	mysqli_query($con,$r);
	if($result)
	{
		?>
		<script type="text/javascript">
			alert("Employee Inserted Successfully");
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