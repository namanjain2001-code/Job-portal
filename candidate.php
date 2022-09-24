<?php
session_start();
$email = $_SESSION['email'];
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'jobhub');
$q = "select jobs.pos,jobs.skill,jobs.CTC,jobs.dcrip,jobs.id,company.cName,company.address
      from jobs
      inner join company
      on jobs.Cemail = company.email;";
$p = "select Semail,Job_id from jobapplication where Semail='$email'";
$result = mysqli_query($con, $q);
$res = mysqli_query($con, $p);
if (!$result) {
    echo mysqli_error($con);
}
if (!$res) {
    echo mysqli_error($con);
}
$num = mysqli_num_rows($result);
$no = mysqli_num_rows($res);

?>
<!doctype html> 
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .btn-group .btn {
            margin-left: 10px;
            margin-right: 10px;
            width: auto;
        }

        .btn {
            margin: auto;
            width: 100%;

        }


        .idk {
            margin-bottom: 30px;
        }

        .card-img-top {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: auto;
            padding: 10px;
        }

        .col-sm-4 {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>

</head>


<body onload="abc()">
    <div class="idk">
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
                        <button type="button" class="btn btn-outline-success   mx-2">Login</button>
                        <button type="button" class="btn btn-outline-danger  mx-2">Signup</button>
                    </div>

                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="btn-group">
            <a onclick="hidediv('container1')" class="btn btn-primary active btn-lg" aria-current="page">All JOBS</a>
            <a onclick="hidediv('container2')" class="btn btn-success btn-lg">APPLIED</a>
            <a onclick="hidediv('container3')" class="btn btn-danger btn-lg">ACCEPTED</a>
            
        </div>
        <hr>
    </div>
    <div class="container " id="container1">

        <div class="row">

            <?php
            for ($i = 1; $i <= $num; $i++) {
                $row = mysqli_fetch_array($result);
            ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['pos']; ?><h6>At <?php echo $row['cName']; ?></h6>
                            </h5>
                            <p class="card-text"><?php echo $row['dcrip']; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $row['CTC'] ?>LPA</li>
                            <li class="list-group-item">At <?php echo " " . $row['address']; ?></li>

                        </ul>
                        <div class="card-body">

                            <button type="button" id="<?php echo $row['id']; ?>" onclick="apply(<?php echo $row['id']; ?>)" class=" btn-lg btn btn-outline-primary">Apply Now</button>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>






        </div>

    </div>
    <div class="container " style="display: none;" id="container2">
        <?php
        $Q = "select jobapplication.status,jobs.pos,jobs.skill,jobs.id,jobs.CTC,jobs.dcrip,company.cName,company.address
         from jobapplication 
         inner join jobs 
         on jobapplication.Job_id=jobs.id 
         inner join company
         on jobs.Cemail=company.email
         where jobapplication.Semail='amit@abc.com' 
         ";
        $RESULT = mysqli_query($con, $Q);
        $n = mysqli_num_rows($RESULT);

        ?>
        <div class="row">

            <?php
            for ($i = 1; $i <= $n; $i++) {
                $r = mysqli_fetch_array($RESULT);
            ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $r['pos']; ?><h6>At <?php echo $r['cName']; ?></h6>
                            </h5>
                            <p class="card-text"><?php echo $r['dcrip']; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $r['CTC'] ?>LPA</li>
                            <li class="list-group-item">At <?php echo " " . $r['address']; ?></li>

                        </ul>
                        <div class="card-body">

                            <button type="button" disabled id="<?php echo $r['id']; ?>" class=" btn-lg btn btn-success">Applied</button>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>






        </div>


    </div>
    <div class="container" style="display: none;" id="container3">
        <div class="row">

            <?php
            mysqli_data_seek($RESULT, 0);
            for ($i = 1; $i <= $n; $i++) {
                $r = mysqli_fetch_array($RESULT);
                if ($r['status'] == 'Accepted') {
            ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $r['pos']; ?><h6>At <?php echo $r['cName']; ?></h6>
                                </h5>
                                <p class="card-text"><?php echo $r['dcrip']; ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo $r['CTC'] ?>LPA</li>
                                <li class="list-group-item">At <?php echo " " . $r['address']; ?></li>

                            </ul>
                            <div class="card-body">

                                <button type="button" disabled id="<?php echo $r['id']; ?>" class=" btn-lg btn btn-success">Accepted</button>

                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>






        </div>
    </div>

    <script>
        function abc() {

            <?php for ($i = 0; $i < $no; $i++) {
                $ro = mysqli_fetch_array($res);
            ?>
                document.getElementById(<?php echo $ro['Job_id'] ?>).className = "btn btn-success btn-lg";
                document.getElementById('<?php echo $ro['Job_id'] ?>').disabled = true;
                document.getElementById('<?php echo $ro['Job_id'] ?>').innerText = "Applied";
            <?php } ?>

        }

        function apply(jobId) {

            let req = new XMLHttpRequest();
            req.open('get', `http://localhost/JOB-PORTAL/applyJob.php?Job_id=${jobId}&Semail=<?php echo $email; ?>`, true);
            req.send();
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    if (req.responseText == "1") {
                        document.getElementById(jobId).className = "btn btn-success btn-lg";
                        document.getElementById(jobId).disabled = true;
                        document.getElementById(jobId).innerText = "Applied";
                        alert("record sucess fully inserted");

                    } else {
                        alert(req.responseText);
                    }
                }
            }
        }

        function hidediv(id) {
            document.getElementById('container1').style.display = "none";
            document.getElementById('container2').style.display = "none";
            document.getElementById('container3').style.display = "none";
            document.getElementById(id).style.display = "block";
        }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>