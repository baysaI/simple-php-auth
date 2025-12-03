<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up - PHP Login Template</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body data-theme="light">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="index.php">PHP Login</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<button id="darkModeToggle" class="btn btn-outline-light btn-sm ms-2" title="Toggle Dark Mode">
							<i class="fas fa-moon"></i>
						</button>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<main class="py-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card shadow-sm">
						<div class="card-body">
							<h2 class="card-title text-center mb-4">Sign Up</h2>
							<?php 
								if (isset($_GET["error"])) {
									$errorMessage = '';
									if ($_GET["error"] == "emptyfields") {
										$errorMessage = 'Fill in all the fields';
									} else if ($_GET["error"] == "invalidmailuid") {
										$errorMessage = 'Invalid username and email';
									} else if ($_GET["error"] == "invalidmail") {
										$errorMessage = 'Invalid email';
									} else if ($_GET["error"] == "invaliduid") {
										$errorMessage = 'Invalid username';
									} else if ($_GET["error"] == "passwordcheck") {
										$errorMessage = 'Your passwords do not match';
									} else if ($_GET["error"] == "usertaken") {
										$errorMessage = 'Username is already taken';
									}
									if ($errorMessage) {
										echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											' . $errorMessage . '
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>';
									}
								}
							?>
							<form action="includes/signup.inc.php" method="post">
								<div class="form-group">
									<label for="uid">Username</label>
									<input type="text" class="form-control" id="uid" name="uid" placeholder="Enter your username" required>
								</div>
								<div class="form-group">
									<label for="mail">Email Address</label>
									<input type="email" class="form-control" id="mail" name="mail" placeholder="Enter your email" required>
								</div>
								<div class="form-group">
									<label for="pwd">Password</label>
									<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your password" required>
								</div>
								<div class="form-group">
									<label for="pwd-repeat">Confirm Password</label>
									<input type="password" class="form-control" id="pwd-repeat" name="pwd-repeat" placeholder="Repeat your password" required>
								</div>
								<button type="submit" class="btn btn-primary btn-block" name="signup-submit">Sign Up</button>
							</form>
							<hr>
							<p class="text-center">Already have an account? <a href="index.php">Login here</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php 
		require 'footer.php'; 
	?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="js/theme.js"></script>
</body>
</html>