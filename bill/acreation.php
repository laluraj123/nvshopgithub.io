<?php
session_start();
$billno=$_SESSION['bno'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GEnerate Bill</title>
	<link rel="stylesheet" type="text/css" href="../css/back.css">
</head>
<body>
<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('../header.php');
?>

<center>

<form action="creation2.php" method="post">
	<table>
		<tr>
			<th></th>
			<th>Item</th>
			<th>Quantity</th>
			<th>Rate</th>
			
	</tr>
	<tr>
			<td><input type="hidden" name="billno" value="$billno" ></td>
			<td><input required type="text" name="item" ></td>
			<td><input required type="qty" name="qty" ></td>
			<td><input required type="number" name="rate" ></td>
			
		</tr>

		<tr>
			<td><input type="submit" value="Add"></td>
		</tr>
		<tr>
			<td><a href="generation.php">Generate Bill</a></td>
		</tr>
	</table>
</form>
</center>
<?php
include('../footer.php');
?>
</body>
</html>
