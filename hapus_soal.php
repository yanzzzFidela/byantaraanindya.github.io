<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM soal WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Soal berhasil dihapus. <a href='index.php'>Kembali ke daftar soal</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>