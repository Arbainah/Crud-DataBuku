<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Add Font Awesome for the password icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <script>
    function togglePassword() {
        var passwordField = document.getElementById('password');
        var passwordIcon = document.getElementById('password-icon');

        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = "password";
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        }
    }
</script>

</head>
<body class="bg-light">
    <div class="container mt-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- Bagian kiri untuk gambar -->
                <img src="img/2-.png" alt="login" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <!-- Bagian kanan untuk formulir login -->                
                <div class="card mx-auto my-auto" style="max-width: 400px; ">
                    <div class="card-body ">
                        <i class="fas fa-book-open icon fa-2x"></i>
                        <i class="text-center fas fa-user-circle fa-6x d-block mx-auto mb-4"></i>
                        <h2 class="text-center">LOGIN</h2>
                        
                        <?php
                        session_start();
                        include 'koneksi.php';

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $username = isset($_POST['username']) ? $_POST['username'] : '';
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            // Ambil data pengguna dari tabel "user" berdasarkan email
                            $query = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
                            $result = mysqli_query($conn, $query);
                            $user = mysqli_fetch_assoc($result);

                            if ($user && password_verify($password, $user['password'])) {
                                // Login sukses, set session atau token, lalu arahkan ke halaman utama
                                session_start();
                                $_SESSION['user'] = $user['id'];
                                header("Location: read.php"); // Ganti dengan halaman utama setelah login
                            } else {
                                // Login gagal, tampilkan pesan kesalahan
                                echo '<div class="alert alert-danger" role="alert">Login gagal! Periksa email dan password Anda.</div>';
                            }
                        }
                        ?>

                        <form action="" method="post">
                            <div class="form-group">
                                <!-- Added label for Email -->
                                <label for="email">Email:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Masukkan Email..." name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Added label for Password -->
                                <label for="password">Password:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <!-- Using Font Awesome icon for Password -->
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Masukkan Password..." name="password" id="password" required>
                                        <span class="input-group-text" onclick="togglePassword()">
                                            <i class="fas fa-eye" id="password-icon"></i>
                                        </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            <p class="text-center">Belum punya akun? <a href="register.php">Buat akun sekarang</a>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>




<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="col-md-5">
        <div class="card">
        <div class="card-body">
        <h2 class="text-center">Login</h2>

        <?php
        session_start();
        include 'koneksi.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Ambil data pengguna dari tabel "user" berdasarkan email
            $query = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
            $result = mysqli_query($conn, $query);
            $user = mysqli_fetch_assoc($result);

            if ($user && password_verify($password, $user['password'])) {
                // Login sukses, set session atau token, lalu arahkan ke halaman utama
                session_start();
                $_SESSION['user'] = $user['id'];
                header("Location: read.php"); // Ganti dengan halaman utama setelah login
            } else {
                // Login gagal, tampilkan pesan kesalahan
                echo '<div class="alert alert-danger" role="alert">Login gagal! Periksa email dan password Anda.</div>';
            }
        }
        ?>    
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" >Login</button>

        </form>
        </div>
        </div>    
        </div>
    </div>
</body>
</html> -->
