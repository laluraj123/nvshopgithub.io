
<?php

$con=mysqli_connect('localhost','root','','osm');
if(!$con)
	echo "Connecton failed";
$total=sizeof($_POST);
$record=$total/14;
//echo $record ;  To know the actual record

for($i=1; $i<=$record; $i++)
{
$id[$i]=$_POST['id'.$i];
$username[$i]=$_POST['username'.$i];
$jan[$i]=$_POST['jan'.$i];
$feb[$i]=$_POST['feb'.$i];
$mar[$i]=$_POST['mar'.$i];
$apr[$i]=$_POST['apr'.$i];
$may[$i]=$_POST['may'.$i];
$jun[$i]=$_POST['jun'.$i];
$jul[$i]=$_POST['jul'.$i];
$aug[$i]=$_POST['aug'.$i];
$sep[$i]=$_POST['sep'.$i];
$oct[$i]=$_POST['oct'.$i];
$nov[$i]=$_POST['nov'.$i];
$dec[$i]=$_POST['dec'.$i];
}

for($i=1; $i<=$record; $i++)
{
$q="UPDATE `salery` SET `username`='$username[$i]',
						`jan`='$jan[$i]',
						`feb`=$feb[$i], 
						`mar`='$mar[$i]',`apr`='$apr[$i]',`may`='$may[$i]',`jun`='$jun[$i]',`jul`='$jul[$i]',`aug`='$aug[$i]',`sep`='$sep[$i]',`oct`='$oct[$i]',`nov`='$nov[$i]',`dec`='$dec[$i]' WHERE `id`='$id[$i]' ";
mysqli_query($con,$q);
}
?>
<script type="text/javascript">
	alert('Salery Updated Successfully');
</script>
<h1><a href="../userDashboard.php">Go Back</a></h1>
<?php

mysqli_close($con);

?>
