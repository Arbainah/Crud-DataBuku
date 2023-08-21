<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM buku WHERE id = $id";
    mysqli_query($conn, $query);

    header("Location: read.php");
}
?>

