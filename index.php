<!DOCTYPE html>
<html lang="en">

<style>
    .client_section {
        padding: 50px 0;
        background-color: #f7f7f7;
        color: #333;
    }

    .heading_container {
        text-align: center;
        margin-bottom: 40px;
    }

    .heading_container h2 {
        font-size: 32px;
        margin-bottom: 10px;
    }

    .testimonial-card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 20px;
    }

    .card {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-content {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 20px;
        padding: 20px;
    }

    .img-box {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-box img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
    }

    .text-content {
        text-align: left;
    }

    .text-content h6 {
        font-size: 18px;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .location {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }

    .testimonial-text {
        font-size: 14px;
        line-height: 1.6;
    }

    #loading {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .loader {
        border: 5px solid #f3f3f3;
        border-radius: 50%;
        border-top: 5px solid #3498db;
        width: 50px;
        height: 50px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @media (max-width: 768px) {
        .card-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .img-box {
            justify-content: center;
            margin-bottom: 15px;
        }
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="hold-transition login-page">
<div id="loading">
        <div class="loader"></div>
    </div>
    <div class="container-fluid flex flex-col justify-center items-center text-black p-5"
        style="height: 400px; background-color: lightblue;">
        <h1 class="font-weight-bold mb-3">Sistem Temu Janji Pasien - Dokter</h1>
        <h5>
            Bimbingan Karir 2023 Bidang Website - BILL'S POLIKLINIK
        </h5>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-lg-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-bed fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3 class="">Pasien</h3>
                        <p class="card-text">Apabila anda adalah seorang Pasien, Silahkan Login terlebih dahulu untuk
                            melakukan pendaftaran sebagai pasien</p>
                        <a href="loginUser.php" class="btn btn-primary btn-block">Login Sebagai Pasien</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user-md fa-fw mb-3 text-success" style="font-size: 34px;"></i>
                        <h3 class="">Dokter</h3>
                        <p class="card-text">Apabila anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk
                            memulai melayani pasien</p>
                        <div class="d-grid">
                            <a href="login.php" class="btn btn-success btn-block">Login Sebagai Dokter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login-box -->
        <section class="client_section layout_padding mt-5">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>Testimoni Pasien</h2>
                    <p>Para Pasien Yang Setia</p>
                </div>
                <!-- Customer 1 -->
                <div class="testimonial-card my-4">
                    <div class="card">
                        <div class="card-content">
                            <div class="img-box">
                                <img src="assets/images/testimoni.jpg" alt="Client 1">
                            </div>
                            <div class="text-content">
                                <h6>Nopal</h6>
                                <p class="location">Semarang</p>
                                <p class="testimonial-text">Pelayanan di web ini sangat cepat dan mudah, detail histori
                                    tercatat lengkap, termasuk catatan obat, harga pelayanan terjangkau, dokter ramah
                                    pokoke mantab pol!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Customer 2 -->
                <div class="testimonial-card my-4">
                    <div class="card">
                        <div class="card-content">
                            <div class="img-box">
                                <img src="assets/images/testimoni1.jpg" alt="Client 2">
                            </div>
                            <div class="text-content">
                                <h6>Nabil</h6>
                                <p class="location">Semarang</p>
                                <p class="testimonial-text">Aku tidak pernah merasakan mudahnya berobat sebelum mengenal
                                    web ini, web yang mudah digunakan dan dokter yang terampil membuat berobat menjadi
                                    lebih menyenangkan!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>

        <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Hilangkan loader setelah halaman selesai dimuat
            document.getElementById('loading').style.display = 'none';
        });

        // Tampilkan loader ketika halaman mulai unload (opsional)
        window.addEventListener("beforeunload", function() {
            document.getElementById('loading').style.display = 'flex';
        });
    </script>
</body>

</html>