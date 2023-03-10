<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User Registration</title>
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
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="/" ><h2 class="text-white">HMS | Patient Registration</h2></a>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
				<div id="register-message" class="text-success"></div>
					 <form id="register-form">
						@csrf
						<fieldset id="bg">
							<legend>
								Sign Up
							</legend>
							<p>
								Enter your personal details below:
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="City" required>
							</div>
							<div class="form-group">
								<!-- <label class="block">
									Gender
								</label> -->
								<select class="form-control" id="gender" name="gender">
								<option value="gender">Select Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								</select>
							</div>
							<p>
								Enter your account details below:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<!-- <div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control"  id="password-confirm" name="password-confirm" placeholder="Password-Confirm" required>
									<i class="fa fa-lock"></i> </span>
							</div> -->
							<!-- <div class="form-group">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
									<label for="agree">
										I agree
									</label>
								</div>
							</div> -->
							<div class="form-actions">
								<p>
									Already have an account?
									<a href="user-login">
										Log-in
									</a>
								</p>
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form> 
					<div id="register-message" class="text-success"></div>
					<!-- <form id="register-form">
						@csrf
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" class="form-control" id="address" name="address">
						</div>
						<div class="form-group">
							<label for="city">City</label>
							<input type="text" class="form-control" id="city" name="city">
						</div>
						
					<div class="form-group">
						<label for="gender">Gender</label>
						<select class="form-control" id="gender" name="gender">
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password">
						</div>
						<div class="form-group">
							<label for="password-confirm">Confirm Password</label>
							<input type="password" class="form-control" id="password-confirm" name="password_confirmation">
						</div>
						<button type="submit" class="btn btn-primary">Register</button>
					</form> -->
					<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
					<script>
						$(document).ready(function(){
							$("#register-form").submit(function(e){
								e.preventDefault();

								$.ajax({
									type: "POST",
									url: '/registerP',
									data: $("#register-form").serialize(),
									success: function(response) {
										$("#register-message").html(response.message);
										$('#register-form')[0].reset();
										setTimeout(function(){
       									 $("#register-message").hide();
    									}, 3000);
									},
									error: function(response) {
										$("#register-message").html(response.responseJSON.error);
									}
								});
							});
						});
					</script>
					<div class="copyright">
						&copy; <span class="current-year">
						
						</span><span class="text-bold text-uppercase"> &nbsp; &nbsp;Xenottabyte Serviece pvt.ltd</span>. <span>All rights reserved</span>
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
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>	
	</body>
	<!-- end: BODY -->
</html>