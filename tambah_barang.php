<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form action="proses_tambah_barang.php" method="post">
        <label for="kode_brg">Kode Barang:</label>
        <input type="text" id="kode_brg" name="kode_brg" required><br><br>
        <label for="nama_brg">Nama Barang:</label>
        <input type="text" id="nama_brg" name="nama_brg" required><br><br>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga_brg" required><br><br>
        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok_brg" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>