<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Login Latihan CI</title>
	<link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header">
									<h3 class="text-center font-weight-light my-4">Login</h3>
								</div>
								<div class="card-body">
									<form action="<?php echo base_url('auth') ?>" method="post">
										<div class="form-floating mb-3">
											<input class="form-control" id="inputEmail" type="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
											<?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
											<label for="inputEmail">Email address</label>
										</div>
										<div class="form-floating mb-3">
											<input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
											<?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
											<label for="inputPassword">Password</label>
										</div>
										<div class="form-check mb-3">
											<input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
											<label class="form-check-label" for="inputRememberPassword">Remember Password</label>
										</div>
										<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
											<a class="small" href="password.html">Forgot Password?</a>
											<button class="btn btn-primary" type="submit">Login</button>
										</div>
									</form>
								</div>
								<div class="card-footer text-center py-3">
									<div class="small"><a href="<?php echo base_url('auth/register'); ?>">Belum Punya akun? Buat!</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
</body>

</html>