<?php
session_start();
// $email = $_SESSION['email']; 
$email = "jobhub@gmail.com";
$id = $_GET['id'];
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
    $p = "update jobs 
          SET 
          position = '$position',
          responsibility = '$responsibility', 
          working_hours = '$working_hours',
          vacancy = '$vacancy',
          annual_pay = '$annual_pay',
          location = '$location',
          skill = '$skill',
          experience = '$experience',
          discription = '$discription'
          where id = $id";
    $result = mysqli_query($con, $p);
    if (!$result) {
        echo "failed";
    } else {
        ?><script>alert("inserted successfully");</script><?php
        header("Location: http://localhost/JOB-PORTAL/company.php");
    }

