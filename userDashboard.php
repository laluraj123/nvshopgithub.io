<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:index.php');
?>
<!DOCTYPE html>
<html>   
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./css/userDashboard.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
include('header.php');
?>
<span style="font-size: 36px; " ><?php echo "Hello ".$_SESSION['username']."!"; ?></span>
<center>
    
	<h1 color="black">Welcome to Admin Dashboard</h1>
</center>
<div id="container">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Customer <i class="material-icons">arrow_drop_down</i></a>
            <!-- First Tier Drop Down -->
            <ul>
                <li><a href="./user/addUser.php">Add Customer</a></li>
                <li><a href="./user/viewUser.php">View Customer</a></li>
                <li><a href="./user/deleteUser.php">Delete Customer</a></li>
                <li><a href="./user/updateUser.php">Update Customer</a></li>
            </ul>        
            </li>
            <!-- Third Second drop down -->
             <li><a href="#">Employee <i class="material-icons">arrow_drop_down</i></a>
            <ul>
                <li><a href="./employee/addEmployee.php">Add Employee</a></li>
                <li><a href="./employee/viewEmployee.php">View Employee</a></li>
                <li><a href="./employee/deleteEmployee.php">Delete Employee</a></li>
                <li><a href="./employee/updateEmployee.php">Update Employee</a></li>
                <li><a href="#">Salery</a>

                 <ul>
                <li><a href="./employee/viewSalery.php">View Salery</a></li>
                <li><a href="./employee/updateSalery.php">Update Salery</a></li>
            </ul>      

                </li>
            </ul>        
            </li>
<!-- Third tier drop down -->
             <li><a href="#">Product <i class="material-icons">arrow_drop_down</i></a>
            <ul>
                <li><a href="./product/addProduct.php">Add product</a></li>
                <li><a href="./product/viewProduct.php">View product</a></li>
                <li><a href="./product/deleteProduct.php">Delete product</a></li>
                <li><a href="./product/updateProduct.php">Update product</a></li>
            </ul>        
            </li>

            <!-- third tier drop down -->
             <li><a href="#">Seller  <i class="material-icons">arrow_drop_down</i></a>

            <ul>
                <li><a href="./seller/addSeller.php">Add Seller</a></li>
                <li><a href="./seller/viewSeller.php">View Seller </a></li>
                <li><a href="./seller/deleteSeller.php">Delete Seller</a></li>
                <li><a href="./seller/updateSeller.php">Update Seller</a></li>
            </ul> 
            <li><a href="#">Bill <i class="material-icons">arrow_drop_down</i></a>
            <ul>
                <li><a href="./bill/createBill.php">Create New Bill</a></li>
              <li><a href="./bill/viewBill.php">View Bill </a></li>
            </ul>   
            <li><a href="#">Loan <i class="material-icons">arrow_drop_down</i></a>
            <ul>
                <li><a href="./person/addPerson.php">Add Person</a></li>
                <li><a href="./person/viewPerson.php">View Person </a></li>
                <li><a href="./person/deletePerson.php">Delete Person</a></li>
                <li><a href="./person/updatePerson.php">Update Person</a></li>
            </ul>      
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
</div>

<div class="articleimg">
    <img src="./img/homepageimg.jpg" width="100%" height="600">
</div>


<?php
include('footer.php');
?>
</body>
</html>
<?php

?>