<?php

$email = $_POST['email'];
$pass = $_POST['pass'];
$con = mysqli_connect('localhost', 'root');

if(!$con)
echo "connection failed"; 
else {
    echo "connection success";
}
mysqli_select_db($con,'jobhub');
$q = "insert into company (email,pass) values ('$email','$pass')";
$error = mysqli_query($con,$q);
?>