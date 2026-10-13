<?php
    include "connection.php";
    $sql = "SELECT * FROM barang";
    $result = $conn->query($sql);
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
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $row["kode_brg"] . "</td>";
                    echo "<td>" . $row["nama_brg"] . "</td>";
                    echo "<td>" . $row["harga_brg"] . "</td>";
                    echo "<td>" . $row["stok_brg"] . "</td>";
                    echo "</tr>";
                    $no++;
                }
            }
            ?>
</body>
</html>