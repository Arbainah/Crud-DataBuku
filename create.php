<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah</title>
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
            display: block;
            margin: 10px auto;
            float: right;
            background-color: #4CAF50; /* Warna latar belakang */
            color: white; /* Warna teks */
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
            background-color: #45a049; /* Warna latar belakang saat di-hover */
        }
        input[type="submit"]:active {
            background-color: #357a38; /* Warna latar belakang saat diklik */
        }
        

    </style>
</head>
<body>
<fieldset>
    <h2>TAMBAH DAFTAR DATA BUKU</h2>
    <form action="insert.php" method="post">
        
        <p><label>Judul Buku:</label> <input type="text" name="judul_buku"></p>
        <p><label>Pengarang:</label> <input type="text" name="pengarang_buku"></p>
        <p><label>Penerbit:</label> <input type="text" name="penerbit_buku"></p>
        <p><label>Tahun Terbit:</label> <input type="text" name="tahun_terbit"></p>
        <p><label>Kategori Buku:</label> <input type="text" name="categori_buku"></p>
        <p><label>Jumlah Hal:</label> <input type="text" name="jumlah_hal"></p>
        <p><label>Jumlah Buku:</label> <input type="text" name="jumlah_buku"></p>
        
        <input type="submit" value="Simpan">
    </form>
</fieldset>
</body>
</html>



<!-- <!DOCTYPE html>
<html>
<head>
    <title>Tambah</title>
</head>
<body>
<fieldset>
    <h2>TAMBAH DAFTAR DATA BUKU</h2>
    <form action="insert.php" method="post">
        
        <p>Judul Buku   : <input type="text" name="judul_buku"><br></p>
        <p>Pengarang    : <input type="text" name="pengarang_buku"><br></p>
        <p>Penertbit    : <input type="text" name="penerbit_buku"><br></p>
        <p>Tahun Terbit : <input type="text" name="tahun_terbit"><br></p>
        <p>Kategori Buku: <input type="text" name="categori_buku"><br></p>
        <p>Jumlah Hal   : <input type="text" name="jumlah_hal"><br></p>
        <P>Jumlah Buku  : <input type="text" name="jumlah_buku"><br></P>
        
        <input type="submit" value="Simpan">
    </form>
</fieldset>
</body>
</html> -->
