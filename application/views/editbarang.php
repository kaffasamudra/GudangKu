<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
</head>
<body>
    <h2>Edit Barang</h2>
    <form method="post" action="<?= site_url('barang/update') ?>">
        <input type="hidden" name="id" value="<?= $barang->id ?>">

        <p>
            <label>Jenis Barang</label><br>
            <select name="id_jenis" required>
                <?php foreach ($jenis as $j): ?>
                    <option value="<?= $j->id ?>" <?= ($barang->id_jenis == $j->id) ? 'selected' : '' ?>>
                        <?= $j->jenis_barang ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label>Nama Barang</label><br>
            <input type="text" name="nama_barang" value="<?= $barang->nama_barang ?>" required>
        </p>
        <p>
            <label>Harga</label><br>
            <input type="number" name="harga" value="<?= $barang->harga ?>" required>
        </p>
        <p>
            <label>Stok</label><br>
            <input type="number" name="stok" value="<?= $barang->stok ?>" required>
        </p>
        <p>
            <button type="submit">Update</button>
            <a href="<?= site_url('barang') ?>">Kembali</a>
        </p>
    </form>
</body>
</html>
