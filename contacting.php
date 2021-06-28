<?php
$con=mysqli_connect('localhost','root','','osm');
if($con)
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$country=$_POST['country'];
	$subject=$_POST['subject'];

	$q="INSERT INTO `contact` (`firstName`,`lastName`, `country`,`subject`) VALUES('$firstname','$lastname','$country','$subject')";
	$result=mysqli_query($con,$q);
	
	?>
	<script type="text/javascript">
		alert('Thanks for your contacting us. ')
	</script>
	<?php
}
else
	echo "Connection failed";
mysqli_close($con);
?>
<a href="userDashboard.php">Go back </a>