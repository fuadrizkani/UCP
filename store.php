<?php

include './config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$no_ktp = $_POST['no_ktp'];
$no_telpon = $_POST['no_telpon'];
$tahun_masuk = $_POST['tahun_masuk'];
$jumlah_masa_kerja = $_POST['jumlah_masa_kerja'];

mysqli_query($koneksi, "insert into karyawan values( NULL, '$nama', '$no_ktp', '$no_telpon', '$tahun_masuk', '$jumlah_masa_kerja')");

header("location:./index.php");