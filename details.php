<?php
session_start();
//$email = $_SESSION['email'];
$email="google@abc.com";
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'jobhub');
$q = "select * from jobs where Cemail='$email'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);


$p = "select  jobs.pos, jobapplication.status,jobapplication.applicationNum, candidate.firstName, candidate.lastName, candidate.middleName
from jobapplication
inner join jobs ON jobapplication.Job_id=jobs.id
inner join candidate ON jobapplication.Semail=candidate.email
WHERE jobs.Cemail = '$email'";
$res = mysqli_query($con, $p);
if (!$res) {
    echo mysqli_error($con);
}


$no = mysqli_num_rows($res);






?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        h1 {
            text-align: center;
            margin-top: 70px;
            margin-bottom: 25px;
        }

        .footer {
            margin-top: 500px;
        }
    </style>
    </style>
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
    <h1>Job Posted</h1>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope=" col">#</th>
                    <th scope="col">POSITION</th>
                    <th scope="col">SKILL REQUIRED</th>
                    <th scope="col">CTC(in LPA)</th>
                    <th scope="col">Discription</th>

                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= $num; $i++) {
                    $row = mysqli_fetch_array($result); ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td onclick="edit(this.id)" id='2'><?php echo $row['pos']; ?></td>
                        <td><?php echo $row['skill']; ?></td>
                        <td><?php echo $row['CTC']; ?></td>
                        <td><?php echo $row['dcrip']; ?></td>

                    </tr>
                    <tr>
                    <?php
                }

                    ?>

            </tbody>
        </table>
    </div>
    <h1>Applications</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Applied For</th>
                    <th scope="col">Resume</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= $no; $i++) {
                    $ro = mysqli_fetch_array($res); ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo strtoupper($ro['firstName']) . " " . strtoupper($ro['middleName']) . " " . strtoupper($ro['lastName']); ?></td>
                        <td><?php echo $ro['pos']; ?></td>
                        <td><?php echo "---"; ?></td>

                        <td>
                            <?php
                            if ($ro['status'] == 'NOT Accepted') {
                            ?><button onclick="Accept(this.id)" id="<?php echo $ro['applicationNum']; ?>" type="button" class="btn btn-outline-primary">Accept</button>
                            <?php
                            } else { ?>
                                <button type="button" disabled class="btn btn-success">Accepted</button>
                            <?php
                            }
                            ?>
                        </td>

                    </tr>
                    <tr>
                    <?php
                }

                    ?>
            </tbody>
        </table>
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
        function edit() {

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