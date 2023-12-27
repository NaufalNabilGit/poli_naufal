<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #baeeba;
        }

        .register-container {
            display: flex;
            max-width: 1200px;
            background-color: #fff;
            color: #186218;
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
            flex: 1;
            padding: 40px;
        }

        .register-form {
            max-width: 400px;
            margin: 0 auto;
        }

        .register-form h2 {
            text-align: center;
        }

        .register-form label {
            display: block;
            margin-bottom: 8px;
        }

        .register-form input, .register-form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
        }

        .register-form button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .login-link a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="left-container">
            <img src="assets/images/hospital.png" alt="Login Image">
        </div>
        <div class="right-container">
            <div class="register-form">
                <h2>Registrasi</h2>
                <form id="registerForm">
                    <label for="username">Username :</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <label for="role">Role:</label>
                    <select id="role" name="role" required>
                        <option value="dokter">Dokter</option>
                        <option value="pasien">Pasien</option>
                    </select>

                    <button type="button" class="btn btn-primary btn-block" onclick="registerUser()">Registrasi</button>
                </form>

                <div class="login-link">
                    <p>Sudah memiliki akun? <a href="login.php">Login disini</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function registerUser() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var role = document.getElementById('role').value;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_register.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses!',
                            text: response.message,
                            timer: 3000,
                            showConfirmButton: false
                        }).then(function() {
                            window.location.href = 'login.php';
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
  
