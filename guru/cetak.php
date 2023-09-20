<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP </title>
</head>
<body>
 
	<center>
 
		<h2>Data siswa</h2>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Nama</th>
			<th>Nisn</th>
			<th width="5%">Alamat</th>
			<th>jenis kelamin</th>
			<th>tanggal lahir</th>
			<th>jurusan</th>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from siswa");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['nisn']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['jeniskelamin']; ?></td>
            <td><?php echo $data['ttl']; ?></td>
            <td><?php echo $data['jurusan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>













