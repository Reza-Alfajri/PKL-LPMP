<?php
	require 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Tamu Wisma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Tamu Wisma</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th>Timestamp</th>
						      <th>Nama Kegiatan</th>
						      <th>Tanggal Awal</th>
						      <th>Tanggal Akhir</th>
							  <th>Status Check Out</th>
							  <th>Nama Tamu</th>
							  <th>NIP</th>
							  <th>Jenis Kelamin</th>
							  <th>Tanggal Lahir</th>
							  <th>Kabupaten / Kota</th>
							  <th>Jabatan</th>
							  <th>Nama Kantor</th>
							  <th>No. HP</th>
							  <th>Wisma</th>
							  <th>No. Kamar</th>
						    </tr>
						  </thead>
						  <tbody>
  
						<?php 
               				 	$sql="SELECT * FROM karyawan";
		          				$query = mysqli_query($db, $sql);
                				$total = mysqli_num_rows($query);

				                $no = 0;
                				?>
                		<?php while($list=mysqli_fetch_array($query)) : 
                		$no++; ?>
            
						    <tr class="alert" role="alert">
						      <td><?= $list['timestamp']; ?></td>
							  <td><?= $list['nama_kegiatan']; ?></td>
							  <td><?= $list['tanggal_awal']; ?></td>
							  <td><?= $list['tanggal_akhir']; ?></td>
							  <td><?= $list['statusco']; ?></td>
							  <td><?= $list['nama_tamu']; ?></td>
							  <td><?= $list['nip']; ?></td>
							  <td><?= $list['jenis_kelamin']; ?></td>
							  <td><?= $list['tanggal_lahir']; ?></td>
							  <td><?= $list['kota']; ?></td>
							  <td><?= $list['jabatan']; ?></td>
							  <td><?= $list['nama_kantor']; ?></td>
							  <td><?= $list['no_hp']; ?></td>
							  <td><?= $list['wisma']; ?></td>
							  <td><?= $list['nomor_kamar']; ?></td>
						     
						    </tr>
							<?php endwhile; ?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  	<script src="js/popper.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/main.js"></script>

	</body>
</html>