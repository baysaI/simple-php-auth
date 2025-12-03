<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP Login Template</title>
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
							<a class="nav-link active" href="index.php">Home</a>
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
						<?php 
							if(isset($_SESSION["userId"])){
								echo '<li class="nav-item">
									<form action="includes/logout.inc.php" method="post" class="form-inline">
										<button type="submit" name="logout-submit" class="btn btn-outline-light ms-2">Log Out</button>
									</form>
								</li>';
							}
						?>
					</ul>
				</div>
			</div>
		</nav>
		<main class="py-4">
			<div class="container">
				<?php 
					if(isset($_SESSION["userId"])){
						require 'homepage.php';
					}else{
						require 'login.php';
					}	 
				?>
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
