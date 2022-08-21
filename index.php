<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    else {?>
    <div class="alert alert-success" role="alert">
     Your account created successfully <a href="login.php" class="alert-link">click here</a>. to login.
    </div>
     <?php
    }
    
    mysqli_select_db($con,'jobhub');
    
    $q="insert into candidate (firstName, lastName, middleName, email, pass) 
    values ('$fName', '$lName', '$mName', '$emai', '$pass')";
    $a=mysqli_query($con,$q);
    echo mysqli_error($con);
    
    mysqli_close($con);
    
   
    
    
?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>