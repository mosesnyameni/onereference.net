<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>OneReference</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<?php include('shared/menu_general.php'); ?>

<body>
    <!-- Responsive navbar-->
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder"> Join Onereference </h1>
                <p class="lead mb-0"> Sign up and join our platform for free. Gain access to helpful features that
                    make the recruitment process faster and easier.</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div id="Addreferree1" class="tabcontent">
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-header">
                                <h4> Create Profile </h4>
                            </div>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
                                <!-- <form method="post" > -->
                                <div class="card-body">
                                    <div class="input-group">
                                        <p class="card-text">Complete profile using Linkedin or complete profile below. </p> <br />
                                    </div>
                                    <div class="input-group">
                                        <a class="btn btn-primary" href="#!"> Linkedin Signup</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <select class="form-control" type="text" name="txtprofile_type" id="w3lName" placeholder="Your Name" required="">
                                            <option value> Select Role</option>
                                            <option value="Candidate"> Candidate </option>
                                            <option value="Agent"> Agent </option>
                                            <option value="Referee"> Referee </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Name" name="txtname" aria-label="Enter search term..." aria-describedby="button-search" />

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Surname" name="txtsurname" aria-label="Enter search term..." aria-describedby="button-search" />

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Job Role" name="txtjobrole" aria-label="Enter search term..." aria-describedby="button-search" />

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Contact" name="txtcontact" aria-label="Enter search term..." aria-describedby="button-search" />

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="company" name="txtcompany" aria-label="Enter search term..." aria-describedby="button-search" />

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <select class="form-control" type="text" name="txtindustry" id="w3lName" placeholder="Your Name" required="">
                                            <option value> Select Industry</option>
                                            <option value="informationtech"> Information Technology (IT) </option>
                                            <option value="healthcare"> Health Care </option>
                                            <option value="finance"> Finance and Accountinh </option>
                                            <option value="Education"> Education </option>
                                            <option value="Legal"> Legal </option>
                                            <option value="Manufacturing"> Manufacturing </option>
                                            <option value="Engineering"> Engineering </option>
                                            <option value="Retail"> Retail </option>
                                            <option value="Insurance"> Insurance </option>
                                            <option value="Hospitality"> Hospitality and tourism </option>
                                            <option value="Marketingandadvert"> Marketing and Advertising </option>
                                            <option value="Media"> Media and entertainment </option>
                                            <option value="Telecommunications"> Telecommunications </option>
                                            <option value="Realestate"> Real Estate </option>
                                            <option value="Humanresource"> Human Resources </option>
                                            <option value="Agriculture"> Agriculture </option>
                                            <option value="Architecture"> Architecture </option>
                                            <option value="Energy"> Energy </option>
                                            <option value="Construction"> Construction </option>
                                            <option value="Environmental"> Environmental Services </option>
                                            <option value="Government"> Government and Public Administration </option>
                                            <option value="Science"> Science and research </option>
                                            <option value="Logistics"> Transportation and Logistics </option>
                                            <option value="Fitness"> Fitness and Wellness </option>
                                            <option value="Other"> Other </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="txtemail" placeholder="Email" aria-label="Enter search term..." aria-describedby="button-search" />

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <input class="form-control" type="password" name="txtpassword" placeholder="Password" aria-label="Enter search term..." aria-describedby="button-search" />

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <input class="" type="checkbox" name="termsandconditions" placeholder="Email" aria-label="Enter search term..." aria-describedby="button-search" />
                                        &nbsp &nbsp
                                        <a href="images/UCuseragreement.pdf"> Accept terms and conditions </a>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <button class="btn btn-primary" id="button-search" type="submit" name="submit" value="submit"> Submit</button>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="input-group">
                                        <p class=""><a href="Login.php">Click to Login</a></p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4> Access Benefits </h4>
                        </div>
                        <div class="card-body">
                            <div class="input-group">
                                <!-- <input class="form-control" type="text" placeholder="Name" aria-label="Enter search term..." aria-describedby="button-search" /> -->
                                <p class="card-text"><b>Welcome to Onereference. A platform that automates the referal check process.</b></p>
                                <p class="card-text"> <img src="images/angle-right.png" alt=""> Agents conduct referal checks seamlessly on One platform</p>
                                <p class="card-text"> <img src="images/angle-right.png" alt=""> Candidates gather all your referrees on One platform</p>
                                <p class="card-text"> <img src="images/angle-right.png" alt=""> Use linkedin for easy signup and autocomplete your profile </p>

                            </div>

                        </div>
                        <div class="card-body">
                            <div class="input-group">
                                <!-- <input class="form-control" type="text" placeholder="Surname" aria-label="Enter search term..." aria-describedby="button-search" /> -->

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="input-group">

                                <!-- <button class="btn btn-primary" id="button-search" type="button"> Sign Up</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4 px-lg-5">
            <p class="m-0 text-center text-white">Powered by AI | Copyright &copy; umbrellacapital 2023</p>
        </div>

        <!-- Footer  <img  src="\images\Umbrella2.jpg" alt="..." /> -->
    </footer>
    <!-- Bootstrap core JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>