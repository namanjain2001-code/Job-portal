<?php
    $fName=$_POST['fName'];
    $mName=$_POST['mName'];
    $lName=$_POST['lName'];
    $emai=$_POST['email'];
    $pass=$_POST['password'];
    $cnfpassword=$_POST['cnfPassword'];
    $DOB=$_POST['DOB'];
    $ID=$_POST['ID'];
    $idNumber=$_POST['idNumber'];
    $Gender=$_POST['Gender'];
    $education=$_POST['education'];
    $cource=$_POST['cource'];
    $intrest=$_POST['intrest'];
    $state=$_POST['state'];
    $Address=$_POST['address'];
    $address2=$_POST['address2'];
    $city=$_POST['city'];
    $ZP=$_POST['zip'];
    $con=mysqli_connect('localhost','root');
    if(!$con)
    echo "connection failed";
    else {
     echo "sucessfull";
     echo "$Gender";
    }
    
    mysqli_select_db($con,'jobhub');
    
    $q="insert into candidate (firstName, lastName, middleName, email, pass) 
    values ('$fName', '$lName', '$mName', '$emai', '$pass')";
    $a=mysqli_query($con,$q);
    echo mysqli_error($con);
    
    mysqli_close($con);
    
   
    
    
?> 