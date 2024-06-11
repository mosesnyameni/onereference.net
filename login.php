<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('./db_connect.php');
?>

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

	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
</head>
<?php include('shared/menu_general.php'); ?>

<body>
	<header class="py-5 bg-light border-bottom mb-4">
		<div class="container">
			<div class="text-center my-5">
				<h1 class="fw-bolder"> Join Onereference </h1>
				<p class="lead mb-0"> Sign up and join our platform for free. Gain access to helpful features that
					make the recruitment process faster and easier.</p>
			</div>
		</div>
	</header>

	<div id="signin" class="tabcontent">
		<div class="container">
			<div class="row">
				<!-- Blog entries-->
				<div class="col-lg-8">
					<!-- Featured blog post-->
					<div class="card mb-4">
						<div class="card-body">
							<div class="card-header">
								<h4> Sign In </h4>
							</div>
							<!-- Sign up form-->
							<form id="login-form">
								<div class="card-body">
									<div class="input-group">
										<p class="card-text"> Click link to sign-on with Linkedin Or complete form below to sign-on manually. </p> <br />
									</div>
									<div class="input-group">
										<a class="btn btn-primary" href="#!"> Linkedin Signin</a>
									</div>
								</div>
								<div class="card-body">
									<div class="input-group">
										<input type="text" id="email" name="email" class="form-control">
									</div>
								</div>
								<div class="card-body">
									<div class="input-group">
										<input type="password" id="password" name="password" class="form-control">
									</div>
								</div>
								<div class="card-body">
									<div class="input-group">
										<button class="btn btn-primary"> Submit</button>
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
								<p class="card-text"><b>Welcome to Onereference. A platform that automates the referal check process.</b></p>
								<p class="card-text"> <img src="images/angle-right.png" alt=""> Agents conduct referal checks seamlessly on One platform</p>
								<p class="card-text"> <img src="images/angle-right.png" alt=""> Candidates gather all your referrees on One platform</p>
								<p class="card-text"> <img src="images/angle-right.png" alt=""> Use linkedin for easy signup and autocomplete your profile </p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	$('#login-form').submit(function(e) {
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled', true).html('Logging in...');
		if ($(this).find('.alert-danger').length > 0)
			$(this).find('.alert-danger').remove();
		$.ajax({
			url: 'ajax.php?action=login',
			method: 'POST',
			data: $(this).serialize(),
			error: err => {
				console.log(err)
				$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success: function(resp) {
				if (resp == 1) {
					location.href = 'home.php?page=dashboard';
				} else {
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
	$('.number').on('input', function() {
		var val = $(this).val()
		val = val.replace(/[^0-9 \,]/, '');
		$(this).val(val)
	})
</script>
<!-- Footer-->
<footer class="py-5 bg-dark">
	<div class="container px-4 px-lg-5">
		<p class="m-0 text-center text-white">Powered by AI | Copyright &copy; umbrellacapital 2023</p>
	</div>
</footer>
<!-- Bootstrap core JS  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>