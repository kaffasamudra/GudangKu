<!DOCTYPE html>
<html>
<head>
    <title>Kelola Pengguna</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background: #eee; }
        a.button { padding: 6px 12px; background: #007bff; color: white; text-decoration: none; border-radius: 4px; }
        a.button.red { background: #dc3545; }
    </style>
</head>
<body>

<h2>Daftar Pengguna</h2>

<table>
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

</body>
</html>
