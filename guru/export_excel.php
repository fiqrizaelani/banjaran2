<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP </title>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Pegawai.xls");
    ?>
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

 
</body>
</html>
