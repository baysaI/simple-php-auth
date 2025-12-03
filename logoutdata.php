<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Access Denied - PHP Login Template</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body data-theme="light">
	<main class="py-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<h4 class="alert-heading">Access Denied!</h4>
						<p>Please enter correct credentials. You entered wrong username and password.</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="text-center mt-4">
						<a href="index.php" class="btn btn-primary btn-lg">Back to Login</a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php require 'footer.php'; ?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>