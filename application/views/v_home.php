<!DOCTYPE html>
<html>

<head>
	<title>home</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
</head>

<body>
	<!-- Default form login -->
	<form method="post" class="text-center border border-light offset-md-4 col-md-4 p-5 mt-5" action="<?= base_url('auth') ?>">
		<p class="h4 mb-4">Sign in</p>
		<!-- Email -->
		<input type="email" name='email' id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
		<!-- Password -->
		<input type="password" name="pass" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
		<div class="d-flex justify-content-around">
			<div>
				<!-- Remember me -->
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
					<label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
				</div>
			</div>
			<div>
				<!-- Forgot password -->
				<a href="">Forgot password?</a>
			</div>
		</div>
		<!-- Sign in button -->
		<button class="btn btn-info my-4" type="submit">Sign in</button>
		<!-- Register -->
		<p>Not a member?
			<a href="">Register</a>
		</p>
		<!-- Social login -->
		<p>or sign in with:</p>
		<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
		<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
		<a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
		<a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>
	</form>
	<!-- Default form login -->
</body>

</html>