
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/agent_home.css" rel="stylesheet" />		
    </head>
    <body>        
        <!-- Responsive navbar-->
        <?php include_once("custom/agent_menu_custom.php"); ?>	
        <!-- Header-->
        <header class="py-5">
            <div class="d-flex" id="wrapper">
                <!-- Sidebar-->
                <div class="border-end bg-white" id="sidebar-wrapper">
                    <!--<div class="sidebar-heading border-bottom bg-light">User Home</div> -->

                    <div class="list-group list-group-flush">												
                        <a id="defaultOpen" class="list-group-item list-group-item-action list-group-item-light p-3 tablinks" href="#!" onclick="activeTab(event, 'search')"> Search Candidates </a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 tablinks" href="#!" onclick="activeTab(event, 'connects')">Connects</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 tablinks" href="#!" onclick="activeTab(event, 'invitereferee')"> Invite Candidate</a>
                    </div>
                </div>

                <!-- Page content wrapper-->
                <div id="page-content-wrapper" width="100%">
                    <div id="search" class="tabcontent">
                        <div class="container-fluid">
                            <div class="container">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">    
                                    <div class="card mb-4">
                                        <div class="card-header">Search Candidate</div>
                                        <div class="card-body">
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="Enter search term..." name="txtsearch" aria-label="Enter search term..." aria-describedby="button-search" />
                                                <button class="btn btn-primary" id="button-search" type="submit" name="searchcandidate"> Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php
//include ("storescripts/connect_to_mysql.php");
                                if (isset($_POST['searchcandidate'])) {
                                    $candidatevalue = $_POST['txtsearch'];
                                    echo 'search value' . $candidatevalue;
                                }
                                ?>
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
                    <div id="connects" class="tabcontent">
                        <div class="container-fluid">
                            <div class="container">
                                <h2> Candidate Connections</h2>
                                <p> See all candidate referee connections below. Invite new referees below. </p>
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Invite Referees below</div>
                                        <div class="panel-body"> 
                                            Click here to add or invite a referee to your network  
                                            <a class="btn btn-primary btn-sm" aria-current="page" href="Signup.html"> Invite </a>
                                        </div>	
                                        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!" onclick="openCity(event, 'Surveys')"> Surveys</a>
                                    </div>							
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div id="invitereferee" class="tabcontent">	
                        <div class="container-fluid">
                            <div class="container">
                                <div class="panel-group">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="card-header"><h4> Invite Referee </h4></div>
                                            <!-- Sign up form-->
                                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
                                                <div class="card-body">
                                                    <div class="input-group">
                                                        <p class="card-text">Complete profile using Linkedin or complete profile below.  </p> <br />
                                                    </div>
                                                    <div class="input-group">
                                                        <a class="btn btn-primary" name="submit_invite" href="#!">  Send invite link</a>
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
                                                        <select class="form-control" type="text" name="txtindustry" id="w3lName" placeholder="Your Name" required="" >
                                                            <option value> Select Industry</option>	
                                                            <option value="informationtech"> Information Technology (IT) </option>		
                                                            <option value="healthcare"> Health Care </option>		
                                                            <option value="finance"> Finance and Accounting </option>
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
                                                        <button class="btn btn-primary" id="button-search" type="submit" name="submit_invite"> Add Referee  </button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="input-group">
                                                        <p class="" ><a href="login.html">Click to Login</a></p>
                                                    </div>
                                                </div>										
                                            </form> 											
                                        </div>
                                    </div>	                         
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </header>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="scripts/agent_home.js"></script>
    </body>

</html>
