<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?= base_url("assets/img/logo perpus.png") ?>" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="<?= base_url("assets/") ?>css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <div class="login-dark">
        <?php echo form_open('loginn'); ?>
            <div class="illustration">
                <img src="https://e7.pngegg.com/pngimages/527/663/png-clipart-logo-person-user-person-icon-rectangle-photography.png"
                    class="img-fluid rounded-circle" alt="Login Illustration" style="width: 100px;">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <a href="<?= base_url('regis') ?>" class="forgot">Belum punya akun? Register</a>

            <?php if ($this->session->flashdata('error')): ?>
                <p class="forgot"><?= $this->session->flashdata('error'); ?></p>
            <?php endif; ?>

            <?php if ($this->session->flashdata('success')): ?>
                <p class="forgot"><?= $this->session->flashdata('success'); ?></p>
            <?php endif; ?>
        <?php echo form_close(); ?>
    </div>

    <!-- Optional Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
