<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <link rel="icon" href="https://freeiconshop.com/wp-content/uploads/edd/list-flat.png" type="image/png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jenis Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap/") ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
    <style>        a.button { padding: 6px 12px; background: #007bff; color: white; text-decoration: none; border-radius: 4px; }
        a.button.red { background: #dc3545; }
    </style>
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
                        <a href="<?= base_url('dashboard') ?>" class="sidebar-link"><i class="fa-solid fa-home pe-2"></i>Dashboard</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= base_url('barang') ?>" class="sidebar-link collapsed" data-bs-target="#pages"
                            aria-expanded="false"><i class="fa-solid fa-ticket pe-2"></i>
                            Data Barang
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= base_url('jenis') ?>" class="sidebar-link collapsed" data-bs-target="#auth" 
                            aria-expanded="false"><i class="fa-solid fa-list pe-2"></i>
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
                                    <h5 class="card-title"><?php echo $this->session->userdata('user'); ?></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title text-center">
                                Daftar Pengguna
                            </h5>
                        </div>
                        <div class="card-body">
                            <div id="flash-message" data-message="<?= $this->session->flashdata('message') ?>"></div>
                            <table id="myTable" class="table table-striped ov" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Fullname</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $u): ?>
                                    <tr>
                                        <td><?= $u->id ?></td>
                                        <td><?= $u->username ?></td>
                                        <td><?= $u->fullname ?></td>
                                        <td><?= $u->role ?></td>
                                        <td><?= $u->is_active == 'on' ? 'Aktif' : 'Nonaktif' ?></td>
                                        <td>
                                            <a class="button" href="<?= site_url('admin/toggle_user/'.$u->id) ?>">
                                                <?= $u->is_active == 'on' ? 'Nonaktifkan' : 'Aktifkan' ?>
                                            </a>
                                            <a class="button red" href="<?= site_url('admin/delete_user/'.$u->id) ?>" onclick="return confirm('Yakin hapus user ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
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
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <script src="<?= base_url("assets/bootstrap/") ?>js/script.js"></script>

    <!-- //jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- //datatable -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
    <script type="text/javascript">
        new DataTable('#myTable', {
        layout: {
            topStart: {
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            }
        }
    });
    </script>
</body>

</html>
