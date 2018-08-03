<!DOCTYPE html>
<html>
<head>
	<title>CRUD UAS TCC / 155610006 - Ricky Rodesta Listiawan</title>
</head>
<body>
	<h2>CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data Mahasiswa</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan mahasiswa_id yg didapatkan dari GET id -> edit.php?id=mahasiswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=mahasiswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table mahasiswa dengan kondisi WHERE mahasiswa_id = '$id'
	$show = mysql_query("SELECT * FROM mahasiswa WHERE mahasiswa_id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah mahasiswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo $data['mahasiswa_nim']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['mahasiswa_nama']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">Pilih Kelas</option>
						<option value="I" <?php if($data['mahasiswa_kelas'] == 'I'){ echo 'selected'; } ?>>I</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="II" <?php if($data['mahasiswa_kelas'] == 'II'){ echo 'selected'; } ?>>II</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="III" <?php if($data['mahasiswa_kelas'] == 'III'){ echo 'selected'; } ?>>III</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value="">Pilih Jurusan</option>
						<option value="Teknik Komputer" <?php if($data['mahasiswa_jurusan'] == 'Teknik Komputer'){ echo 'selected'; } ?>>Teknik Komputer</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Manajemen Informatika" <?php if($data['mahasiswa_jurusan'] == 'Manajemen Informatika'){ echo 'selected'; } ?>>Manajemen Informatika</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Komputerisasi Akuntansi" <?php if($data['mahasiswa_jurusan'] == 'Komputerisasi Akuntansi'){ echo 'selected'; } ?>>Komputerisasi Akuntansi</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Sistem Informasi" <?php if($data['mahasiswa_jurusan'] == 'Sistem Informasi'){ echo 'selected'; } ?>>Sistem Informasi</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Teknik Informatika" <?php if($data['mahasiswa_jurusan'] == 'Teknik Informatika'){ echo 'selected'; } ?>>Teknik Informatika</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>