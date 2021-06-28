<?php

$size=sizeof($_POST);
$record=$size/5;

$con=mysqli_connect('localhost','root','','osm');
if($con)
{
//$i=1;(for concatination of id)
//echo $_POST['id'.$i];

for($i=1; $i<=$record; $i++)
{
	$id[$i]=$_POST['id'.$i];
	$sellername[$i]=$_POST['sellername'.$i];
	$address[$i]=$_POST['address'.$i];
	$mobileno[$i]=$_POST['mobileno'.$i];
	$email[$i]=$_POST['email'.$i];
}
/*  $i=1; for print the vairable  
echo $username[$i];
*/
for($i=1; $i<=$record; $i++)
{
$q="UPDATE `seller` SET `sellername`='$sellername[$i]',`address`='$address[$i]',`mobileno`='$mobileno[$i]', `email`='$email[$i]' WHERE `id`='$id[$i]'";
	mysqli_query($con, $q);
}
?>
<script type="text/javascript">
	alert('Data Update Successfully');
</script>
<?php
}

else
{
?>
<script type="text/javascript">
	alert('Data Update Successfully');
</script>
<?php	
}
?>
<a href="../userDashboard.php">Go Back</a>