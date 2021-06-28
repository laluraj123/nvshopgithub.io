<!DOCTYPE html>
<html>
<head>
	<title>about us page</title>
	<style type="text/css">
			body{ margin: 2%; }

	

	.aboutbox{ height: 600; width: 100%;  margin-top: 20px; text-align: center;}

	.neeraj{ height: 600px; width: 50%; background-color: red; margin-top: 0px; float: left; }
		.vinay{ height: 600px; width: 50%; background-color: yellow; margin-top: 0px; float: left; }

		img{ border-radius: 50%; margin-top: 40px; border:2px solid white; }
		.name1{ color:white; } .name2{ color: black; }
		h2{ font-size: 20px;  }
		h3{ font-size: 20px; color: black; }

		
		.homebtn{ height: 40px; width: 100%; outline: none; border:none; background-color: black; font-size: 20px; }
		.homebtn:hover{  background-color: red; }

				/* mobile */
@media (max-width:768px) and (min-width: 0px){
 
.header{ height: 100px; width:100%; background-color: cyan; text-align: center; line-height: 100px; }
	.title{ color: black; font-size: 1rem; text-shadow:none; }

.footer{ height:150px; width: 100%; line-height: 30px; background-color: black; }
.footerh2{ font-size: 15px; color: cyan; background-color: black; }

	.neeraj{ height: 600px; width: 100%; background-color: red; margin-top: 0px; float: left; }
		.vinay{ height: 600px; width: 100%; background-color: yellow; margin-top: 0px; float: left; }

		.name1{ font-size: 22px; }
	.name2{ font-size: 22px; }

	h2, h3{ font-size: 15px; }

}


		/* tablets */
@media (max-width:1000px) and (min-width: 768px){
 
	.header{ height: 100px; width:100%; background-color: yellow; text-align: center; line-height: 100px; }
	.title{ color: black; font-size: 2rem; text-shadow:none; }

.footer{ height:150px; width: 100%; }
.footerh2{ font-size: 20px; color: yellow; background-color: black; }

	.neeraj{ height: 600px; width: 100%; background-color: red; margin-top: 0px; float: left; }
		.vinay{ height: 600px; width: 100%; background-color: yellow; margin-top: 0px; float: left; }
	
	.name1{ font-size: 25px; }
	.name2{ font-size: 25px; }

	h2, h3{ font-size: 18px; }

}


	</style>
</head>
<body>
<?php
include('header.php');
?>
	
	<div class="aboutbox">

		<div class="neeraj">  <img src="./img/neeraj.jpg" height="250" width="250">
			<h1 class="name1">Neeraj Prajapati</h1>
			<h2> Course: B.Tech</h2>
			<h2> Branch: CSE</h2>
			<h2>Semester: 8th</h2>
			<h2>Mobile number: 7000168634</h2>
			<h2>Email-Id: Neel95362@gmail.com</h2>
		</div>
		<div class="vinay"> <img src=" ./img/vinay.jpg" height="250" width="250">
				<h1 class="name2">Vinay Lodhi</h1>
				<h3> Course: B.Tech</h2>
			<h3> Branch: CSE</h2>
			<h3>Semester: 8th</h2>
			<h3>Mobile number:7771829102 </h2>
			<h3>Email-Id: vinaylodhi3680@gmail.com</h2>
 		</div>
	 </div>

<?php
include('footer.php');
?>
</body>
</html>