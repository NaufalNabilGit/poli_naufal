<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #28455a;
            opacity: 10;
        }

        .login-container {
            display: flex;
            max-width: 1200px;
            /* Ubah max-width sesuai kebutuhan */
            background-color: #fff;
            color: black;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
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
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .login-form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.05);
        }

        .login-form h4 {
            margin-bottom: 20px;
            color: #333;
            font-weight: 600;
        }

        .text-primary {
            color: #007bff;
        }

        .login-box-msg {
            margin-bottom: 30px;
            color: #666;
            line-height: 1.5;
        }

        .form-control {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px 15px;
            margin-bottom: 20px;
        }

        .btn-success {
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 0.5px;
            padding: 10px 0;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
            background-color: lightblue;
            border: none;
            color: black;
            transition: background-color 0.3s;
        }

        .btn-success:hover {
            background-color: #46799d;
        }


        .text-center {
            margin-top: 20px;
        }

        .text-center a {
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .text-center a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="left-container">
            <img src="assets/images/login-bg.png" alt="Login Image">
        </div>
        <div class="right-container">
            <div class="login-form">
                <h4 class="text-center">Login </h4>
                <p class="login-box-msg text-center">Silahkan login sebagai <b class="text-success">Dokter</b> untuk melanjutkan</p>
                <br><br>
                <form action="pages/login/checkLogin.php" method="post">
                    <label for="nama">Username :</label>
                    <input type="text" class="form-control" name="username" required>

                    <label for="no_hp">Password :</label>
                    <input type="password" class="form-control" name="password" required>

                    <button type="submit" class="btn btn-block btn-success">
                        Login
                    </button>
                </form>

            </div>
            <div class="text-center mt-3">Login Sebagai <a href="loginUser.php"><span
                        class="text-primary">Pasien</span></a>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
</script>
</body>

</html>