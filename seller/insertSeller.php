<?php
$con=mysqli_connect('localhost','root','','osm');
if($con)
{
	$sellername=$_POST['username'];
	$address=$_POST['address'];
	$mobileno=$_POST['mobileno'];
	$email=$_POST['email'];
	$q="INSERT INTO `seller` (`sellername`,`address`,`mobileno`,`email`) VALUES( '$sellername','$address',$mobileno,'$email')";
	$result=mysqli_query($con,$q);
	if($result)
	{
		?>
		<script type="text/javascript">
			alert("Seller Inserted Successfully");
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