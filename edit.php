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
            <a class="navbar-brand" href="#">Data Karyawan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collaps" data-bs-target="navbarNavAltMarkup" arria-current="page">
                    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
        <a  class= "nav-link active" arria-current="page" href="Index.php">Home</a>
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
                   <div class=" card-body fw-bold">
                        <form method="post" action="update.php">
                            <div class ="mb-3">
                                <input type="hidden" class="form-control" name='id' value="<?php echo $data['id']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="txt" class="form-control" id="nama" placeholder="Masukkan nama karyawan" name="nama" value="<?php echo $data['nama']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="no_ktp" class="form-label">No KTP</label>
                                <input type="txt" class="form-control" id="no_ktp" placeholder="Masukkan no_ktp karyawan" name="no_ktp" value="<?php echo $data['no_ktp']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="no_telpon" class="form-label">No Telpon</label>
                                <input type="txt" class="form-control" id="no_telpon" placeholder="Masukkan no_telpon karyawan" name="no_telpon" value="<?php echo $data['no_telpon']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                                <input type="txt" class="form-control" id="tahun_masuk" placeholder="Masukkan tahun_masuk karyawan" name="tahun_masuk" value="<?php echo $data['tahun_masuk']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_masa_kerja" class="form-label">Jumlah Masa Kerja</label>
                                <input type ="txt" class="form-control" id="jumlah_masa_kerja" placeholder="Masukkan jumlah_masa_kerja karyawan" name="jumlah_masa_kerja" value="<?php echo $data['jumlah_masa_kerja']; ?>"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
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