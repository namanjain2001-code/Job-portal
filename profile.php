<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
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

        form {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }

        .img {
            padding-top: 20px;
            grid-row-start: 1;
            grid-row-end: 4;
            margin: auto;
        }

        .aboutuser {
            grid-column-start: 1;
            grid-column-end: 3;
        }

        .formbtn {
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
        <h1>Personal Information</h1>
        <form>
            <div class="item">
                <label for="first-name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first-name" name="mName">
            </div>
            <div class="item">
                <label for="middle-name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middle-name" name="mName">
            </div>
            <div class="item img">
                <img src="download.jpg">
            </div>
            <div class="item">
                <label for="middle-name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last-name" name="mName">
            </div>
            <div class="item">
                <label for="email" class="form-label">Email</label>
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
        <h1>Application Infomation</h1>
        <div class="applicationBox">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Recruter</th>
                        <th scope="col">Applied for</th>
                        <th scope="col">Application status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Google</td>
                        <td>Software Devloper</td>
                        <td>Accepted</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Google</td>
                        <td>HR</td>
                        <td>Rejected</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
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