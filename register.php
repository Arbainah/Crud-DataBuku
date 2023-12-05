<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Add Font Awesome for the icon -->
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
                <img src="img/3-.png" alt="Registrasi" class="img-fluid">
            </div>
            <div class="col-md-6">
                <!-- Bagian kanan untuk formulir registrasi -->                
                <div class="card mx-auto my-auto" style="max-width: 400px;">
                    <div class="card-body">
                        <h2 class="mb-4 text-center">Registrasi</h2>

                        <?php
                        include 'koneksi.php';

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $username = $_POST['username'];
                            $email = $_POST['email'];
                            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                            // Lakukan validasi data (misalnya, cek apakah email sudah digunakan)
                            // Insert data ke tabel "user"
                            $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
                            mysqli_query($conn, $query);

                            echo '<div class="alert alert-success" role="alert">Registrasi berhasil! Silakan <a href="login.php">login</a>.</div>';
                        }
                        ?>

                        <form action="" method="post">
                            <div class="form-group">
                                <!-- Added label for Username -->
                                <label for="username">Username:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Masukkan Username..." name="username" required>
                                </div>
                            </div>
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
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Masukkan Password..." name="password" id="password" required>
                                        <span class="input-group-text" onclick="togglePassword()">
                                            <i class="fas fa-eye" id="password-icon"></i>
                                        </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                            <p class="text-center mt-3">Sudah memiliki akun? <a href="login.php">Login.</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



