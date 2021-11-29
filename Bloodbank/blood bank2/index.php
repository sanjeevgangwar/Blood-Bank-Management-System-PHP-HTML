<?php
	session_start();
?>
<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Please Login Here</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
		<?php
						if(isset($_SESSION['success'])){
							echo "";
						}
					?>
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">

						<div class="content" style="width:270px;">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo.png" alt="Klorofil Logo" style=" width:185px;"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" action="login.php" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="text" class="form-control" name="username" id="username" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block"style="border-radius:30px;background-color:rgb(29 51 62 / 92%);border:none;">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="register.php">Not A Member? </a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"style="background-color:rgb(29 51 62 / 92%);"></div>
						<div class="content text">
							<h1 class="heading"style="font-family:momospace;text-align:center">Blood Bank Management System Project</h1>
							<p style="font-size: 15px;text-align:center;font-family:serif">(Donating blood is a divine experience, try it today!)</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>
