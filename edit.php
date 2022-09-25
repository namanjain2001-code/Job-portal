<?php
$id=$_GET['id'];
$q="select * from jobs where id = $id ";
$con= mysqli_connect("localhost","root");
mysqli_select_db($con, 'jobhub');
$res = mysqli_query($con,$q);

$row = mysqli_fetch_array($res);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">JOBHUB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            <li><a class="dropdown-item" href="#">profile</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>


                </ul>
                <div class="d-flex">
                    <button type="button" onclick="location.href='http://localhost/JOB-PORTAL/login.php';" class="btn btn-outline-success   mx-2">Login</button>

                </div>

            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Edit Jobs Information</h1>
        <form class="row g-3" method="POST" action="savechange.php?id=<?php echo($id) ;?>">
            <div class="col-md-6">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" value = "<?php echo($row['position']); ?>" id="position" name="position" >
            </div>
            <div class="col-md-6">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" value = "<?php echo($row['location']); ?>" id="location" name="location">
            </div>
            <div class="col-md-6">
                <label for="responsibility" class="form-label">Responsibility</label>
                <input type="text" class="form-control" value = "<?php echo($row['responsibility']); ?>" id="responsibility" name="responsibility">
            </div>
            <div class="col-md-6">
                <label for="skillRequired" class="form-label">skill required</label>
                <input type="text" class="form-control" value = "<?php echo($row['skill']); ?>" id="skillRequired" name="skill">
            </div>
            <div class="col-md-6">
                <label for="workingHour" class="form-label">Working hours</label>
                <input type="text" class="form-control" value = "<?php echo($row['working_hours']); ?>" id="workingHour" name="working_hours">
            </div>
            <div class="col-md-3">
                <label for="experienceReq" class="form-label">Experience Required</label>
                <select id="experienceReq" class="form-select" name="experience">
                    <option <?php if($row['experience']=="No Expeience Required"){echo("selected");} ?> value="None">No Expeience Required</option>
                    <option <?php if($row['experience']=="Less than 3 Years"){echo("selected");} ?> value="Less than 3 Years">Less than 3 Years</option>
                    <option <?php if($row['experience']=="4 - 8 Years"){echo("selected");} ?> value="4 - 8 Years">4 - 8 Years</option>
                    <option <?php if($row['experience']=="More than 9 Years"){echo("selected");} ?> value="More than 9 Years">More than 9 Years</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="vaccency" class="form-label">Vaccency</label>
                <input type="number" class="form-control" value = "<?php echo($row['vacancy']); ?>" id="vaccency" name="vacancy">
            </div>
            <div class="col-12">
                <label for="ctc" class="form-label">Annual Pay</label>
                <input type="number" class="form-control" value = "<?php echo($row['annual_pay']); ?>" id="ctc" placeholder="Per annum" name="annual_pay">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Discription</label>
                <input type="textbox" class="form-control" value = "<?php echo($row['discription']); ?>" id="dcrip" name="discription">
            </div>
            <div class="col-12">
                <input type="submit" value = "Save Change" class="btn btn-primary" ></input>
                <button type="reset" class="btn btn-outline-danger ">Delete</button>
            </div>


        </form>

    </div>

    <div class="container footer">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2021 JOBHUB, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center navbar-brand justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                JOBHUB
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Privacy Policy</a></li>

                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>




    <script>
        function postjob() {

            const req = new XMLHttpRequest();

            req.open("get", "http://localhost/JOB-PORTAL/postjob.php?pos=" + document.getElementById('pos').value + "&skill=" + document.getElementById('skill').value + "&ctc=" + document.getElementById('ctc').value + "&dcrip=" + document.getElementById('dcrip').value, true);
            req.send();
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    if (req.responseText == "0") {
                        alert("error: Please enter valid input" + req.responseText);
                    } else {

                        alert("Sucess: succesfully posted");
                    }

                }
            }
        }
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>