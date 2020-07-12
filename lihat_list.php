<!DOCTYPE html>
<html>
<head>
	<title>Peserta</title>
	<style type="text/css">
	body{
		background-image: url(dota2.jpg);
	}
	.badan{
		color: white;
		text-align: center;
	}
	table{
		border-color:white; 
	}
	</style>
</head>
<body>
	<div class="badan">
		<h1 align="center">Peserta Kompetisi</h1>
		<table width="100%" style="border-collapse:collapse;" border="2">
			<tr>
				<th>Nama Lengkap</th>
				<th>Alamat</th>
				<th>E-Mail</th>
				<th>No. Hp</th>
				<th>Status</th>
				<th>Pendidikan</th>
				<th>Motivasi</th>
			</tr>
			<?php 
				$fp = fopen("daftar_peserta.txt", "r");
			?>
			<?php while ($isi = fgets($fp,1000)) 
			{
				$pisah = explode ("|", $isi);
				?>
				<tr>
					<th><?php echo"$pisah[0]"; ?></th>
					<th><?php echo"$pisah[1]"; ?></th>
					<th><?php echo"$pisah[2]"; ?></th>
					<th><?php echo"$pisah[3]"; ?></th>
					<th><?php echo"$pisah[4]"; ?></th>
					<th><?php echo"$pisah[5]"; ?></th>
					<th><?php echo"$pisah[6]"; ?></th>
				</tr>
			<?php } ?>
		</table>
		<br>
		<button class="tombol"><a align="center" href="form_pendaftar.html">Daftar</a></button>
	</div>
</body>
</html>