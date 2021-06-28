<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:../index.php');
$con=mysqli_connect('localhost','root','','osm');
if($con)
{
echo "connection done";
$r=$_SESSION['bno'];
$item=$_POST['item'];
$qty=$_POST['qty'];
$rate=$_POST['rate'];
$amount=$qty*$rate;
$q="INSERT INTO `bill` (`billno`,`item`,`qty`,`rate`,`amount`) VALUES ($r,'$item',$qty,$rate,$amount) ";
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
