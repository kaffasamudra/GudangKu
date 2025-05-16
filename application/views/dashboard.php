<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <link rel="icon" href="https://freeiconshop.com/wp-content/uploads/edd/list-flat.png" type="image/png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap/") ?>css/style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100" style="background: linear-gradient(45deg, rgba(0, 255, 255, 0.2), rgba(255, 255, 255, 0.2), rgba(152, 255, 152, 0.2));">
                <div class="sidebar-logo">
                    <a href="#">GudangKu</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= site_url('dashboard') ?>" class="sidebar-link"><i class="fa-solid fa-home pe-2"></i>Dashboard</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= site_url('barang') ?>" class="sidebar-link collapsed" data-bs-target="#pages"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Data Barang
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= site_url('jenis') ?>" class="sidebar-link collapsed" data-bs-target="#pages"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Data Jenis Barang
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= site_url('login/logout'); ?>" class="sidebar-link collapsed">Logout</a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="https://e7.pngegg.com/pngimages/527/663/png-clipart-logo-person-user-person-icon-rectangle-photography.png" class="avatar img-fluid rounded-circle" alt="">
                            </a>
                            <div class="dropdown-menu p-2 text-muted dropdown-menu-end" style="text-align: center;">
                                <img src="https://e7.pngegg.com/pngimages/527/663/png-clipart-logo-person-user-person-icon-rectangle-photography.png" class="avatar img-fluid rounded-circle" alt="" style=" position: center;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $this->session->userdata('username'); ?></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, <?php echo $this->session->userdata('username'); ?></h4>
                                                <p class="mb-0">User</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h2>
                                                <?= $count_barang; ?>
                                            </h2>
                                            <p><a href="<? base_url('') ?>">Data Barang</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>Aps version 1.0</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url("assets/bootstrap/") ?>js/script.js"></script>
</body>

</html>
