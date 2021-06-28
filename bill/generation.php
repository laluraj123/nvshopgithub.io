<?php
session_start();
$billno=$_SESSION['bno'];
$con=mysqli_connect('localhost','root','','osm');
if($con)
{
	$q="SELECT * FROM `bill` WHERE `billno`='$billno'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
}
else
echo "connection failed";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Generate Bill</title>
	<link rel="stylesheet" type="text/css" href="./css/back.css">

		<link rel="stylesheet" type="text/css" href="../css/generation.css">

</head>
<body>
<a id="a1" href="../bill/createBill.php">Back</a>
<?php
include('../header.php');
?>
<center>
	<table cellspacing="0">
		<tr>
			<th>Consignee Name</th>
			<th>Date</th>
			<th>product Name</th>
			<th>product Qty</th>
			<th>Product Rate</th>
			<th>Product Amount</th>
		</tr>
		<?php
		$amount=0;
		for($i=1; $i<=$num; $i++)
		{
			$array=mysqli_fetch_array($result);
		?>
		<tr>
			<td><?php echo $array['name']; ?></td>
			<td><?php echo $array['date']; ?></td>
			<td><?php echo $array['item'];  ?></td>
			<td><?php echo $array['qty']; ?></td>
			<td><?php echo $array['rate']; ?></td>
			<td><?php echo $array['amount']; ?></td>
			<?php 
				 $amount=$amount+$array['amount'];
			  ?>
		</tr>
		<?php
			}
			$gstAmount=($amount*18)/100;
			$grandTotal=$gstAmount+$amount;
			
		?>
		<tr>
			<td colspan="5" align="center">Total </td>
			<td><?php echo $amount;  ?></td>
		</tr>
		<tr>
			<td colspan="5" align="center">gst 18% </td>
			<td><?php echo $gstAmount;  ?></td>
		</tr>
		<tr>
			<td colspan="5" align="center">Grand Total </td>
			<td><?php echo $grandTotal;  ?></td>
		</tr>

	</table>
</center>

<?php
include('../footer.php')
?>
<?php
session_destroy();
?>
</body>
</html>