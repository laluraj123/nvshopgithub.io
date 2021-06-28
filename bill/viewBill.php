<!DOCTYPE html>
<html>
<head>
	<title>View Bill</title>
	<style type="text/css">
		#a1{
				float:left; background-color: #ffffc7; padding-left: 30px; border-radius: 15px; font-size: 25px; text-decoration: none;color:black; padding-right: 30px; position: absolute;
		}
		#a1:hover{
			color: orange;
		}
		form{
			margin-top: 20px;
		}
	</style>
</head>
<body>
<a id="a1" href="../userDashboard.php">Back</a>
<?php 
include('header.php');
?>

<form  action="generation2.php" method="post">
	Enter Bill NO <input type="number" name="billno">
	<input type="submit" value="View Bill">
</form>
<?php 
include('footer.php');
?>
</body>
</html>