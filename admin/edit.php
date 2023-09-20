<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 <center>
	<h2>CRUD DATA MAHASISWA </h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from siswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NISN</td>
					<td><input type="number" name="nisn" value="<?php echo $d['nisn']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<select name="jeniskelamin" id="jeniskelamin">
							<option value="lakilaki">Laki-Laki</option>
							<option value="perempuan">Perempuan</option>
						</select>
					</td>
				</tr>
			    <tr>
					<td>Tanggal lahir</td>
					<td><input type="date" name="ttl" value="<?php echo $d['jurusan']; ?>"></td>
	            </tr>
				<tr>
				<td>Jurusan</td>
				<td>
					<select name="jurusan" id="jurusan">
						<option value="pplg">PPLG</option>
						<option value="tjkt">TJKT</option>
						<option value="hr">HR</option>
					</select>
				</td>
			</tr>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
				</center>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>