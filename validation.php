<?php
session_start();

$lgntype = $_GET['lgntype'];
$email = $_GET['email'];
$pass = $_GET['pass'];


$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'jobhub');
$q = "select * from ".$lgntype." where email='$email' AND pass='$pass'";

$result=mysqli_query($con,$q);
if(!$result)
{
    echo mysqli_error($con);
}
else{
$num = mysqli_num_rows($result);
if($num==0)
{
    echo "0";
}
else
{   
    $_SESSION['email'] = $email;
    echo "http://localhost/JOB-PORTAL/".$lgntype.".php";
}
}
?>