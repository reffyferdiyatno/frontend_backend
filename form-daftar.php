<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="box-form">
		<marquee><h3>Formulir Pendaftaran JAPER</h3></marquee><hr><br>
		<?php 
		if(isset($_GET['err1'])){
			echo '<div class="alert-error">Maaf, input nomor telepon harus angka</div>';
		}
		?>
		<form action="proses-daftar.php" method="post">
			Nama Lengkap :<br>
			<input type="text" name="nama" required/><br><br>
			Tempat Lahir :<br>
			<input type="text" name="tmp_lhr" required/><br><br>
			Tanggal Lahir :<br>
			<input type="date" name="tgl_lhr" required/><br><br>
			Jenis Kelamin :<br>
			<select name="jk">
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select><br><br>
			No. Telepon :<br>
			<input type="text" name="telp" required/><br><br>
			Email :<br>
			<input type="email" name="email" required/><br><br>
			Password :<br>
			<input type="password" name="pass" required/><br><br>
			Alamat Lengkap :<br>
			<textarea name="alamat" rows="5" cols="50"></textarea><br></br><br></br>
			<center><input type="submit" name="daftar" value="Daftar"></center>
		</form>
	</div>	
</body>
</html>