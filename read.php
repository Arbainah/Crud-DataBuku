<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        th {
            text-align: center;
        }
    </style>
    
</head>
<body>
    
<div class="container mt-4">
    <h2 class="text-center mb-4 mt-5">DAFTAR DATA BUKU</h2>
    <!-- <nav> -->
    <div class="d-flex justify-content-between">
        <a class="btn btn-success" href="create.php">+ Tambah Baru</a>
        <a class="btn btn-danger" onclick="confirmLogout() ">Logout</a>
    </div>
    <script>
    function konfirmasiHapus() {
        return confirm("Apakah Anda yakin ingin menghapus data ini?");
    }
    function confirmLogout() {
        var confirmation = confirm("Apakah Anda yakin ingin keluar?");
        if (confirmation) {
            window.location.href = "logout.php"; // Arahkan ke halaman logout jika "OK" ditekan
        }
    }
    
    </script>
    <!-- <a class="btn btn-success mb-3" href="create.php">+ Tambah Baru</a>
    <a class="btn btn-danger mb-3" href="logout.php">Logout</a> -->
    <!-- <a href="create.php">[+] Tambah Baru</a> -->
    <!-- </nav> -->
    <br>

    <center><table border="1">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Kategori Buku</th>
            <th>Jumlah Hal</th>
            <th>Jumlah Buku</th>
            <th>Action</th>
        </tr>
        <?php
        require_once("auth.php");
        include 'koneksi.php';

        $query = "SELECT * FROM buku ORDER BY id";
        $result = mysqli_query($conn, $query);
        $no = 0;

        while ($row = mysqli_fetch_assoc($result)) {
            $no++;
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>" . $row['judul_buku']."</td>";
            echo "<td>" . $row['pengarang_buku']."</td>";
            echo "<td>" . $row['penerbit_buku']."</td>";
            echo "<td>" . $row['tahun_terbit']."</td>";
            echo "<td>" . $row['categori_buku']."</td>";
            echo "<td>" . $row['jumlah_hal']."</td>";
            echo "<td>" . $row['jumlah_buku']."</td>";

            echo "<td>";

            echo "<a class='btn btn-primary' href='update.php?id=" . $row['id'] . "'>Edit</a> ";
            echo "<a class='btn btn-danger' href='delete.php?id=" . $row['id'] . "'onclick='return konfirmasiHapus();'>Hapus</a>";
            // echo "<a href='update.php?id=".$row['id']."'>Edit</a> | ";
            // echo "<a href='delete.php?id=".$row['id']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table></center>
</div>
</body>
</html>
