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
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content"style="width:270px;">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo.png" alt="Klorofil Logo" style=" width:100px;"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" action="member_register.php" method="post">
							<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" required="">
								</div>
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="text" class="form-control" name="username" id="username" placeholder="Username" required="">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
								</div>

								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block "style="padding:5px 28px; width:80%; border-radius:20px; background-color:rgb(29 51 62 / 92%);border:none;
								">REGISTER </button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="index.php">Are You A Member? </a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay" style="background-color:rgb(29 51 62);"></div>
						<div class="content text">
							<h1 class="heading" style="font-family:sons-serif;text-align:center;">Welcome Blood Bank System</h1>
							<p style="text-align:center;font-family:sons-serif; font-size:15px;"> Developed By: Sanjeev Gangwar</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>