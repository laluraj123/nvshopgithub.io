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
	$name[$i]=$_POST['name'.$i];
	$company[$i]=$_POST['company'.$i];
	$price[$i]=$_POST['price'.$i];
	$qty[$i]=$_POST['qty'.$i];
}
/*  $i=1; for print the vairable  
echo $username[$i];
*/
for($i=1; $i<=$record; $i++)
{
$q="UPDATE `product` SET `name`='$name[$i]',`company`='$company[$i]',`price`='$price[$i]', `qty`='$qty[$i]' WHERE `id`='$id[$i]'";
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