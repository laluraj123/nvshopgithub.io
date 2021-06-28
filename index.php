<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shop management</title>
	<link rel="stylesheet" type="text/css" href="./css/index.css">

</head>
<body>
	
	<?php
	include('header.php');
	?>

	<div class="box"> <img class="boximg" src="./img/shhop.jpg">
<form action="checkingUser.php" method="post">
		<div class="loginform"> 
		<h1 class="loginh1">User Login Here</h1>
		<input class="input" type="text" name="username" placeholder="enter username here" required><br>
		<input class="input" type="password" name="password" placeholder="enter password" required><br>
		<button class="loginbtn">Login</button>
		<input id="resetbutton" type="reset" name="reset"><br>
		<div id="nudiv">
		<a id="newbtn" href="register.php">  I Am a New User </a></div>
		</div>
</form>
</div>
<?php
include('footer.php');
?>
</body>
</html>
<?php
?>