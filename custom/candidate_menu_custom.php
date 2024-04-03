<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="agent_home.php">OneReference  |</a>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="candidate_home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="candidate_home.php">Resources and Support</a></li>
            <li class="nav-item"><a class="nav-link" href="candidate_home.php">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="referee.signup">Referee Signup</a></li>
        </ul>	

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">                        
                <li class="nav-item" <?php echo !isset($_SESSION['loggedin']) ? 'visible' : 'hidden'; ?> ><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item" <?php echo isset($_SESSION['loggedin']) ? 'visible' : 'hidden'; ?> ><a class="nav-link" href="">Welcome <?php echo $_SESSION['fname'] ?></a></li>
                <li class="nav-item" <?php echo isset($_SESSION['loggedin']) ? 'visible' : 'hidden'; ?> ><a class="btn btn-primary btn-sm" aria-current="page" href="logout.php">Logout</a></li>
                <li class="nav-item" <?php echo !isset($_SESSION['loggedin']) ? 'visible' : 'hidden'; ?> ><a class="btn btn-primary btn-sm" aria-current="page" href="signup.php">Sign Up</a></li>						
            </ul>
        </div>
    </div>
</nav>
