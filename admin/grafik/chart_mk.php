<html>
<head>
	<title>Rating Dosen</title>
	<script type="text/javascript" src="../../asset/js/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
	<center>
		<h2>GRAFIK DOSEN</h2>
	</center>
 
 
	<?php 
	include '../../koneksi.php';
	?>
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
 
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Matakuliah</th>
				<th>Nilai</th>
			</tr>
		</thead>
		<tbody>
			<?php 
            $nama = $_GET['nama'];
			$rating_total = mysqli_query($koneksi, "select * from rating where matkul='$nama'");
			$int_total = (int)mysqli_num_rows($rating_total);
			$no = 1;
			$data = mysqli_query($koneksi,"select * from rating where matkul='$nama'");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['matkul']; ?></td>
					<td><?php echo $d['rate']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["nilai 1", "nilai 2", "nilai 3", "nilai 4", "nilai 5"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$satu = mysqli_query($koneksi,"select * from rating where rate='1' and matkul='$nama'");
					$jumlah_rate =  mysqli_num_rows($satu);
					$persen_satu = (int)$jumlah_rate / $int_total * 100;
					$tampil_satu = (string)$persen_satu;
					echo $tampil_satu;
					?>,
					<?php 
					$dua = mysqli_query($koneksi,"select * from rating where rate='2' and matkul='$nama'");
					$jumlah_rate =  mysqli_num_rows($dua);
					$persen_dua = (int)$jumlah_rate / $int_total * 100;
					$tampil_dua = (string)$persen_dua;
					echo $tampil_dua;
					?>, 
					<?php 
					$tiga = mysqli_query($koneksi,"select * from rating where rate='3' and matkul='$nama'");
					$jumlah_rate =  mysqli_num_rows($tiga);
					$persen_tiga = (int)$jumlah_rate / $int_total * 100;
					$tampil_tiga = (string)$persen_tiga;
					echo $tampil_tiga;
					?>, 
					<?php 
					$empat = mysqli_query($koneksi,"select * from rating where rate='4' and matkul='$nama'");
					$jumlah_rate =  mysqli_num_rows($empat);
					$persen_empat = (int)$jumlah_rate / $int_total * 100;
					$tampil_empat = (string)$persen_empat;
					echo $tampil_empat;
					?>,
					<?php 
					$lima = mysqli_query($koneksi,"select * from rating where rate='5' and matkul='$nama'");
					$jumlah_rate =  mysqli_num_rows($lima);
					$persen_lima = (int)$jumlah_rate / $int_total * 100;
					$tampil_lima = (string)$persen_lima;
					echo $tampil_lima;
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
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
</body>
</html>