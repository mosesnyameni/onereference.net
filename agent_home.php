<!DOCTYPE html>
<html lang="en">

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Onereference | Agent Home</title>
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Bootstrap icons-->            
            <!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"--> 
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
            <link href="css/styles.css" rel="stylesheet" />
            <link href="css/agent_home.css" rel="stylesheet" />	     
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="css/styles.css" rel="stylesheet" />	
        </head>
        <body>            
            <?php include_once("services/agent_service.php"); ?>
            <div class="d-flex" id="wrapper">
                <!-- Sidebar-->
                <div class="border-end bg-white" id="sidebar-wrapper">
                    <!--<div class="sidebar-heading border-bottom bg-light">User Home</div> -->
                    <div class="list-group list-group-flush">												
                        <a id="defaultOpen" class="list-group-item list-group-item-action list-group-item-light p-3 tablinks" href="#!" onclick="activeTab(event, 'searchTab')"> Search Candidates </a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 tablinks" href="#!" onclick="activeTab(event, 'connects')">Connects</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 tablinks" href="#!" onclick="activeTab(event, 'invitereferee')"> Invite Candidate </a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 tablinks" href="#!" onclick="activeTab(event, 'createquestion')"> Create Questionnaire </a>
                    </div>
                </div>
                <!-- Page content wrapper-->
                <div id="page-content-wrapper" width="100%">
                    <!-- Page content-->
                    <div id="searchTab" class="tabcontent">
                        <div class="container-fluid">
                            <div class="container">
                                <div class="card mb-4">
                                    <div class="card-header">Search Candidate</div>
                                    <div class="card-body">
                                        <div class="input-group">
                                            <input class="form-control" type="text" id="search" placeholder="Search" aria-label="Enter search term..." aria-describedby="button-search" />
                                            <!--
                                            <input id="txtname" class="form-control" type="text" placeholder="Enter candidate name..." name="txtname" aria-label="Enter search term..." aria-describedby="button-search" /></div>
                                            <input id="txtsurname" class="form-control" type="text" placeholder="Enter candidate surname..." name="txtsurname" aria-label="Enter search term..." aria-describedby="button-search" />
                                            <input id="txtemail" class="form-control" type="text" placeholder="Enter candidate email..." name="txtemail" aria-label="Enter search term..." aria-describedby="button-search" />
                                            
                                            <input class="form-control" type="text" placeholder="Enter search term..." name="txtsearch" aria-label="Enter search term..." aria-describedby="button-search" /> 
                                            <button class="btn btn-primary" id="button-search" type="submit" name="searchcandidate"> Search</button> -->
                                        </div>
                                    </div>
                                </div>


                                <h2>Candidate Details </h2>
                                <p> Please see the below search candidate </p>
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><h4><b>Candidate Connect </b> </h4></div>
                                        <div class="panel-body"> 
                                            <p id="display"> </p>
                                            <div id="success-message" style="display: none;"></div>
                                        </div>
                                        <?php
                                        error_reporting(E_ALL);
                                        ini_set('display_errors', 1);
                                        // Log errors to a file
                                        ini_set('error_log', 'error.log');
                                        ?> 
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page content - conceal all information in each pannel-->
                <div id="connects" class="tabcontent">
                    <div class="container-fluid">
                        <div class="container">
                            <h2> Candidate Connections</h2>
                            <p> See all referree connections below. Invite new referees and increase your contact list. </p>

                            <!-- Page content - conceal all information in each pannel-->
                            <!-- GET CONNECTS CONTACT AND DISPLAY -->
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
                                            <p> Candidate email : <?php echo $record['email']; ?></p>
                                            <p> Candidate contact : <?php echo $record['contact_num']; ?></p>
                                            <p> Candidate Type : <?php echo $record['referee_type']; ?></p>
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

                        </div>
                    </div>
                </div>


                <!-- SEND INVITE REFEREE TO JOIN -->
                <div id="invitereferee" class="tabcontent" width="100%">				
                    <div class="container" width="100%">
                        <div class="row" width="100%">
                            <!-- Blog entries-->
                            <div class="col-lg-8">
                                <!-- Featured blog post-->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-header"><h4> Invite Candidate </h4></div>
                                        <!-- Sign up form-->
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
                                            <div class="card-body">
                                                <div class="input-group">
                                                    <p class="card-text"> Invite candidate to join the platform  </p> <br />
                                                </div>
                                                <div class="input-group">
                                                    <p class="card-text"> This will allow the agent to conduct referral checks for the candidate once enrolled    </p> <br />
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
                                                    <input class="form-control" type="text" placeholder="Candidate Name" name="txtname" aria-label="Enter search term..." aria-describedby="button-search" />

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" placeholder="Candidate Surname" name="txtsurname" aria-label="Enter search term..." aria-describedby="button-search" />

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" placeholder="Candidate Contact" name="txtcontact" aria-label="Enter search term..." aria-describedby="button-search" />

                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="txtemail" placeholder="Candidate Email" aria-label="Enter search term..." aria-describedby="button-search" />

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
                </div> 
                <!-- end of panel -->	

                <!-- SEND INVITE REFEREE TO JOIN -->
                <div id="createquestion" class="tabcontent" width="100%">				
                    <div class="container" width="100%">
                        <div class="row" width="100%">
                            <!-- Blog entries-->
                            <div class="col-lg-8">
                                <!-- Featured blog post-->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-header"><h4> Invite Candidate </h4></div>
                                        <!-- Sign up form-->
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
                                            <div class="card-body">
                                                <div class="input-group">
                                                    <p class="card-text"> Invite candidate to join the platform  </p> <br />
                                                </div>
                                                <div class="input-group">
                                                    <p class="card-text"> This will allow the agent to conduct referral checks for the candidate once enrolled    </p> <br />
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
                                                    <input class="form-control" type="text" placeholder="Candidate Name" name="txtname" aria-label="Enter search term..." aria-describedby="button-search" />

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" placeholder="Candidate Surname" name="txtsurname" aria-label="Enter search term..." aria-describedby="button-search" />

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" placeholder="Candidate Contact" name="txtcontact" aria-label="Enter search term..." aria-describedby="button-search" />

                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="txtemail" placeholder="Candidate Email" aria-label="Enter search term..." aria-describedby="button-search" />

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
                </div> 
                <!-- end of panel -->
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="scripts/agentconnect.js" data-agent-id="<?php echo $tempagent_id; ?>"></script> 
        <script type="text/javascript" src="scripts/agent_home.js"></script>  
        <script src="scripts/scripts.js" type="text/javascript"></script>
    </body>

</html>
