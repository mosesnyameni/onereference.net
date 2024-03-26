<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Onereference | Candidate Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/candidate_home.css" rel="stylesheet" />		
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php include_once("custom/candidate_menu_custom.php"); ?>	
        <!-- Header-->
        <div class="d-flex" id="wrapper">

            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <!--<div class="sidebar-heading border-bottom bg-light">User Home</div> -->

                <div class="list-group list-group-flush">												

                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!" onclick="openCity(event, 'Connects')">Connects</a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!" onclick="openCity(event, 'Addreferree')"> Add Referee </a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!" onclick="openCity(event, 'invitereferee')"> Invite Referee </a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!" onclick="openCity(event, 'Surveys')"> Surveys</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!" onclick="openCity(event, 'Profile')"> Profile</a>

                </div>
            </div>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper" width="100%">

                <!-- Top navigation 
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav> -->
                <!-- Responsive navbar-->



                <!-- Page content-->
                <div id="Surveys" class="tabcontent">
                    <div class="container-fluid">
                        <div class="container">
                            <h2>Surveys</h2>
                            <p> Please see the below completed surveys </p>
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">List of referees</div>
                                    <div class="panel-body">Referee 1</div>
                                    <div class="panel-body"> Referee 2</div>
                                    <div class="panel-body">Referee 3</div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">Panel Header</div>
                                    <div class="panel-body">Panel Content</div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">Panel Header</div>
                                    <div class="panel-body">Panel Content</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Connects" class="tabcontent">
                    <div class="container-fluid">
                        <div class="container">
                            <h2> Candidate Connections</h2>
                            <p> See all referree connections below. Invite new referees and increase your contact list. </p>

                            <!-- Page content - conceal all information in each pannel-->
                            <!-- GET CONNECTS FOR CONTACT AND DISPLAY -->
                            <?php
                            include ("storescripts/connect_to_mysql.php");
                            //get the data and connections related to this user
                            $query1 = "SELECT  id ,  username ,  email ,  password ,  create_datetime ,  name ,  surname ,  company ,  jobrole , 
                                 Industry ,  contact_num ,  ip_address ,  candidate_email ,  candidate_id ,  referree_id ,  pass_hash , 
                                 account_status ,  account_type ,  referee_type ,  creator 
                                 FROM refereeprofile
                                 WHERE candidate_email='$tempemail';";
                            $result1 = mysqli_query($db, $query1);
                            $res_num1 = mysqli_num_rows($result1);
                            $row = mysqli_fetch_row($result1);

                            while ($record = mysqli_fetch_assoc($result1)) {
                                ?>

                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><h4><b>Referee Connect </b> </h4></div>
                                        <div class="panel-body"> 

                                            <h5> <?php echo $record['name'] . ' ' . $record['surname']; ?></h5>

                                            <p> Referee email : <?php echo $record['email']; ?></p>
                                            <p> Referee contact : <?php echo $record['contact_num']; ?></p>
                                            <p> Referee Type : <?php echo $record['referee_type']; ?></p>
                                            <a class="btn btn-primary btn-sm" aria-current="page" href="SignUp.php"> Edit </a>
                                            <a class="btn btn-primary btn-sm" aria-current="page" href="SignUp.php"> Remove </a>
                                        </div>	

                                    </div>							
                                </div>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Log errors to a file
    ini_set('error_log', 'error.log');
}
?> 	  

                            <!--
                          <div class="panel-group">
                                <div class="panel panel-default">
                                  <div class="panel-heading">Invite Referrees below</div>
                                  <div class="panel-body"> 
                                        Click here to add or invite a referree to your network  
                                            <a class="btn btn-primary btn-sm" aria-current="page" href="SignUp.php"> Invite </a>
                                        </div>	
                                        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!" onclick="openCity(event, 'Surveys')"> Surveys</a>
                                </div>	-->						
                        </div>
                    </div>
                </div>
            </div>
            <!-- MANUALLY ADD REFEREEE TO NETWORK -->
            <div id="Addreferree" class="tabcontent" width="100%">				
                <div class="container" width="100%">
                    <div class="row" width="100%">
                        <!-- Blog entries-->
                        <div class="col-lg-8">
                            <!-- Featured blog post-->
                            <div class="card mb-4">

                                <div class="card-body">

                                    <div class="card-header"><h4> Add Referee </h4></div>
                                    <!-- Sign up form-->

                                    <form method="post" name="form_invite_referee" action="candidate_home.php#form_invite_referee" autocomplete="on">
                                    <!--  <form method="post" action="<?php //echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" autocomplete="on"> -->
                                        <!--  <form name="my-form1" action="form.php#my-form1"> -->
                                        <div class="card-body">
                                            <div class="input-group">
                                                <p class="card-text"> Click link to sign-on with linkedin  Or complete form below to sign-on manually.  </p> <br />
                                                <p class="card-text" id="passerror"   style="color:red"> <?php if (isset($passError)) {
                                echo $passError;
                            } ?></p> <br /> 
                                                <p class="card-text" id="emailerror" style="color:red"> <?php if (isset($emailError)) {
                                echo $emailError;
                            } ?></p> <br />
                                                <p class="card-text" id="emailpass" style="color:green"> <?php if (isset($emailPass)) {
                                echo $emailPass;
                            } ?></p> <br />
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group">
                                                <p class="card-text">Complete profile using linkedin or complete profile below.  </p> <br />
                                            </div>
                                            <!--
                                            <div class="input-group">
                                                    <a class="btn btn-primary" name="submit_invite" href="#!">  Send invite link</a>
                                            </div> -->
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group">
                                                <select class="form-control" type="text" name="txtreferee_type" id="w3lName" placeholder="Your Name" required="" >
                                                    <option value> Referee Type</option>			
                                                    <option value="academic"> Academic references </option>		
                                                    <option value="character"> Character references </option>		
                                                    <option value="workref"> Work references </option>
                                                    <option value="employer"> Employer </option>
                                                    <option value="former_coworkers"> Former coworkers</option>
                                                    <option value="advisor"> Advisor </option>
                                                    <option value="colleague"> Colleague </option>
                                                    <option value="clients"> Clients </option>
                                                    <option value="mentor"> Mentor </option>
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
                                                <input class="form-control" type="text" placeholder="Referee Contact" name="txtcontact" aria-label="Enter search term..." aria-describedby="button-search" />

                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="company" name="txtcompany" aria-label="Enter search term..." aria-describedby="button-search" />

                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group">
                                                <select class="form-control" type="text" name="txtindustry" id="w3lName" placeholder="Your Name" required="" >
                                                    <option value> Select Industry</option>	
                                                    <!--
                                                    <optgroup label="Information Technology (IT)">
                                                            <option value="IT_SoftwareDevelopment"> Software Development </option>
                                                            <option value="informationtech"> Hardware Manufacturing </option>
                                                            <option value="informationtech"> IT Services </option>
                                                            <option value="informationtech"> Other </option>
                                                    </optgroup> -->

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
                                                <input class="form-control" type="text" name="txtemail" placeholder="Referee Email" aria-label="Enter search term..." aria-describedby="button-search" />

                                            </div>
                                        </div>


                                        <div class="card-body">
                                            <!--
                                            <div class="input-group">
                                                    <input class="" type="checkbox" name="termsandconditions" placeholder="Email" aria-label="Enter search term..." aria-describedby="button-search" />
                                                    &nbsp &nbsp
                                                    <a href="#!"> Accept all terms and conditions</a>
                                                                                                                    
                                            </div> 
                                            <div class="input-group">
                                                    <input class="" type="checkbox" name="termsandconditions" placeholder="Email" aria-label="Enter search term..." aria-describedby="button-search" />
                                                    &nbsp &nbsp
                                                    <a href="images/UCuseragreement.pdf"> Accept terms and conditions </a>
                                                    
                                            </div> -->
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group">
                                                <button class="btn btn-primary" id="button-search" type="submit" name="submit"> Add Referee  </button>
                                            </div>
                                        </div>

                                    </form> 											
                                </div>
                            </div>								
                        </div>								
                    </div>
                </div>					
            </div> <!-- end of panel -->

            <!-- SEND INVITE REFEREE TO JOIN -->
            <div id="invitereferee" class="tabcontent" width="100%">				
                <div class="container" width="100%">
                    <div class="row" width="100%">
                        <!-- Blog entries-->
                        <div class="col-lg-8">
                            <!-- Featured blog post-->
                            <div class="card mb-4">

                                <div class="card-body">

                                    <div class="card-header"><h4> Invite Referee </h4></div>
                                    <!-- Sign up form-->

                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
                                        <div class="card-body">
                                            <div class="input-group">
                                                <p class="card-text">Complete profile using linkedin or complete profile below.  </p> <br />
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <div class="input-group">

                                                <p class="card-text" id="passerror"   style="color:red"> <?php if (isset($passError)) {
                                echo $passError;
                            } ?></p> <br /> 
                                                <p class="card-text" id="emailerror" style="color:red"> <?php if (isset($emailError)) {
                                echo $emailError;
                            } ?></p> <br />

                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group">
                                                <select class="form-control" type="text" name="txtprofile_type" id="w3lName" placeholder="Your Name" required="" >
                                                    <option value> Referee Type</option>			
                                                    <option value="academic"> Academic references </option>		
                                                    <option value="character"> Character references </option>		
                                                    <option value="workref"> Work references </option>
                                                    <option value="employer"> Employer </option>
                                                    <option value="former_coworkers"> Former coworkers</option>
                                                    <option value="advisor"> Advisor </option>
                                                    <option value="colleague"> Colleague </option>
                                                    <option value="clients"> Clients </option>
                                                    <option value="mentor"> Mentor </option>
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
                                                <input class="form-control" type="text" placeholder="Referee Contact" name="txtcontact" aria-label="Enter search term..." aria-describedby="button-search" />

                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="input-group">
                                                <input class="form-control" type="text" name="txtemail" placeholder="Referee Email" aria-label="Enter search term..." aria-describedby="button-search" />

                                            </div>
                                        </div>


                                        <div class="card-body">
                                            <div class="input-group">
                                                <button class="btn btn-primary" id="button-search" type="submit" name="submit_invite"> Send invite link  </button>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="input-group">

                                                <h3 class="card-text" id="emailpass" style="color:green"><b> <?php if (isset($emailPass)) {
                                echo $emailPass;
                            } ?></b></h3> <br />
                                            </div>
                                        </div>

                                    </form> 											
                                </div>
                            </div>								
                        </div>								
                    </div>
                </div>					
            </div> <!-- end of panel -->				
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
