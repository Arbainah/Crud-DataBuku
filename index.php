
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            color: #000000;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            position: relative;
        }
        .container {
            padding-top: 50px;
        }
        h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .btn-primary {
            font-size: 18px;
            padding: 10px 20px;
            margin-right: 20px;
        }
        .btn-success {
            font-size: 18px;
            padding: 10px 20px;
        }
        .icon {
            font-size: 36px;
            margin-right: 10px;
        }
        .navbar {
            background-color: #007BFF;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff;
        }
        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff;
        }
        .footer {
            background-color: #007BFF;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Data Buku</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Registrasi</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-4 ">
                <i class="fas fa-book-open icon"></i>
                <h2>Data Buku</h2>
                <p>Selamat datang di halaman Data Buku. Silakan pilih tindakan yang ingin Anda lakukan:</p>
                <a class="btn btn-primary" href="login.php">Login</a>
                <a class="btn btn-success" href="register.php">Registrasi</a>
            </div>
            <div class="col-md-6 col-md-4">
                <img src="img/3-.png" alt="Gambar Buku" class="img-fluid">
            </div>
        </div>
    </div>

</body>
</html>
