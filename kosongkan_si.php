<?php
require "functions.php";
$query = mysqli_query($koneksi,'TRUNCATE TABLE mhs_si');
header("Location: data_mhsSI.php");