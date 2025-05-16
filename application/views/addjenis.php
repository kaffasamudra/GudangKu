<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jenis Barang</title>
</head>
<body>
    <h2>Tambah Jenis Barang</h2>

    <form action="<?= site_url('jenis_barang/store') ?>" method="post">
        <label>Jenis Barang:</label><br>
        <input type="text" name="jenis_barang" required><br><br>

        <button type="submit">Simpan</button>
        <a href="<?= site_url('jenis_barang') ?>">↩️ Kembali</a>
    </form>
</body>
</html>
