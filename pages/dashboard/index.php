<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f7;
            color: #203a43;
        }

        .header-section {
            background-color: #5b8c85;
            color: #fff;
            padding: 2% 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-title {
            font-size: 2.2rem;
            margin: 0;
            font-weight: 700;
            letter-spacing: 0.05rem;
        }

        .header-tagline {
            font-size: 1.2rem;
            margin-top: 0.5rem;
            font-weight: 400;
        }

        .quick-info-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            padding: 2rem;
            background-color: #ffffff;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            margin: 1rem 5%;
            border-radius: 10px;
        }

        .quick-info-card {
            background-color: #e7eff1;
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
        }

        .quick-info-card img {
            max-height: 90px;
            width: auto;
            margin-bottom: 1rem;
            border-radius: 50%;
        }

        .detailed-info-section {
            padding: 2rem 5%;
        }

        .detailed-info-header {
            font-size: 1.8rem;
            color: #3a506b;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .detailed-info-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .content-block {
            flex: 1;
            min-width: 300px;
            margin: 0.5rem 0;
        }

        .content-block img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .content-block p {
            font-size: 1rem;
            color: #305f72;
            font-weight: 500;
            margin-top: 0.5rem;
            text-align: center;
            line-height: 1.5;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            padding: 0 1rem;
        }


        @media (max-width: 768px) {
            .header-section {
                flex-direction: column;
                text-align: center;
            }

            .header-title {
                font-size: 1.75rem;
            }

            .header-tagline {
                font-size: 1rem;
            }

            .detailed-info-content {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <section class="header-section">
        <div>
            <h1 class="header-title">Selamat Datang di Bill's Poliklinik</h1>
            <p class="header-tagline">Bimbingan Karir 2023 Bidang Website</p>
        </div>
    </section>

    <!-- Quick Info Section -->
    <section class="quick-info-section">
        <div class="quick-info-card">
            <img src="assets/images/callcenter.jpg" alt="Quality Care">
            <h3>Pelayanan Terlengkap</h3>
        </div>
        <div class="quick-info-card">
            <img src="assets/images/doctor.jpg" alt="Expert Doctors">
            <h3>Dokter Terbaik</h3>
        </div>
        <div class="quick-info-card">
            <img src="assets/images/techno.jpg" alt="Advanced Technology">
            <h3>Teknologi Modern</h3>
        </div>
    </section>

    <!-- Detailed Info Section -->
    <section class="detailed-info-section">
        <h2 class="detailed-info-header">Pelayanan</h2>
        <div class="detailed-info-content">
            <div class="content-block">
                <img src="assets/images/interior.jpg" alt="Clinic Interior">
                <p>Interior yang selalu bersih dan nyaman bagi Pasien</p>
            </div>
            <div class="content-block">
                <img src="assets/images/team.jpg" alt="Medical Team">
                <p>Team Dokter dan Perawat yang ahli</p>
            </div>
            <div class="content-block">
                <img src="assets/images/tech.jpg" alt="Advanced Technology">
                <p>Teknologi lengkap dan modern untuk mendukung penyembuhan anda</p>
            </div>
        </div>
    </section>

</body>

</html>