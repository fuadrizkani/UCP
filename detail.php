<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Data Karyawan</title>
  </head>
  <body>
  <body style="background-color: #b0aeb3"></body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Data Karyawan
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collaps" data-bs-target="navbarNavAltMarkup" arria-controls="page">
                    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
        <a  class= "nav-link active" arria-current="page" href="create.php">Tambah Karyawan</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        </div>
    </div>
    </div>
    </nav>

    <?php
        include 'config.php';

        $id = $_GET['id'];

        $pt_sawit = mysqli_query($koneksi, "select*from karyawan where id='$id'");
        while($data = mysqli_fetch_assoc($pt_sawit)){
            ?>
            <div class = "container mt-5">
                <p><a href="index.php">Home</a> / Detail Karyawan / <?php echo $data['nama'] ?><p>
                <div class = "card">
                    <div class ="card-header">
                        <p class="fw-blod">Profil Karyawan</p>
                    </div>
                    <div class="card-body fw-bold">
                        <p>Nama : <?php echo $data['nama'] ?></p>
                        <p>No KTP : <?php echo $data['no_ktp'] ?></p>
                        <p>No Telpon : <?php echo $data['no_telpon'] ?></p>
                        <p>Tahun Masuk : <?php echo $data['tahun_masuk'] ?></p>
                        <p>Jumlah Masa Kerja : <?php echo $data['jumlah_masa_kerja'] ?></p>
                        <a href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm text-white">Cetak</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
        <script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>