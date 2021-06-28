<?php
session_start();
$_SESSION['username']=$_POST['username'];
$con=mysqli_connect('localhost','root','','osm');
if($con)
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$mobileno=$_POST['mobileno'];
	$email=$_POST['email'];
	$q="INSERT INTO `user` (`username`,`password`,`mobileno`,`email`) VALUES( '$username','$password',$mobileno,'$email')";
	$result=mysqli_query($con,$q);
	if($result)
	{
		?>
		<script type="text/javascript">
			alert("User Inserted Successfully");
		</script>
		<?php
		header('Location:userDashboard.php');
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

<a href="userDashboard.php">Go Back</a>