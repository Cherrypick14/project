<?php
include("connection.php");
if(isset($_POST["register"])){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];

    $sql="SELECT username FROM customers WHERE $username='$username'";
  
    $result=mysqli_query($db, $sql);
    $row=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);

    if($count>0){
        echo "<script>alert('username already taken');window.location='register.php'</script>";
    }
    else{
        $sql="INSERT INTO customers(firstname, lastname, username, password, email)
        VALUES('$firstname','$lastname','$username','$password','$email')";
        if($db->query($sql)===TRUE);{
        echo "<script>alert('Account created successful');windows.location='login.php'</script>";
    }}}
$db->close();
?>