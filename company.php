<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    h1 {
      text-align: center;
      margin-top: 70px;
      margin-bottom: 25px;
    }
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
          <button type="button" class="btn btn-outline-success   mx-2">Login</button>
          <button type="button" class="btn btn-outline-danger  mx-2">Signup</button>
        </div>

      </div>
    </div>
  </nav>
  <div class="container">
    <h1>Post New Job</h1>
    <form class="row g-3">
      <div class="col-md-6">
        <label for="position" class="form-label">Position</label>
        <input type="text" class="form-control" id="position" name="position">
      </div>
      <div class="col-md-6">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location">
      </div>
      <div class="col-md-6">
        <label for="responsibility" class="form-label">Responsibility</label>
        <input type="text" class="form-control" id="responsibility" name="responsibility">
      </div>
      <div class="col-md-6">
        <label for="skillRequired" class="form-label">skill required</label>
        <input type="text" class="form-control" id="skillRequired" name="skillRequired">
      </div>
      <div class="col-md-6">
        <label for="workingHour" class="form-label">Working hours</label>
        <input type="text" class="form-control" id="workingHour" name="workingHour">
      </div>
      <div class="col-md-3">
        <label for="experienceReq" class="form-label">Experience Required</label>
        <select id="experienceReq" class="form-select" name="experienceReq">
          <option value="None">No Expeience Required</option>
          <option value="Less than 3 Years">Less than 3 Years</option>
          <option value="4 - 8 Years">4 - 8 Years</option>
          <option value="More than 9 Years">More than 9 Years</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="vaccency" class="form-label">Vaccency</label>
        <input type="number" class="form-control" id="vaccency" name="vaccency">
      </div>
      <div class="col-12">
        <label for="ctc" class="form-label">Annual Pay</label>
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
            alert("error: Please enter valid input" + req.responseText);
          } else {

            alert("Sucess: succesfully posted");
          }

        }
      }
    }
  </script>


</body>

</html>