<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$ttl = $_POST['ttl'];
$jurusan = $_POST['jurusan'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('','$nama','$nisn','$alamat','$jeniskelamin','$ttl','$jurusan')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>

