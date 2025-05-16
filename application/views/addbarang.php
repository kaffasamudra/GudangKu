<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>
    <h2>Tambah Barang</h2>

    <form method="post" action="<?= site_url('barang/simpan') ?>">
        <p>
            <label>Jenis Barang</label><br>
            <select name="id_jenis" required>
                <option value="">-- Pilih Jenis Barang --</option>
                <?php foreach ($jenis as $j): ?>
                    <option value="<?= $j->id ?>"><?= $j->jenis_barang ?></option>
                <?php endforeach; ?>
            </select>
        </p>

        <p>
            <label>Nama Barang</label><br>
            <input type="text" name="nama_barang" required>
        </p>

        <p>
            <label>Harga</label><br>
            <input type="number" name="harga" required>
        </p>

        <p>
            <label>Stok</label><br>
            <input type="number" name="stok" required>
        </p>

        <p>
            <button type="submit">Simpan</button>
            <a href="<?= site_url('barang') ?>">Kembali</a>
        </p>
    </form>
</body>
</html>
