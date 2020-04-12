<?php
require "functions.php";
$query = mysqli_query($koneksi,'TRUNCATE TABLE mhs_ti');
header("Location: data_mhsTI.php");