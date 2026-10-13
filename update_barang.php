
<?php 
include 'koneksi.php';
 
$id = $_POST['id'];
$kode_brg = $_POST['kode_brg'];
$nama_brg = $_POST['nama_brg'];
$harga_brg = $_POST['harga_brg'];
$stok_brg = $_POST['stok_brg'];
 
$sql = "UPDATE barang SET kode_brg='$kode_brg', nama_brg='$nama_brg', harga_brg='$harga_brg', stok_brg='$stok_brg' WHERE id=$id";
 
if ($conn->query($sql) === TRUE) {
    echo "Data barang berhasil diupdate";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>