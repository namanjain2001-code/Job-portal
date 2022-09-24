<?php

session_start();
$email = $_SESSION['email'];
$comName = $_POST['comName'];
$comYOE = $_POST['comYOE'];
$comType = $_POST['comType'];
$comEmail = $_POST['comEmail'];
$comSite = $_POST['comSite'];
$comLink = $_POST['comLink'];
$comOffice = $_POST['comOffice'];
$comAbout = $_POST['comAbout'];

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'jobhub');

$q = "select * from company_profile where username='$email'";
$res= mysqli_query($con,$q);
$numrow = mysqli_num_rows($res);
if($numrow ==0)
{
  $querry = "insert into company_profile (comName,comYOE,comType,comEmail,comSite,comLink,comOffice,comAbout,username) values ('$comName','$comYOE','$comType','$comEmail','$comSite','$comLink','$comOffice','$comAbout','$email')";
  $result = mysqli_query($con,$querry);
  header("Location: http://localhost/JOB-PORTAL/company.php"); 
}

else{
$querry = "update company_profileset comName ='$comName',comYOE='$comYOE',comEmail='$email',comSite='$comSite',comLink='$comLink',comOffice='$comOffice',comAbout='$comAbout' Where username = '$email'";
$result = mysqli_query($con,$querry);
header("Location: http://localhost/JOB-PORTAL/company.php");

}
?>