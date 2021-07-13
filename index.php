<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class= "nav-link active" arria-current="page" href="index.php">Home </a>
                    </li>

                    <li class="nav-item">
                        <a class= "nav-link active" arria-current="page" href="login.html">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container data-karyawan mt-5">
    <h2 class="text-center mb-5"> Data Karyawan PT.Sawit Bahagia</h2>
    <h2 class="text-left mb-5"> Haii... Selamat Datang!</h2>

     <!-- Button trigger modal -->
     <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
        Tambah Data
    </button>
    <!-- Modal -->
    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <form method="post" action="store.php" name="form">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahDataLabel">Data Karyawan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="txt" class="form-control" id="nama" placeholder="Masukkan nama karyawan" name="nama" required>
                        </div>

                        <div class="mb-3">
                                <label for="no_ktp" class="form-label">NO KTP</label>
                                <input type="txt" class="form-control" id="no_ktp" placeholder="Masukkan no_ktp karyawan" name="no_ktp" required>
                        </div>

                        <div class="mb-3">
                                <label for="no_telpon" class="form-label">NO Telpon</label>
                                <input type="txt" class="form-control" id="no_telpon" placeholder="Masukkan no_telpon karyawan" name="no_telpon" required>
                        </div>

                        <div class="mb-3">
                                <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                                <input type="txt" class="form-control" id="tahun_masuk" placeholder="Masukkan tahun_masuk karyawan" name="tahun_masuk" required>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah_masa_kerja" class="form-label">Jumlah Masa Kerja</label>

                            <textarea type ="txt" class="form-control" id="jumlah_masa_kerja" placeholder="Masukkan jumlah_masa_kerja karyawan" name="jumlah_masa_kerja" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table class="table table-striped" id="tabelkaryawan">
      <thead>
        <tr>
        <th scope="col"> No.</th>
        <th scope="col"> Nama.</th>
        <th scope="col"> No KTP.</th>
        <th scope="col"> No Telpon.</th>
        <th scope="col"> Tahun Masuk.</th>
        <th scope="col"> Jumlah Masa Kerja.</th>
        <th scope="col"> Aksi</th>
        </tr>
      </thead>
    <tbody>
        <?php
        include 'config.php';

        $no = 1;

        $pt_sawit = mysqli_query($koneksi, "select * from karyawan");

        
        while($data = mysqli_fetch_array($pt_sawit)){
            ?>

            <tr>
            <td><?php echo $no++; ?></td>

            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['no_ktp']; ?></td>
            <td><?php echo $data['no_telpon']; ?></td>
            <td><?php echo $data['tahun_masuk']; ?></td>
            <td><?php echo $data['jumlah_masa_kerja']; ?></td>


            <td>
            <a style ="width: 80px; color: #FFF; background-color: #5F9EA0" href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm text-white">DETAIL</a>
            <a style ="width: 60px; color: #FFF; background-color: #556B2F" href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>

            <a style ="width: 60px; color: #FFF; background-color: #4682B4" href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Akan Menghapus Data karyawan Ini?')">HAPUS</a>
            </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
    </div>
    <script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
       $(document).ready(function() {
    $('#tabelkaryawan').DataTable();
} );
    </script>
</body>
</html>