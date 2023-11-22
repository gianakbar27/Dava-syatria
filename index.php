<!DOCTYPE html>
<html>
<head>
	<title>Biodata Siswa</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="container">
		<form action="controller/login.php" method="POST" class="login-username">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="nama" name="nama" required>
			</div>
			<div class="input-group">
				<select name="nama" id="kelas">
                    <option value="" disabled selected>Pilih Kelas</option>
                    <option value="kopetensi">Rekayasa Peraangkat Lunak</option>
                    <option value="kopetensi">Teknik Komputer dan Jaringan</option>
                    <option value="kopetensi">Teknik Kendaran Ringan</option>
                </select>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Masuk</button>
			</div>
			<p class="login-register">Anda Belum Memiliki Kelas <a href="register_view.php">Silahkan Register</a></p>
		</form>
	</div>
</body>
</html>