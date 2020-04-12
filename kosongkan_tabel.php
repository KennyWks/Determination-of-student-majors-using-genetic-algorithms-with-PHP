<?php
require "functions.php";
$query = mysqli_query($koneksi,"TRUNCATE TABLE mhs");
header("Location: data_mhs.php");