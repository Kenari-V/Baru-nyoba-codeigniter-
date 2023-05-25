<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Register</title>
	<link href="<?php echo base_url('/assets/css/styles.css') ?>" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-7">
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header">
									<h3 class="text-center font-weight-light my-4">Buat akun</h3>
								</div>
								<div class="card-body">
									<form action="<?php echo base_url('Auth/register') ?>" method="post">
										<div class="row mb-3">
											<div class="col-md-12">
												<div class="form-floating mb-3 mb-md-0">
													<input class="form-control" id="nama" name="nama" type="text" placeholder="Nama Lengkap" value="<?php echo set_value('nama'); ?>" />
													<?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
													<label for="inputFirstName">Nama</label>
												</div>
											</div>
										</div>
										<div class="form-floating mb-3">
											<input class="form-control" id="inputEmail" type="email" name="email" placeholder="email" value="<?php echo set_value('email'); ?>" />
											<?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
											<label for="inputEmail">Email address</label>
										</div>
										<div class="row mb-3">
											<div class="col-md-6">
												<div class="form-floating mb-3 mb-md-0">
													<input class="form-control" id="inputPassword" type="password" name="password" placeholder="Buat password" />
													<?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
													<label for="inputPassword">Password</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-floating mb-3 mb-md-0">
													<input class="form-control" id="inputPasswordConfirm" type="password" name="confirmpassword" placeholder="Confirm password" />
													<?php echo form_error('confirmpassword', '<small class="text-danger pl-3">', '</small>'); ?>
													<label for="inputPasswordConfirm">Confirm Password</label>
												</div>
											</div>
										</div>
										<div class="mt-4 mb-0">
											<div class="d-grid"><button class="btn btn-primary btn-block" type="Submit">Buat Akun</button></div>
										</div>
									</form>
								</div>
								<div class="card-f,ooter text-center py-3">
									<div class="small"><a href="<?php echo base_url('auth') ?>">Sudah Punya Akun? Login!</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="<?php echo base_url('assets/js/scripts.js') ?>"></script>
</body>

</html>