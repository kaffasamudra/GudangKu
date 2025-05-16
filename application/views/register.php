<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="<?= base_url("assets/img/logo.png") ?>" type="image/png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi Admin</title>
    <link href="<?= base_url("assets/") ?>css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
	<div class="login-dark">
		<div>
			<?php if ($this->session->flashdata('success')): ?>
				<p class="forgot text-success"><?= $this->session->flashdata('success'); ?></p>
			<?php endif; ?>

			<?php if ($this->session->flashdata('error')): ?>
				<p class="forgot text-danger"><?= $this->session->flashdata('error'); ?></p>
			<?php endif; ?>

			<?= validation_errors('<p class="forgot text-danger">', '</p>'); ?>

			<form method="post" action="<?= site_url('login/register'); ?>">
				<div class="illustration">
					<img src="https://e7.pngegg.com/pngimages/527/663/png-clipart-logo-person-user-person-icon-rectangle-photography.png"
						class="img-fluid rounded-circle" alt="Login Illustration" style="width: 100px;">
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="username" placeholder="Username" value="<?= set_value('username'); ?>" required>
				</div>

				<div class="form-group">
					<input class="form-control" type="text" name="fullname" placeholder="Fullname" value="<?= set_value('fullname'); ?>" required>
				</div>

				<div class="form-group">
					<input class="form-control" type="password" name="password" placeholder="Password" required>
				</div>

				<div class="form-group">
					<input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password" required>
				</div>

				<button class="btn btn-primary btn-block" type="submit">Register</button>
    	        <a href="<?= base_url('login') ?>" class="forgot">Sudah punya akun? Login</a>
			</form>
		</div>
	</div>

	<!-- Optional JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
