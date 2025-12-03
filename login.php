<div class="row justify-content-center">
	<div class="col-md-6">
		<div class="card shadow-sm">
			<div class="card-body">
				<h2 class="card-title text-center mb-4">Login</h2>
				<?php
					if (isset($_GET["error"])) {
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Error!</strong> ';
						if ($_GET["error"] == "invalidmailuid") {
							echo 'Invalid username or email';
						} else if ($_GET["error"] == "wrongpassword") {
							echo 'Wrong password';
						} else if ($_GET["error"] == "nouser") {
							echo 'User not found';
						} else if ($_GET["error"] == "sqlerror") {
							echo 'Database error';
						}
						echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>';
					}
				?>
				<form action="includes/login.inc.php" method="post">
					<div class="form-group">
						<label for="mailuid">Email or Username</label>
						<input type="text" class="form-control" id="mailuid" name="mailuid" placeholder="Enter your email or username" required>
					</div>
					<div class="form-group">
						<label for="pwd">Password</label>
						<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your password" required>
					</div>
					<button type="submit" class="btn btn-primary btn-block" name="login-submit">Login</button>
				</form>
				<hr>
				<p class="text-center">Don't have an account? <a href="signup.php">Sign up here</a></p>
			</div>
		</div>
	</div>
</div>