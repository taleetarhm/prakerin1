<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<link rel ="stylesheet" type = "text/css" href="styleindex.css">
<body>

	<center><h2>Data Event</h2></center>
	<center><nav><a href="v_form.php"><button>Tambah Baru</button></a></nav></center>
	<br>
	<table border ="1" cellpadding="8" align="center" bgcolor="white">
		<thread>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Tanggal lahir</th>
				<th>Alamat</th>
				<th>Tindakan</th>
			</tr>
		</thread>
	
		<body>
			<?php
			$sql = "SELECT * FROM event";
			$query = mysqli_query($koneksi, $sql);
			while ($event = mysqli_fetch_array($query)){
	echo "<tr>";
	echo "<td>" . $event['id']."</td>";
	echo "<td>" .  $event['nama']."</td>";
	echo "<td>" . $event['email']."</td>";
	echo "<td>" . $event['tgl_lahir']."</td>";
	echo "<td>" . $event['alamat']."</td>";
	echo "<td>";
	echo "<a href ='proses_edit.php?id= ".$event['id']."'>Edit</a> 	|";
	echo "<a href ='hapus.php?id= ".$event['id']."'>Hapus</a>	| ";
}
?>
		</body>
		</table>
		<p>Total:
			<?php echo mysqli_num_rows($query) ?>
			<br>	
			<center><nav><a href= "/prakerin1/index.php"><button>Logout</button></a></nav></center>
</body>
</html>