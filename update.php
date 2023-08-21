<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <style>
        fieldset {
            width: 50%;
            margin: 0 auto;
            background-color: #f2f2f2; /* Warna latar belakang */
            padding: 20px; /* Ruang padding untuk memisahkan konten */
        }
        h2 {
            text-align: center;
        }
        p {
            margin-bottom: 10px;
        }
        label {
            display: inline-block;
            width: 150px;
            vertical-align: top;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            display: inline-block;
            margin-top: 10px;
            float: right;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
    include 'koneksi.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM buku WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['update'])) {
        
        $judul_buku  = $_POST['judul_buku'];
        $pengarang_buku = $_POST['pengarang_buku'];
        $penerbit_buku = $_POST['penerbit_buku'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $categori_buku = $_POST['categori_buku'];
        $jumlah_hal = $_POST['jumlah_hal'];
        $jumlah_buku = $_POST['jumlah_buku'];

       
        $query = "UPDATE buku SET judul_buku='$judul_buku', pengarang_buku='$pengarang_buku', penerbit_buku='$penerbit_buku', tahun_terbit='$tahun_terbit', categori_buku='$categori_buku', jumlah_hal='$jumlah_hal' , jumlah_buku='$jumlah_buku' WHERE id=$id";
        mysqli_query($conn, $query);

        header("Location: read.php");
    }
    ?>
    <fieldset>
    <h2>Edit Data Buku</h2>
    <form action="" method="post">
        <P>Judul Buku: <input type="text" name="judul_buku" value="<?php echo $row['judul_buku']; ?>"><br></P>
        <P>Pengarang: <input type="text" name="pengarang_buku" value="<?php echo $row['pengarang_buku']; ?>"><br></P>
        <P>Penerbit: <input type="text" name="penerbit_buku" value="<?php echo $row['penerbit_buku']; ?>"><br></P>
        <P>Tahun Terbit: <input type="text" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>"><br></P>
        <P>Kategori Buku: <input type="text" name="categori_buku" value="<?php echo $row['categori_buku']; ?>"><br></P>
        <P>Jumlah Hal: <input type="text" name="jumlah_hal" value="<?php echo $row['jumlah_hal']; ?>"><br></P>
        <P>Jumlah Buku: <input type="text" name="jumlah_buku" value="<?php echo $row['jumlah_buku']; ?>"><br></P>
        <input type="submit" name="update" value="Update">
    </form>
    </fieldset>
</body>
</html>
