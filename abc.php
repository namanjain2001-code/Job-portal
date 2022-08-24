<?php
session_start();
$email = $_SESSION['email'];
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
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">POSITION</th>
        <th scope="col">SKILL REQUIRED</th>
        <th scope="col">CTC(in LPA)</th>
        <th scope="col">Discription</th>
        <th scope="col">STATUS</th>
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
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script>
  function Accept(id) {
    const re = new XMLHttpRequest();

    re.open("get", "http://localhost/JOB-PORTAL/Accept.php?appNum=" + id, true);
    re.send();
    re.onreadystatechange = function() {
      if (re.readyState == 4 && re.status == 200) {
        if (re.responseText == "0") {
          alert("error: Please enter valid input" + re.responseText);
        } else {

          alert("Sucess: succesfully Accepted" + re.responseText);
          document.getElementById(id).className = "btn btn-success btn-lg";
          document.getElementById(id).disabled = true;
          document.getElementById(id).innerText = "Accepted";

        }
      }
    }
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->