<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas 9 - PDF</title>
	<style>

	</style>
</head>

<body style="background-color: #03fce8">
	<div>
		<div style="position: absolute; top:8%; width:100%">
			<span style="font-size: 32px">
				<center>Provinsi Jawa Barat</center>
			</span>
			<span style="font-size: 20px">
				<center>Kota Bandung</center>
			</span>
		</div>
		<div style="position: absolute; top: 35%; width:100%; margin-left:20">
			<span style="font-size: 16px">Nama : <?= $data['users'][0]->nama ?></span><br>
			<span style="font-size: 16px">Tempat/Tgl Lahir : <?= $data['users'][0]->tempat_lahir ?> / <?php $birthdate = $data['users'][0]->tanggal_lahir;
																										echo date("d F Y", strtotime($birthdate)); ?></span><br>
			<span style="font-size: 16px">Alamat : <?= $data['users'][0]->alamat ?></span>
		</div>
		<div style="position: absolute; top: 35%; width:100%; margin-left:70%">
			<span><img src="<?= $data['image']['image']	?>" alt="" width="100px" height="120px"></span>
		</div>
	</div>
</body>

</html>