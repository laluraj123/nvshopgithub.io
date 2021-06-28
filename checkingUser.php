<?php
session_start();
$_SESSION['username']=$_POST['username'];
if(isset($_POST['username']))
{
$con=mysqli_connect('localhost','root','','osm');
if($con)
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$q="SELECT * FROM `user` WHERE `username`='$username' && `password`='$password'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($num)
	{
		header('Location:userDashboard.php');
	}		
	else
	{
		?>
		<script type="text/javascript">
			alert('Invalid Username Or password');
		</script>
		<h1><a href="index.php">Try Again</a></h1>
		<?php
	}
}
else
	echo "connection fialed";
mysqli_close($con);
}
else
header('location:index.php')
?>