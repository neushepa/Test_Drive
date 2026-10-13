<?php
include "koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (nama, username, password) VALUES ('$nama', '$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Data user berhasil ditambahkan";
    header("Location: data_user--.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>