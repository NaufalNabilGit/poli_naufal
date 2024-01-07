<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #6999bb;
        }

        .register-container {
            /* Perubahan nama class */
            display: flex;
            max-width: 1200px;
            background-color: #fff;
            color: black;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            /* Menambahkan shadow box */
        }

        .left-container {
            flex: 1;
            overflow: hidden;
        }

        .left-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right-container {
            flex: 1;
            padding: 40px;
        }

        .register-form {
            /* Perubahan nama class */
            max-width: 400px;
            margin: 0 auto;
        }

        .register-form h4 {
            /* Perubahan nama class */
            text-align: center;
            margin-bottom: 15px;
        }

        .register-form label {
            /* Perubahan nama class */
            display: block;
            margin-bottom: 8px;
        }

        .register-form input {
            /* Perubahan nama class */
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
        }

        .register-form button {
            /* Perubahan nama class */
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        .register-link {
            /* Perubahan nama class */
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            /* Perubahan nama class */
            color: #3498db;
            text-decoration: none;
        }

        .register-link a:hover,
        .register-form button:hover {
            opacity: 0.9;
        }

        .text-center {

    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.25);
}

h4.text-center {
    color: #28527a;
    font-size: 24px;
    font-weight: 700; 
    margin-bottom: 15px; 
    padding-bottom: 5px; 
    border-bottom: 2px solid #28527a; 
}

.register-box-msg {
    color: #333333; 
    font-size: 16px;
    margin-bottom:
}

.text-primary {
    color: #3498db;
    font-weight: 600; 
}

    </style>
</head>

<body>
    <div class="register-container">
        <div class="left-container">
            <img src="assets/images/login-bg.png" alt="Register Image">
        </div>
        <div class="right-container">
            <div class="register-form">
                <h4 class="text-center">Register</h4>
                <p class="register-box-msg text-center">Daftarkan diri anda sebagai <span
                        class="text-primary">Pasien</span></p> 
                <form action="pages/register/checkRegister.php" method="post">
                    <!-- Pastikan 'for' dalam label sesuai dengan 'id' di input untuk aksesibilitas yang lebih baik -->
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>

                    <label for="no_ktp">Nomor KTP :</label>
                    <input type="number" class="form-control" id="no_ktp" name="no_ktp" required>

                    <label for="alamat">Alamat :</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>

                    <label for="password">Password :</label>
                    <input type="password" class="form-control" id="password" name="password" required>

                    <label for="no_hp">Nomor Handphone :</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" required>

                    <button type="submit" class="btn btn-block btn-primary">
                        Register
                    </button>
                </form>
                </form>
            </div>
            <div class="text-center mt-3">
                <p>- Sudah punya akun pasien? -</p>
                <a href="loginUser.php" class="" style="text-decoration : none">Login</a>
            </div>
        </div>
    </div>
</body>

</html>