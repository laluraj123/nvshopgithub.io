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
	<link rel="stylesheet" type="text/css" href="../css/back.css">
</head>
<body>
	<a id="a1" href="../userDashboard.php">Back</a>
<?php
include('../header.php');
?>
<form action="insertUser.php" method="post">

<div class="div47">
<div class="signup-form"><br>

	<div class="form-box">

		<h1 class="register"> Insert New Customer!</h1>

		<input class="input" type="text"  name="username" placeholder="Enter username here..." required><br>
		<input class="input"  type="password" name="password" placeholder="Enter password here..." required><br>
		<input  class="input" type="number" name="mobileno" placeholder="Enter mobile number here..." required><br>
		<input  class="input" type="email"  name="email" placeholder="Enter email-id here..." required><br>

		<a href="p.php"><button class="formbtn1"><strong>Insert User</strong></button></a> <br>
		</div>

	</div>
</div>
</form>


<?php
include('../footer.php');
?>
</body>
</html>