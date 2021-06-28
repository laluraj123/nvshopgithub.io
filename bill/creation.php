<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:../index.php');
$con=mysqli_connect('localhost','root','','osm');
if($con)
{
echo "connection done";
$name=$_POST['name'];
$date=$_POST['date'];
$r=$_POST['billno'];
$item=$_POST['item'];
$qty=$_POST['qty'];
$rate=$_POST['rate'];
$amount=$qty*$rate;
$_SESSION['bno']=$_POST['billno'];

$q="INSERT INTO `bill` (`billno`,`item`,`qty`,`rate`,`amount`,`name`,`date`) VALUES ($r,'$item',$qty,$rate,$amount,'$name','$date' ) ";
$result=mysqli_query($con,$q);
if($result)
{
	header('Location:aCreation.php');
}
else
{
	echo "Something went wrong";
	?>
	<a href="createBill.php">Try again</a>
	<?php
}

}
else
echo "connection failed";
mysqli_close($con);
?>
