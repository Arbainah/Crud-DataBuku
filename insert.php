<?php
include 'koneksi.php';

if (isset($_POST['judul_buku']) && isset($_POST['pengarang_buku']) && isset($_POST['penerbit_buku']) && isset($_POST['tahun_terbit']) && isset($_POST['categori_buku']) && isset($_POST['jumlah_hal']) && isset($_POST['jumlah_buku'])) {
    
    $judul_buku  = $_POST['judul_buku'];
    $pengarang_buku = $_POST['pengarang_buku'];
    $penerbit_buku = $_POST['penerbit_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $categori_buku = $_POST['categori_buku'];
    $jumlah_hal = $_POST['jumlah_hal'];
    $jumlah_buku = $_POST['jumlah_buku'];

    $query = "INSERT INTO buku (judul_buku, pengarang_buku, penerbit_buku, tahun_terbit, categori_buku, jumlah_hal, jumlah_buku) VALUES ('$judul_buku', '$pengarang_buku', '$penerbit_buku', '$tahun_terbit', '$categori_buku', $jumlah_hal, '$jumlah_buku')";
    mysqli_query($conn, $query);

    header("Location: read.php");
}
?>
