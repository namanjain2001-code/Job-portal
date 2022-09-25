<?php
session_start();
//$email = $_SESSION['email'];
$email="jobhub@gmail.com";
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'jobhub');
$p = "select  jobs.position, jobapplication.status,jobapplication.applicationNum, candidate.canName, candidate.canLink, candidate.Name
from jobapplication
inner join jobs ON jobapplication.Job_id=jobs.id
inner join candidate ON jobapplication.Semail=candidate.canEmail
WHERE jobs.cemail = '$email'";
$res = mysqli_query($con, $p);
if (!$res) {
    echo mysqli_error($con);
}
$q = "select * from jobs where cemail='$email'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);


$no = mysqli_num_rows($res);
$profile = mysqli_query($con,"select * from company_profile where username = '$email'");
$numProfile = mysqli_num_rows($profile);
if($numProfile!=0)
{
  $profileRow = mysqli_fetch_array($profile);
}
 
?>
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
      margin-top: 20px;
      margin-bottom: 25px;
    }
    .btn-group{
      margin-top: 50px ;

    }
    #container4 form {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }

        #container4 .img {
            padding-top: 20px;
            grid-row-start: 1;
            grid-row-end: 4;
            margin: auto;
        }

        #container4 .aboutuser {
            grid-column-start: 1;
            grid-column-end: 3;
        }

        #container4 .formbtn {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            align-items: center;
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 20px;
            gap: 15px;


        }

        h1 {
            text-align: center;
            margin-top: 70px;
            margin-bottom: 25px;
        }

        .footer {
            margin-top: 500px;
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
        <div class="btn-group">
            <a onclick="hidediv('container1')" class="btn btn-primary active btn-lg" aria-current="page">Post Job</a>
            <a onclick="hidediv('container2')" class="btn btn-success btn-lg">Application</a>
            <a onclick="hidediv('container3')" class="btn btn-danger btn-lg">Edit Job</a>
            <a onclick="hidediv('container4')" class="btn btn-primary btn-lg">Profile</a>
            
        </div>
        <hr>
    </div>
  <div class="container" id="container1">
    <h1>Post New Job</h1>
    <form class="row g-3" method="POST" action="postjob.php">
      <div class="col-md-6">
        <label for="position" class="form-label">Position</label>
        <input type="text" class="form-control"   id="position" name="position">
      </div>
      <div class="col-md-6">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control"   id="location" name="location">
      </div>
      <div class="col-md-6">
        <label for="responsibility" class="form-label">Responsibility</label>
        <input type="text" class="form-control"   id="responsibility" name="responsibility">
      </div>
      <div class="col-md-6">
        <label for="skillRequired" class="form-label">skill required</label>
        <input type="text" class="form-control"   id="skillRequired" name="skill">
      </div>
      <div class="col-md-6">
        <label for="workingHour" class="form-label">Working hours</label>
        <input type="text" class="form-control"   id="workingHour" name="working_hours">
      </div>
      <div class="col-md-3">
        <label for="experienceReq" class="form-label">Experience Required</label>
        <select id="experienceReq" class="form-select" name="experience">
          <option value="None">No Expeience Required</option>
          <option value="Less than 3 Years">Less than 3 Years</option>
          <option value="4 - 8 Years">4 - 8 Years</option>
          <option value="More than 9 Years">More than 9 Years</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="vaccency" class="form-label">Vaccency</label>
        <input type="number" class="form-control"   id="vaccency" name="vacancy">
      </div>
      <div class="col-12">
        <label for="ctc" class="form-label">Annual Pay</label>
        <input type="number" class="form-control"   id="ctc" placeholder="Per annum" name="annual_pay">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Discription</label>
        <input type="textbox" class="form-control"   id="dcrip" name="discription">
      </div>
      <div class="col-12">
        <input type="submit" class="btn btn-primary" value="Post Job"></input>
      </div>


    </form>

  </div>
  <div class="container Applications" style="display: none;" id="container2">
  
  <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Applied For</th>
                    <th scope="col">LinkedIn</th>
                    <th scope="col">Resume</th>
                    <th scope="col">Status</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= $no; $i++) {
                    $ro = mysqli_fetch_array($res); ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><a href="company-candidate-profile.php?candidateEmail=<?php echo($ro['email']);?>"><?php echo strtoupper($ro['firstName']) . " " . strtoupper($ro['middleName']) . " " . strtoupper($ro['lastName']); ?></a></td>
                        <td><?php echo $ro['position']; ?></td>
                        <td><?php echo $ro['canLink']; ?></td>
                        <td><?php echo "---"; ?></td>
                        <td>
                            <?php
                            if ($ro['status'] == 'NOT Accepted') {
                            ?>Not Accepted
                            <?php
                            } else { ?>
                                Accepted
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
  <div class="container" style="display: none;" id="container3">
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
                        <td><a href="edit.php?id=<?php echo($row['id']);?>"><?php echo $row['position']; ?></a></td>
                        <td><?php echo $row['responsibility']; ?></td>
                        <td><?php echo $row['annual_pay']; ?></td>
                        <td><?php echo $row['discription']; ?></td>
                    </tr>
                    <tr>
                    <?php
                }

                    ?>

            </tbody>
        </table>
    </div> 
    <div class="container" id="container4" style="display: none;">
    <form method="POST" action="company-profile-edit.php">
            <div class="item">
                <label for="comName" class="form-label">Company Name</label>
                <input type="text" class="form-control"  value = "<?php if($numProfile!=0){echo($profileRow['comName']);} ?>" id="comName" name="comName">
            </div>
            <div class="item">
                <label for="comYOE" class="form-label">Year of Establishment</label>
                <input type="number" class="form-control"  value = "<?php if($numProfile!=0){echo($profileRow['comYOE']);} ?>" id="comYOE" name="comYOE">
            </div>
            <div class="item img">
                <img src="download.jpg">
            </div>
            <div class="item">
                <label for="comType" class="form-label">Domain/Type</label>
                <input type="text" class="form-control"  value = "<?php if($numProfile!=0){echo($profileRow['comType']);} ?>" id="comType" name="comType">
            </div>
            <div class="item">
                <label for="comEmail" class="form-label">Official Email</label>
                <input type="Email" class="form-control"  value = "<?php if($numProfile!=0){echo($profileRow['comEmail']);} ?>" id="comEmail" name="comEmail">
            </div>
            
            <div class="DOB">
                <label for="comSite" class="form-label">Website</label>
                <input type="url" class="form-control"  value = "<?php if($numProfile!=0){echo($profileRow['comSite']);} ?>" id="comSite" name="comSite">
            </div>
            <div class="item">
                <label for="comLink" class="form-label">LinkdIn</label>
                <input type="url" class="form-control"  value = "<?php if($numProfile!=0){echo($profileRow['comLink']);} ?>" id="comLink" name="comLink">
            </div>
            <div class="item">
                <label for="comOffice" class="form-label">Head Office</label>
                <textarea type="text" class="form-control"  id="comOffice" name="comOffice"><?php if($numProfile!=0){echo($profileRow['comOffice']);} ?></textarea>
            </div>
            <div class="item">
                <label for="comAbout" class="form-label">About Your Company</label>
                <textarea  class="form-control"  id="comAbout" name="comAbout"><?php if($numProfile!=0){echo($profileRow['comAbout']);} ?></textarea>
            </div>
            <div class="item formbtn">
                <button type="reset" class="btn btn-outline-warning ">Reset</button>
                <input class="btn btn-primary" type="submit" value="SAVE">
            </div>

        </form>
  </div>
  <script>
    function hidediv(id) {
            document.getElementById('container1').style.display = "none";
            document.getElementById('container2').style.display = "none";
            document.getElementById('container3').style.display = "none";
            document.getElementById('container4').style.display = "none";
            document.getElementById(id).style.display = "block";
        }
    
  </script>


</body>

</html>