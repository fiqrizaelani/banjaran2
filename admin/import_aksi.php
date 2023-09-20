<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->
 
<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>
 
<?php
// upload file xls
$target = basename($_FILES['filesiswa']['name']) ;
move_uploaded_file($_FILES['filesiswa']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nama     = $data->val($i, 1);
	$nisn   = $data->val($i, 2);
	$alamat  = $data->val($i, 3);
    $jeniskelamin  = $data->val($i, 3);
    $ttl  = $data->val($i, 3);
    $jurusan  = $data->val($i, 3);
 
	if($nama != "" && $nisn != "" && $alamat != "" && $jeniskelamin !="" && $ttl !="" && $jurusan !=""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into data_pegawai values('','$nama','$nisn','$alamat','$jeniskelamin','$ttl','$jurusan')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);
 
// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>