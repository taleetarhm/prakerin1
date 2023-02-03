<?php
include ("config.php");
if (isset ($_GET['id'])) {
	$title = "edit";
	$url = 'proses_edit.php';
	$id = $_GET['id'];
	//buat query umtuk ambil data dari database
	$sql ="SELECT * FROM event WHERE id = $id";
	$query = mysqli_query ($koneksi, $sql);
	$event = mysqli_fetch_assoc ($query);
	//jika data yang diedit tidak ditemukan
	if (mysqli_num_rows ($query) <1) {
		die ("data tidak ditemukan...");}
	//url jika edit data
	}else {
		$title ="Add";
		//url jika tambah data
		$url ='proses_pendaftaran.php';
	}
?>

<html>
<head><title>Formulir Pendaftaran</title></head>
<link rel ="stylesheet" type = "text/css" href = "stylev_from.css">
<body>
	<header><h3>Formulir Pendaftaran</h3></header>
	<form action ="proses_pendaftaran.php" method ="POST">
		<fieldset>
			<legend><h2>Form Peserta</h2></legend>
			<div>
				<label for ='id'>ID :</label><br>
				<input type ="text" name ="id" value = "<?php if (isset ($_GET['id']))
				{echo $event ['id'];}?>"/>
			</div>
			<div>
				<label for ='nama'>Nama :</label><br>
				<input type ="text" name ="nama" value = "<?php if (isset ($_GET['id']))
				{echo $event ['nama'];}?>"/>
			</div>
			<div>
				<label for ='email'>Email :</label><br>
				<input type ="text" name ="email" value = "<?php if (isset ($_GET['id']))
				{echo $event ['email'];}?>"/>
			</div>
			<div>
				<label for ='tgl_lahir'>Tanggal Lahir :</label><br>
				<input type ="date" name ="tgl_lahir" value = "<?php if (isset ($_GET['id']))
				{echo $event ['tgl_lahir'];}?>"/>
			</div>
			<div>
				<label for = 'alamat'> Alamat :</label><br>
				<textarea name = "alamat" row = "5"> <?php if (isset ($_GET['id']))
				{echo $event ['alamat'];}?> </textarea>
			</div>
		
				<hr>
				<div>
					<input type = "submit" value= "Simpan" name= "simpan"/>
				</div>
			</fieldset>
		</form>
</body>
</html>