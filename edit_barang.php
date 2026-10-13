<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM barang WHERE id = $id";
    $hasil = $conn->query($sql);
    $row = $hasil->fetch_assoc();

    if ($row) {
        $kode_brg = $row['kode_brg'];
        $nama_brg = $row['nama_brg'];
        $harga_brg = $row['harga_brg'];
        $stok_brg = $row['stok_brg'];
    } else {
        echo "Data barang tidak ditemukan";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>
</head>
<body>
    <h1>Update Barang</h1>
    <form action="update_barang.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="kode_brg">Kode Barang:</label>
        <input type="text" id="kode_brg" name="kode_brg" value="<?php echo $kode_brg; ?>"><br><br>
        <label for="nama_brg">Nama Barang:</label>
        <input type="text" id="nama_brg" name="nama_brg" value="<?php echo $nama_brg; ?>"><br><br>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga_brg" value="<?php echo $harga_brg; ?>"><br><br>
        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok_brg" value="<?php echo $stok_brg; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>