<?php
    require 'config/koneksi.php';
    $id_poli = $_SESSION['id_poli'];

    $query_poli = "SELECT nama_poli FROM poli WHERE id = $id_poli";
    $result = mysqli_query($mysqli,$query_poli);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $nama_poli = $row['nama_poli'];
    } else {
        $nama_poli = "Tidak dapat mendapatkan nama poli";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e6eeff;
            margin: 0;
            padding: 0;
        }

        .dashboard-header {
            background-color: #2d4d65;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .dashboard-header h1 {
            margin: 0;
            font-size: 2.2rem;
            font-weight: bold;
        }

        .dashboard-header h4 {
            font-size: 1.2rem;
            font-weight: normal;
            margin-top: 5px;
        }

        .info-card {
            background-color: #f0f4ff;
            border-left: 5px solid #3f51b5;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .info-card h5 {
            font-size: 1.1rem;
            margin-bottom: 15px;
            color: #5c6bc0;
            font-weight: bold;
        }

        .info-card .fa {
            font-size: 2rem;
            margin-right: 10px;
            vertical-align: middle;
            color: #75a1c0;
        }

        .info-card p {
            margin: 0;
            font-size: 1rem;
            color: #333;
        }

        .info-card .info-card-body {
            display: flex;
            align-items: center;
        }

        .custom-card {
            background-color: #f4f8fa; /* Lighter shade for contrast */
            border-left: 5px solid #b3e5fc; /* A contrasting yet complementary border color */
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .custom-card h5 {
            font-size: 1.2rem;
            color: #0277bd; /* A color that stands out yet ties into the theme */
            font-weight: bold;
        }

        .custom-card p {
            font-size: 1rem;
            color: #333;
        }

        /* New layout for custom cards */
        .custom-layout {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1rem;
        }

        @media (max-width: 768px) {
            .info-card .info-card-body {
                flex-direction: column;
                align-items: flex-start;
            }

            .info-card .fa {
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard-header">
        <h1>Selamat Datang, Dokter <?php echo $username ?></h1>
        <h4>Saat ini anda berada di,  <?php echo $nama_poli; ?></h4>
    </div>

    <section class="content mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-card-body">
                            <i class="fa fa-users text-primary"></i>
                            <div>
                                <h5>Jumlah Pasien Sekarang :</h5>
                                <p>150</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-card-body">
                            <i class="fa fa-calendar text-success"></i>
                            <div>
                                <h5>Status Bekerja</h5>
                                <p>Active</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-card-body">
                            <i class="fa fa-check-square text-info"></i>
                            <div>
                                <h5>Pasien Telah Diperiksa</h5>
                                <p>50</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-card-body">
                            <i class="fa fa-hospital text-warning"></i>
                            <div>
                                <h5>Pasien Hari ini</h5>
                                <p>20</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5>Jadwal Harian</h5>
                            <p>Cek Antrian</p>
                            <p>Cek Pasien</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5><span style="color : red;">Keadaan Darurat</span></h5>
                            <p>Pasien Lorem</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5>Statistik Mingguan</h5>
                            <p>Pasien Minggu Lalu: 75 Pasien</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5>Pesan dan Konsul</h5>
                            <p>Kamu memiliki 5 pesan baru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap and other scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
