<?php
$email = $_GET['Semail'];
$Job_id = $_GET['Job_id'];
$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'jobhub');
$q = "INSERT INTO jobapplication ( Semail,Job_id)
SELECT * FROM (SELECT '$email', '$Job_id') AS tmp
WHERE NOT EXISTS (
    SELECT Semail,Job_id FROM jobapplication WHERE Semail = '$email' and Job_id ='$Job_id'
) LIMIT 1";
$res=mysqli_query($con,$q);
if(!$res)
{
    echo mysqli_error($con);
}
else{
    echo "1";
}
?>