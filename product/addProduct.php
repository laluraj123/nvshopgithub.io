<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:../index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>add user </title>
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<style type="text/css">
		#a1{
				float:left; background-color: #ffffc7; padding-left: 30px; border-radius: 15px;
			font-size: 25px; text-decoration: none;color:black; padding-right: 30px;
			position: absolute;
		}
		#a1:hover{
			color: orange;
		}
	</style>
</head>
<body>
	<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('../header.php');
?>
<form action="insertProduct.php" method="post">
<div class="signup-form"><br>
	<div class="form-box">

		<h1 class="register"> Add New Product!</h1>

		<input class="input" type="text"  name="name" placeholder="Enter Product Name..." required><br>
		<input class="input"  type="text" name="company" placeholder="Enter Product Company..." required><br>
		<input  class="input" type="number" name="price" placeholder="Enter product price ..." required><br>
		<input  class="input" type="number"  name="qty" placeholder="Enter qty ..." required><br>

		<a href="p.php"><button class="formbtn1"><strong>Add Product</strong></button></a> <br>
		</div>

	</div>
</form>

<?php
include('../footer.php');
?>
</body>
</html>