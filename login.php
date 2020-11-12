<?php include 'config.php'; ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Login page</title>
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<!--font awsome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!--Custom css-->
	<link rel="stylesheet" href="css/login.css" />
	
</head>
<body>
	<section class="Login_form">
		<div class="container">
			<div class="d-flex justify-content-center">
				<div class="card">
					<div class="card-header">
						<h3>Sign in</h3>
						<div class="d-flex justify-content-end social_icon">
							<span><i class="fab fa-facebook-square"></i></span>
							<span><i class="fab fa-google-plus-square"></i></span>
							<span><i class="fab fa-twitter-square"></i></span>
						</div>	
					</div>
					<div class="card-body">
					<form action="login.php" method="Post">
						<div class="input-group mb-3">
						  <div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-user-lock"></i></span>
						  </div>
						  <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
						</div>
						<div class="input-group mb-3">
						  <div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
						  </div>
						  <input type="text" class="form-control" placeholder="Password" aria-label="Password" name="password"
						   aria-describedby="basic-addon1">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<input type="submit" value="login" name="submit" class="btn float-right login_btn">
						</div>
					</form>
						
					</div>
					<div class="card-footer">
						<div class="d-flex justify-content-center">
							<p>Don't have any account?</p>
							<a href="signup.php">Sign up</a>
						</div>
						<div class="d-flex justify-content-center">
							<a href="#">Forgot your password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>