<!DOCTYPE html>
<html>
<head>
	<title>Import Excel Ke MySQL dengan PHP - www.malasngoding.com</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
 
	p{
		color: green;
	}
</style>
<h2>IMPORT EXCEL KE MYSQL DENGAN PHP</h2>
 
 
 
<a href="admin/index.php">Kembali</a>
<br/><br/>
<?php 
include 'koneksi.php';
?>
 
<form method="post" enctype="multipart/form-data" action="import_aksi.php">
	Pilih File: 
	<input name="filesiswa" type="file" required="required"> 
	<input name="upload" type="submit" value="Import">
</form>
 
</body>
</html>