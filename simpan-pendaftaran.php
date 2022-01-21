<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$jk=$_POST["jk"];
$email=$_POST["email"];
$no_hp=$_POST["no_hp"];
$password=md5($_POST["password"]);


//Query input menginput data kedalam tabel anggota
  $sql="insert into anggota (username,nama,alamat,email,jk,no_hp,password) values
		('$username','$nama','$alamat',''$jk','$email','$no_hp','$password')";

//Mengeksekusi/menjalankan query diatas
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}

?>
