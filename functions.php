<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "ag";

// Koneksi dan memilih database di server
$koneksi=mysqli_connect($server,$username,$password) or die("Koneksi gagal");
mysqli_select_db($koneksi,$database) or die("Database tidak bisa dibuka");

function tabel($query){
	global $koneksi;
	$result = mysqli_query($koneksi,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){

		$rows [] = $row;
	}
	return $rows;
}

function tambah_mhs($data){
	global $koneksi;
	$id_mhs = htmlspecialchars($data["id_mhs"]);
    $nama = htmlspecialchars(strtoupper($data["nama"]));
  	$nilai_un = htmlspecialchars($data["nilai_un"]);
	$nilai_test = htmlspecialchars($data["nilai_test"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	$query = "INSERT INTO mhs VALUES (null,'$id_mhs', '$nama', '$nilai_un', '$nilai_test', '$jurusan')";
	mysqli_query($koneksi,$query);
	return mysqli_affected_rows($koneksi);
}

function tambah_jurusan($data)
{
	global $koneksi;
	$jenis_sekolah = htmlspecialchars($data["jenis_sekolah"]);
	$nama_jurusan = htmlspecialchars(strtoupper($data["nama_jurusan"]));
	$bobot_jurusan = htmlspecialchars($data["bobot_jurusan"]);
	
	$query = "INSERT INTO jurusan VALUES (null,'$jenis_sekolah', '$nama_jurusan', '$bobot_jurusan')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}	

function hapus_mhs($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM mhs WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}

function hapus_jurusan($id_jurusan)
{
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM jurusan WHERE id_jurusan = $id_jurusan");
	return mysqli_affected_rows($koneksi);
}

function ubah_mhs($data){

	global $koneksi;
	$id = $data["id"];
	$id_mhs = htmlspecialchars($data["id_mhs"]);
    $nama = htmlspecialchars(strtoupper($data["nama"]));
  	$nilai_un = htmlspecialchars($data["nilai_un"]);
	$nilai_test = htmlspecialchars($data["nilai_un"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	$query = "UPDATE mhs SET
			  id_mhs = '$id_mhs',
			  nama = '$nama',
			  nilai_un = '$nilai_un',
			  nilai_test = '$nilai_test',
			  jurusan = '$jurusan' WHERE id = $id";
	mysqli_query($koneksi,$query);
	return mysqli_affected_rows($koneksi);
}

function ubah_jurusan($data){
	global $koneksi;
	$id_jurusan = $data["id_jurusan"];
	$jenis_sekolah = htmlspecialchars($data["jenis_sekolah"]);
	$nama_jurusan = htmlspecialchars(strtoupper($data["nama_jurusan"]));
	$bobot_jurusan = htmlspecialchars($data["bobot_jurusan"]);

	$query = "UPDATE jurusan SET
			  jenis_sekolah = '$jenis_sekolah',
			  jenis_sekolah = '$jenis_sekolah',
			  nama_jurusan = '$nama_jurusan',
			  bobot_jurusan = '$bobot_jurusan' WHERE id_jurusan = $id_jurusan";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

