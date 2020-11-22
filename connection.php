<?php
$servername="localhost";
$username="root";
$password="";
$db_name="velasquez";

//create connection
$db=mysqli_connect($servername,$username,$password,$db_name);

//check connection
if($db->connect_error)
{
    die ("Connection failed " .$conn->connect_error);
}
?>