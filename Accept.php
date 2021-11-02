<?php
$appNum = $_GET['appNum'];

$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'jobhub');
$q = "update jobapplication
set status='Accepted' where applicationNum='$appNum'";
$res=mysqli_query($con,$q);
if(!$res)
{
    echo mysqli_error($con);
}
else{
    echo "1";
}
?>