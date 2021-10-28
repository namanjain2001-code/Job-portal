<?php
$cName = $_POST['cName'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$address = $_POST['address'];

$con = mysqli_connect('localhost', 'root');

if(!$con)
echo "connection failed"; 
else {
    echo "connection success";
}
mysqli_select_db($con,'jobhub');
$q = "insert into company (cName,email,pass,address) values ('$cName','$email','$pass','$address')";
$error = mysqli_query($con,$q);
?>