<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<style>
			body{
				background-color: #196ba6;
			}
		</style>
	</head>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.html"><h2 class="text-white"> HMS | Patient Login</h2></a>
				</div>

				<div class="box-login">
					<form id="login-form" method="post">
						@csrf
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
							<p>
								Please enter your name and password to log in.<br />
								<span style="color:red;"></span>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="email" id="email" placeholder="Email">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" id="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									 </span><a href="#">
									Forgot Password ?
								</a>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account">
								Don't have an account yet?
								<a href="register">
									Create an account
								</a>
							</div>
						</fieldset>
					</form>
					<div id="login-message"></div>
					<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
					<script>
						$(document).ready(function(){
							$("#login-form").submit(function(e){
								e.preventDefault();

								$.ajax({
									type: "POST",
									url: '/login',
									data: $("#login-form").serialize(),
									success: function(response) {
										$("#login-message").html(response.message);
										//Redirect the user to the appropriate page
										window.location.href = '/dashboard';
									},
									error: function(response) {
										$("#login-message").html(response.responseJSON.error);
									}
								});
							});
						});
					</script>

					<div class="copyright">
						&copy; <span class="current-year">2023</span><span class="text-warning text-uppercase "> &nbsp; &nbsp;Xenottabyte Serviece pvt.ltd</span>. <span>All rights reserved</span>
					</div>
			
				</div>

			</div>
		</div>
		<!-- <script src="vendor/jquery/jquery.min.js"></script> -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>	
	</body>
	<!-- end: BODY -->
</html>