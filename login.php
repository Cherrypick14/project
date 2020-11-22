
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="./css/login_style.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
	<header>
        <div class="header">
            <nav class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <li><a id="login_button" href="login.php">Login</a></li>
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
	<h2>Booksy</h2> <br>
<form action="php_codes.php "  method="POST">
    <div class="form-items">
		<label for="Username">Username:</label>
    <input type="text" placeholder="Enter Username" name="Username" required=""/><br>
    <div class="form-items">
		<label for="Password">Password:</label>
	 <input type="password" placeholder="Enter password" name="password" required=""/><br>
    <p><input type="checkbox" name="remember">Remember me</p><br>
    <div class="form-items"></div>
	<br><input type="submit" name="login" value="log in">
</form>	
</fieldset>

</body>
</html>