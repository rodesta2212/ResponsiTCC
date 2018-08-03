<!DOCTYPE html>
<html>
<head>
	<title>CRUD UAS TCC / 155610006 - Ricky Rodesta Listiawan</title>
</head>
<body>
	<h2>CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data Mahasiswa</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">Pilih Kelas</option>
						<option value="I">I</option>
						<option value="II">II</option>
						<option value="III">III</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value="">Pilih Jurusan</option>
						<option value="Teknik Komputer">Teknik Komputer</option>
						<option value="Manajemen Informatika">Manajemen Informatika</option>
						<option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
						<option value="Sistem Informasi">Sistem Informasi</option>
						<option value="Teknik Informatika">Teknik Informatika</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>