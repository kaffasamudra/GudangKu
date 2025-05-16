<!DOCTYPE html>
<html>
<head>
    <title>Edit Jenis Barang</title>
</head>
<body>
    <h2>Edit Jenis Barang</h2>

    <form action="<?= site_url('jenis_barang/update/' . $jenis_barang->id) ?>" method="post">
        <label>Jenis Barang:</label><br>
        <input type="text" name="jenis_barang" value="<?= $jenis_barang->jenis_barang ?>" required><br><br>

        <button type="submit">Update</button>
        <a href="<?= site_url('jenis_barang') ?>">Kembali</a>
    </form>
</body>
</html>
