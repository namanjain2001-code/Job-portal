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
        <h1>Orgnization Information</h1>
        <form>
            <div class="item">
                <label for="first-name" class="form-label">Name</label>
                <input type="text" class="form-control" id="first-name" name="mName">
            </div>
            <div class="item">
                <label for="middle-name" class="form-label">Location</label>
                <input type="text" class="form-control" id="middle-name" name="mName">
            </div>
            <div class="item img">
                <img src="download.jpg">
            </div>
            <div class="item">
                <label for="middle-name" class="form-label">Official Email</label>
                <input type="text" class="form-control" id="last-name" name="mName">
            </div>
            <div class="item">
                <label for="email" class="form-label">Website</label>
                <input type="text" class="form-control" id="email" name="mName">
            </div>
            <div class="item">
                <label for="contect" class="form-label">Contect</label>
                <input type="text" class="form-control" id="contect" name="mName">
            </div>
            <div class="DOB">
                <label for="middle-name" class="form-label">DOB</label>
                <input type="date" class="form-control" id="DOB" name="mName">
            </div>
            <div class="item">
                <label for="project-link" class="form-label">Projects link/Github</label>
                <input type="url" class="form-control" id="project-link" name="mName">
            </div>
            <div class="item">
                <label for="linkedin" class="form-label">LinkedIn</label>
                <input type="url" class="form-control" id="linkedin" name="mName">
            </div>
            <div class="item">
                <label for="portfolio" class="form-label">Portfolio</label>
                <input type="url" class="form-control" id="portfolio" name="mName">
            </div>
            <div class="item">
                <label for="caddress" class="form-label">Current Address</label>
                <textarea type="text" class="form-control" id="address" name="mName"></textarea>
            </div>
            <div class="item">
                <label for="paddress" class="form-label">Permanent Address</label>
                <textarea type="text" class="form-control" id="paddress" name="mName"></textarea>
            </div>

            <div class="item">
                <label for="experiance" class="form-label">Experiance</label>
                <textarea class="form-control" id="experiance" name="mName"></textarea>
            </div>
            <div class="item aboutuser">
                <label for="about-user" class="form-label">About you</label>
                <textarea type="text" class="form-control" id="about-user" name="mName"></textarea>
            </div>
            <div class="item formbtn">
                <button type="reset" class="btn btn-outline-warning ">Reset</button>
                <input class="btn btn-primary" type="submit" value="SAVE">
            </div>

        </form>

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