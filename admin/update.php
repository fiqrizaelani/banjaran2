<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$ttl = $_POST['ttl'];
$jurusan = $_POST['jurusan'];
 
// update data ke database
mysqli_query($koneksi,"update siswa set nama='$nama', nisn='$nisn', alamat='$alamat', jeniskelamin='$jeniskelamin', ttl='$ttl', jurusan='$jurusan' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>