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
    html,
    body {
      height: 100%;
    }

    #r {
      display: none;
    }

    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>

<body class="text-center">

  <main class="form-signin">
    <form id="form" action="none">

      <h1 class="h3 mb-3 fw-normal">JOBHUB</h1>
      <div id="r">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

          <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
          </symbol>
        </svg>



        <div class="alert alert-danger alert-dismissible fade show" role="alert">

          <div>
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
              <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            Enter valid input
          </div>
          <button type="button" class="btn-close" onclick="closebtn()"></button>
        </div>
      </div>

      <div class="form-floating">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="ilineRadio" value="company" required name="lgnType">
          <label class="form-check-label" for="inlineRadio1">AS Company</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="inlineRadio" value="candidate" required name="lgnType">
          <label class="form-check-label" for="inlineRadio2">AS Candidate</label>
        </div>


      </div>
      <div class="form-floating">
        <input type="text" class="form-control" id="email" placeholder="name@example.com" required name="email">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" id="pass" placeholder="Password" required name="pass">
        <label for="floatingPassword">Password</label>
      </div>


      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="button" onclick="signin()" id="lgn-btn">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
  </main>
  <script>
    function signin() {
         
         const req = new XMLHttpRequest();
         
         req.open("get","http://localhost/JOB-PORTAL/validation.php?lgntype="+document.querySelector('input[name="lgnType"]:checked').value+"&email="+document.getElementById('email').value+"&pass="+document.getElementById('pass').value,true);
         req.send();
         req.onreadystatechange = function() {
           if(req.readyState==4 && req.status==200 )
           {
             if(req.responseText=="0")
             {
              document.getElementById('r').style.display='block';
             }
             else{
              location.href = req.responseText;
              
             }
             
           }
         }
    }
    function closebtn()
    {
      document.getElementById('r').style.display='none';
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