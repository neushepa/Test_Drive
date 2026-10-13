<?php
    include "koneksi.php";
    $sql = "SELECT * FROM barang";
    $hasil = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <center><h1>Data Barang</h1></center>
    <table border="1" align="center">
    <a href="tambah_barang.php"><button>Tambah Data</button></a>    
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
            $no = 1;
            while ($row = $hasil->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row["kode_brg"] . "</td>";
                echo "<td>" . $row["nama_brg"] . "</td>";
                echo "<td>" . $row["harga_brg"] . "</td>";
                echo "<td>" . $row["stok_brg"] . "</td>";
                echo "<td><a href='edit_barang.php?id=" . $row["id"] . "'>Edit</a> | <a href='hapus_barang.php?id=" . $row["id"] . "'>Hapus</a></td>";
                echo "</tr>";
                $no++;
            }
        ?>
</body>
</html>

