
<!DOCTYPE html>
<html>
<head>
	<title>add user </title>
	<link rel="stylesheet" type="text/css" href="./css/register.css">
</head>
<body>
<?php
include('header.php');
?>
<form action="registerUser.php" method="post">

<div class="div47">
<div class="signup-form"><br>

	<div class="form-box">

		<h1 class="register"> Insert New Customer!</h1>

		<input class="input" type="text"  name="username" placeholder="Enter username here..." required><br>
		<input class="input"  type="password" name="password" placeholder="Enter password here..." required><br>
		<input  class="input" type="number" name="mobileno" placeholder="Enter mobile number here..." required><br>
		<input  class="input" type="email"  name="email" placeholder="Enter email-id here..." required><br>

		<a href="p.php"><button class="formbtn1"><strong>Register</strong></button></a> <br>
		</div>

	</div>
</div>
</form>


<?php
include('footer.php');
?>
</body>
</html>