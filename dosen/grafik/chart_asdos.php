<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
    <title>WEB RATING (Admin)</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../../asset/css/sidebar.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet" crossorigin="anonymous">
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
		<h2>GRAFIK ASISTEN DOSEN</h2>
	</center>
 
 
	<?php 
	include '../../koneksi.php';
	?>
 
	<div style="width: 600px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<hr/>
	
	<div class="table table-bordered">
	<table class=" border-dark">
		<thead>
			<tr>
				<th>No</th>
				<th>Asisten</th>
				<th>Nilai</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<?php 
            $nama = $_GET['nama'];
			$rating_total = mysqli_query($koneksi, "select * from rating where asdos='$nama'");
			$int_total = (int)mysqli_num_rows($rating_total);
			
			$query = mysqli_query($koneksi,"SELECT asdos from rating where asdos='$nama'");
			$query_1 = mysqli_query($koneksi,"SELECT count(*) as total from rating where asdos='$nama' and rate_asdos='1'");
			$query_2 = mysqli_query($koneksi,"SELECT count(*) as total from rating where asdos='$nama' and rate_asdos='2'");
			$query_3 = mysqli_query($koneksi,"SELECT count(*) as total from rating where asdos='$nama' and rate_asdos='3'");
			$query_4 = mysqli_query($koneksi,"SELECT count(*) as total from rating where asdos='$nama' and rate_asdos='4'");
			$query_5 = mysqli_query($koneksi,"SELECT count(*) as total from rating where asdos='$nama' and rate_asdos='5'");

			$data = mysqli_fetch_assoc($query);
			$data_1 = mysqli_fetch_assoc($query_1);
			$data_2 = mysqli_fetch_assoc($query_2);
			$data_3 = mysqli_fetch_assoc($query_3);
			$data_4 = mysqli_fetch_assoc($query_4);
			$data_5 = mysqli_fetch_assoc($query_5);
			?>

			<tr>
				<td>1</td>
				<td><?php echo $data['asdos'];?></td>
				<td>1</td>
				<td><?php echo $data_1['total']; ?></td>
			</tr>
			<tr>
				<td>2</td>
				<td><?php echo $data['asdos'];?></td>
				<td>2</td>
				<td><?php echo $data_2['total']; ?></td>
			</tr>
			<tr>
				<td>3</td>
				<td><?php echo $data['asdos'];?></td>
				<td>3</td>
				<td><?php echo $data_3['total']; ?></td>
			</tr>
			<tr>
				<td>4</td>
				<td><?php echo $data['asdos'];?></td>
				<td>4</td>
				<td><?php echo $data_4['total']; ?></td>
			</tr>
			<tr>
				<td>5</td>
				<td><?php echo $data['asdos'];?></td>
				<td>5</td>
				<td><?php echo $data_5['total']; ?></td>
			</tr>


		</tbody>
		
	</table>
	</div>
 
	

 
 
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
					$satu = mysqli_query($koneksi,"select * from rating where rate_asdos='1' and asdos='$nama'");
					$jumlah_rate =  mysqli_num_rows($satu);
					$persen_satu = (int)$jumlah_rate / $int_total * 100;
					$tampil_satu = (string)$persen_satu;
					echo $tampil_satu;
					?>,
					<?php 
					$dua = mysqli_query($koneksi,"select * from rating where rate_asdos='2' and asdos='$nama'");
					$jumlah_rate =  mysqli_num_rows($dua);
					$persen_dua = (int)$jumlah_rate / $int_total * 100;
					$tampil_dua = (string)$persen_dua;
					echo $tampil_dua;
					?>, 
					<?php 
					$tiga = mysqli_query($koneksi,"select * from rating where rate_asdos='3' and asdos='$nama'");
					$jumlah_rate =  mysqli_num_rows($tiga);
					$persen_tiga = (int)$jumlah_rate / $int_total * 100;
					$tampil_tiga = (string)$persen_tiga;
					echo $tampil_tiga;
					?>, 
					<?php 
					$empat = mysqli_query($koneksi,"select * from rating where rate_asdos='4' and asdos='$nama'");
					$jumlah_rate =  mysqli_num_rows($empat);
					$persen_empat = (int)$jumlah_rate / $int_total * 100;
					$tampil_empat = (string)$persen_empat;
					echo $tampil_empat;
					?>,
					<?php 
					$lima = mysqli_query($koneksi,"select * from rating where rate_asdos='5' and asdos='$nama'");
					$jumlah_rate =  mysqli_num_rows($lima);
					$persen_lima = (int)$jumlah_rate / $int_total * 100;
					$tampil_lima = (string)$persen_lima;
					echo $tampil_lima;
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(55, 210, 69, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(55, 210, 69, 1)',
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