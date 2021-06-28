
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact us </title>
	<link rel="stylesheet" type="text/css" href="./css/contactUs.css">
</head>
<body>

<?php
include('header.php');
?>

<h3>Contact Form</h3>

<div class="container">
  <form action="contacting.php" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">india</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
       <option value="usa">Australia</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
<a href="index.php"><button class="homebtn">Go to Home</button></a>

<?php
include('footer.php');
?>
</body>
</html>