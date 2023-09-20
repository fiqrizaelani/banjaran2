<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
 <center>
	<h2>CRUD TAMBAH PHP</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
        <tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NISN</td>
				<td><input type="number" name="nisn"></td>
			</tr>  
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
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
				<td><input type="date" name="ttl"></td>
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
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>	
			</center>	
		</table>
	</form>
</body>
</html>