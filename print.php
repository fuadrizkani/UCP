<?php
    include 'config.php';
    $id = $_GET['id'];
    $pt_sawit = mysqli_query($koneksi, "select * from karyawan where id='$id'");
    while($data = mysqli_fetch_assoc($pt_sawit)){
    ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
            <title> <?php echo $data['nama']?> </title>
        </head>

        <body onload="window.print();"> 
        <body style="background-color: #b0aeb3"></body>
            <div class="container mt-5">
                <p class="fw-bold">Profil Karyawan</p>
                <p>Nama : <?php echo $data['nama'] ?></p>
                <p>No KTP : <?php echo $data['no_ktp'] ?></p>
                <p>No Telpon : <?php echo $data['no_telpon'] ?></p>
                <p>Tahun Masuk : <?php echo $data['tahun_masuk'] ?></p>
                <p>Jumlah Masa Kerja : <?php echo $data['jumlah_masa_kerja'] ?></p>
            </div>
        <?php
    }
        ?>
        </div>
        <script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        </body>

        </html>