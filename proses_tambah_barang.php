<?php
include "koneksi.php";
$a = $_POST['kode_brg'];
$b = $_POST['nama_brg'];
$c = $_POST['harga_brg'];
$d = $_POST['stok_brg'];

$sql = "INSERT INTO barang (kode_brg, nama_brg, harga_brg, stok_brg) VALUES ('$a', '$b', '$c', '$d')";
if ($conn->query($sql) === TRUE) {
    echo "Data barang berhasil ditambahkan";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>