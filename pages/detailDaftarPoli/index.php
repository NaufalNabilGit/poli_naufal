<?php
    require 'config/koneksi.php';
    $id = $_GET['id'];
    $ambilDetail = mysqli_query($mysqli, "SELECT 
        dp.id as idDetailPeriksa,
        daftar_poli.id as idDaftarPoli,
        poli.nama_poli,
        dokter.nama,
        jadwal_periksa.hari,
        DATE_FORMAT(jadwal_periksa.jam_mulai, '%H:%i') as jamMulai,
        DATE_FORMAT(jadwal_periksa.jam_selesai, '%H:%i') as jamSelesai,
        daftar_poli.no_antrian,
        p.id as idPeriksa,
        p.tgl_periksa,
        p.catatan,
        p.biaya_periksa,
        GROUP_CONCAT(o.id) as idObat,
        GROUP_CONCAT(o.nama_obat) as namaObat
        FROM daftar_poli
        INNER JOIN jadwal_periksa ON daftar_poli.id_jadwal = jadwal_periksa.id
        INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id
        INNER JOIN poli ON dokter.id_poli = poli.id
        LEFT JOIN periksa p ON daftar_poli.id = p.id_daftar_poli
        LEFT JOIN detail_periksa dp ON p.id = dp.id_periksa
        LEFT JOIN obat o ON dp.id_obat = o.id
        WHERE daftar_poli.id = '$id'
        GROUP BY p.id");

    $data = mysqli_fetch_assoc($ambilDetail);
?>

<style>
    /* Mengatur warna latar belakang dan teks untuk kartu */
    .card {
        background-color: #f8f9fa;
        color: #333;
    }

    /* Mengatur header kartu */
    .card-header {
        background-color: #89d1f3;
        color: black;
        font-size: 18px;
        padding: 10px 15px;
    }

    /* Mengatur body kartu */
    .card-body {
        padding: 20px;
    }

    /* Mengatur judul utama */
    h2.lead {
        font-size: 22px;
        font-weight: bold;
    }

    /* Mengatur subjudul */
    h6.text-muted {
        font-size: 16px;
    }

    .rounded-lg {
        border-radius: 10px;
        font-size: 24px;
        font-weight: bold;
    }

    .card-footer {
        background-color: #89d1f3;
        border-top: 1px solid #dee2e6;
        padding: 10px 15px;
    }

    .btn-secondary {
        color: black;
        background-color: lightblue;
        border-color: #6c757d;
    }

    .text-muted.text-lg {
        font-size: 18px;
        color: #6c757d;
        margin-bottom: 10px;
        font-weight: 500;
        line-height: 1.5;
    }

    .fa-ul {
        list-style-type: none;
        /* Remove the default list style */
        padding-left: 0;
        /* Align the list with the text above */
    }

    .fa-li {
        position: relative;
        /* Position relative to allow absolute positioning of the icon */
        padding-left: 2em;
        /* Make room for the icon */
    }

    .fa-li i {
        position: absolute;
        /* Position the icon absolutely within the li */
        left: 0;
        /* Align the icon to the left */
        top: 50%;
        /* Center the icon vertically */
        transform: translateY(-50%);
        /* Offset the icon by half its height for perfect vertical centering */
        color: #007bff;
        /* Use a different color for the icon */
        font-size: 1.2em;
        /* Increase the size of the icon */
    }

    .large {
        font-weight: bold;
        /* Make the list item bold */
        color: #495057;
        /* Darker color for contrast */
        margin-bottom: 10px;
        /* Add bottom margin for spacing */
    }

    /* Optional: Add a custom separator style */
    .custom-separator {
        border-bottom: 2px solid #dee2e6;
        /* Solid line for separation */
        margin-top: 10px;
        /* Space above the separator */
        margin-bottom: 10px;
    }

    /* Responsifitas untuk layar kecil */
    @media (max-width: 768px) {

        .col-7,
        .col-5 {
            flex: 100%;
            max-width: 100%;
        }
    }
</style>

<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row">
            <div class="col-12 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header border-bottom-0" style="color: black;">
                        Detail Periksa
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7 mt-4">
                                <h2 class="lead"> Nama Dokter : <b><?php echo $data['nama'] ?></b></h2>
                                <h6 class="text-lg">Nama Poli : <b><?php echo $data['nama_poli'] ?></b></h6>
                                <h6 class="text-muted text-lg">Jadwal :</h6>
                                <h6 class="text-muted text-lg"><?php echo $data['hari']; ?></h6>
                                <div class="custom-separator"></div> <!-- Optional custom separator -->
                                <ul class="fa-ul text-muted">
                                    <li class="large">
                                        <span class="fa-li"><i class="fas fa-lg fa-clock"></i></span>
                                        <?php echo $data['jamMulai']; ?> - <?php echo $data['jamSelesai']; ?>
                                    </li>
                                </ul>

                                <br><br>
                                <p class="text-muted text-lg"> Obat yang harus dikonsumsi : <br>
                                    <?php 
                                    $namaObatArray = explode(',', $data['namaObat']);
                                    foreach ($namaObatArray as $index => $namaObat) {
                                        echo ($index + 1) . ". " . $namaObat . "<br>";
                                    }
                                    ?>
                                </p>
                                <h5 class="text-muted text-lg"><strong>Biaya Periksa :
                                        <?php echo $data['biaya_periksa'] ?></strong></h5>
                            </div>
                            <div class="col-5 flex justify-center items-center flex-col">
                                <h2 class="lead"><b>No Antrian</b></h2>
                                <div class="rounded-lg flex justify-center items-center"
                                    style="height: 60px; width: 60px; background-color: #192259; color: white; padding-top: 6px;">
                                    <h1><?php echo $data['no_antrian'] ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-left">
                            <a href="daftarPoliklinik.php" class="btn btn-md btn-secondary">
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer -->
</div>