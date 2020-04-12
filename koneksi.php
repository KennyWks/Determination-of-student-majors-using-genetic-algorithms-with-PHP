<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "ag";

// Koneksi dan memilih database di server
$koneksi=mysqli_connect($server,$username,$password, $database) or die("Koneksi gagal");
mysqli_select_db($koneksi,$database) or die("Database tidak bisa dibuka");

