<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>

<body>
 <!-- cek apakah sudah login -->
 <?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 <center>
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal">
			<input type="submit" value="FILTER">
		</form>
		<br>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br>
	<br>
	<a href="export_excel.php" target="_blank"><button type="button" class="btn btn-success">ExportExcel</button></a>
	<br>
	<?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
	}
	?>
	<br>
	<a href="import.php">IMPORT DATA</a>
	<br>
	<br>
	<table border="1">
	<a href="cetak.php" target="_blank"><button type="button" class="btn btn-success">Cetak</button></a>
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Nisn</th>
			<th>Alamat</th>
			<th>jenis kelamin</th>
            <th>tanggal lahir</th>
            <th>jurusan</th>
			<th>OPSI</th>
		</tr>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		if(isset($_GET['tanggal'])){
			$tgl = $_GET['tanggal'];
			$data = mysqli_query($koneksi,"select * from siswa where ttl='$tgl'");
		}else{
			$data = mysqli_query($koneksi,"select * from siswa");
		}
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nisn']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['jeniskelamin']; ?></td>
				<td><?php echo $d['ttl']; ?></td>
				<td><?php echo $d['jurusan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>

			</tr>
			<?php 
		}
		?>
	</table>
	<div style="width: 800px;margin: 0px auto;">
	<canvas id="myChart"></canvas>
</div>
<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["pplg", "tjkt", "hr"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pplg = mysqli_query($koneksi,"select * from siswa where jurusan='pplg'");
					echo mysqli_num_rows($jumlah_pplg);
					?>, 
					<?php 
					$jumlah_tjkt = mysqli_query($koneksi,"select * from siswa where jurusan='tjkt'");
					echo mysqli_num_rows($jumlah_tjkt);
					?>, 
					<?php 
					$jumlah_hr = mysqli_query($koneksi,"select * from siswa where jurusan='hr'");
					echo mysqli_num_rows($jumlah_hr);
					?>, 
					],
					backgroundColor: [
					'rgba(66, 155, 245)',
					'rgba(235, 26, 26)',
					'rgba(20, 245, 0)',
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

	<br/>
	<br/>
 
	<a href="logout.php">LOGOUT</a>
	</center>
</body>
</html>