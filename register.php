<?php
include("connection.php");
include_once("php_codes.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
    <link rel="stylesheet" type="text/css" href="./css/register_style.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<header>
        <div class="header">
            <nav class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a id="login_button" href="#">Login</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
         </nav>
        </div>
    </header>
    <div class="nav">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Default Category</a></li>
            <li><a href="#">All books</a></li>
            <li><a href="#"> Other products</a></li>
            <li>Less than $200</li>
        </ol>
    </div>
<fieldset>
	<h1><strong>Sign up</strong></h1>
	<form action="php_codes.php " method="POST">
        <div class="form-items">
		<label for="FirstName">Firstname:</label>
         <input type="text"placeholder="Enter your Firstname" name="firstname" required=""> <br>
        </div>
        <div class="form-items">
            <label for="LastName">Lastname:</label>
            <input type="text" placeholder="Enter your Lastname"name="lastname" required=""><br>
        </div>
        <div class="form-items">
            <label for="Username">Username:</label>
            <input type="text" placeholder="Enter your Username" name="username" required=""></br>
        </div>
        <div class="form-items">
		<label for="Password">Password:</label>
        <br><input type="Password" placeholder="Enter Password" name="password" required=""> <br>
        </div>
        <div class="form-items">
		 <label for="Email">Email:</label>
        <input type="email"placeholder="Enter your Email" name="email" required="Email"><br>
        </div>
        <div class="form-items">
	<br><button type="submit" name="register">Register</button>
    </div>
	</form>
</fieldset>

</body>
</html>