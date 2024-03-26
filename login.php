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
    <body>
        <!-- Responsive navbar-->
        <?php include_once("services/login_service.php"); ?>
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
        <div id="signin" class="tabcontent">
            <div class="container">
                <div class="row">
                    <!-- Blog entries-->
                    <div class="col-lg-8">
                        <!-- Featured blog post-->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-header"><h4> Sign In </h4></div>
                                <!-- Sign up form-->
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <p class="card-text"> Click link to sign-on with Linkedin  Or complete form below to sign-on manually.  </p> <br />
                                        </div>
                                        <div class="input-group">
                                            <a class="btn btn-primary" href="#!">  Linkedin Signin</a>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="input-group">
                                            <p class="card-text" id="emailerror" <?php echo (isset($emailError)) ? 'visible' : 'hidden'; ?> style="color:red"> 
                                                <?php
                                                if (isset($emailError)) {
                                                    echo $emailError;
                                                }
                                                ?>
                                            </p>
                                            <p class="card-text" id="passerror" <?php echo (isset($passError)) ? 'visible' : 'hidden'; ?> style="color:red"> 
                                                <?php
                                                if (isset($passError)) {
                                                    echo $passError;
                                                }
                                                ?>
                                            </p>
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

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="input-group">
                                            <button class="btn btn-primary" id="button-search" type="submit" name="submit"> Submit</button>
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
                            <div class="card-header"><h4> Access Benefits </h4></div>
                            <div class="card-body">

                                <div class="input-group">
                                    <p class="card-text"><b>Welcome to Onereference. A platform that automates the referal check process.</b></p>
                                    <p class="card-text"> <img src="images/angle-right.png"  alt="">  Agents conduct referal checks seamlessly on One platform</p>
                                    <p class="card-text"> <img src="images/angle-right.png"  alt=""> Candidates gather all your referrees on One platform</p>
                                    <p class="card-text"> <img src="images/angle-right.png"  alt=""> Use linkedin for easy signup and autocomplete your profile </p>						

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                   <!-- <input class="form-control" type="text" placeholder="Surname" aria-label="Enter search term..." aria-describedby="button-search" /> -->

                                </div>
                            </div>

                            <div class="card-body">
                                <div class="input-group">
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Powered by AI | Copyright &copy; umbrellacapital 2023</p></div>

<!-- Footer  <img  src="\images\Umbrella2.jpg" alt="..." /> -->
        </footer>
        <!-- Bootstrap core JS  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
