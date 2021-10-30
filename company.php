<?php
session_start();
$email = $_SESSION['email'];
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'jobhub');
$q = "select * from jobs where Cemail='$email'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);


$p = "select  jobs.pos, candidate.firstName, candidate.lastName, candidate.middleName
from jobapplication
inner join jobs ON jobapplication.Job_id=jobs.id
inner join candidate ON jobapplication.Semail=candidate.email
WHERE jobs.Cemail = '$email'";
$res = mysqli_query($con,$p);


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
          <button type="button" class="btn btn-outline-success   mx-2">Login</button>
          <button type="button" class="btn btn-outline-danger  mx-2">Signup</button>
        </div>

      </div>
    </div>
  </nav>
  <div class="container">
    <form class="row g-3">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Position</label>
        <input type="text" class="form-control" id="pos" name="pos">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">skill required</label>
        <input type="text" class="form-control" id="skill" name="skill">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">CTC</label>
        <input type="number" class="form-control" id="ctc" placeholder="Per annum" name="ctc">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Discription</label>
        <input type="textbox" class="form-control" id="dcrip" name="dcrip">
      </div>
      <div class="col-12">
        <button type="button" class="btn btn-primary" onclick="postjob()">Post job</button>
      </div>


    </form>

  </div>
  <script>
    function postjob() {

      const req = new XMLHttpRequest();

      req.open("get", "http://localhost/JOB-PORTAL/postjob.php?pos=" + document.getElementById('pos').value + "&skill=" + document.getElementById('skill').value + "&ctc=" + document.getElementById('ctc').value + "&dcrip=" + document.getElementById('dcrip').value, true);
      req.send();
      req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {
          if (req.responseText == "0") {
            alert("error: Please enter valid input"+req.responseText);
          } else {

            alert("Sucess: succesfully posted");
          }

        }
      }
    }
  </script>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
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
            <td><?php echo $row['pos']; ?></td>
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
            <td><?php echo strtoupper($ro['firstName'])." ".strtoupper($ro['middleName'])." ".strtoupper($ro['lastName']); ?></td>
            <td><?php echo $ro['pos']; ?></td>
            <td><?php echo "---"; ?></td>
            
          </tr>
          <tr>
          <?php
        }

          ?>
      </tbody>
    </table>
  </div>
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