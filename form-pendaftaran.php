<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Anggota</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Form Pendaftaran Siswa</h2>
    <form action="simpan-pendaftaran.php" method="post">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" />
        </div>
		<div class="form-group">
            <label>Nama Siswa:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>
		<div class="form-group">
			<label>Alamat:</label>
			<textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" ></textarea>
		</div>
    <div class="form-group">
			<label>Jenis Kelamin:</label>
      <select name="jk">
                <option value="laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
		</div>
		<div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
        </div>
		<div class="form-group">
            <label>No HP:</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" />
        </div>
		<div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password" />
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>

    </form>
</div>
</body>
</html>
