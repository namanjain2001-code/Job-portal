<?php
session_start();
// $email = $_SESSION['email']; 
$email = "jobhub@gmail.com";
$position = $_POST['position'];
$responsibility = $_POST['responsibility'];
$working_hours = $_POST['working_hours'];
$location = $_POST['location'];
$skill = $_POST['skill'];
$experience = $_POST['experience'];
$discription = $_POST['discription'];
$vacancy = $_POST['vacancy'];
$annual_pay = $_POST['annual_pay'];


    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 'jobhub');
    $p = "insert into jobs (position,responsibility,working_hours,vacancy,annual_pay,location,skill,experience,discription,cemail) values ('$position','$responsibility','$working_hours','$vacancy','$annual_pay','$location','$skill','$experience','$discription','$email')";
    $result = mysqli_query($con, $p);
    if (!$result) {
        echo "failed";
    } else {
        ?><script>alert("inserted successfully")</script><?php
        header("Location: http://localhost/JOB-PORTAL/company.php");
    }

