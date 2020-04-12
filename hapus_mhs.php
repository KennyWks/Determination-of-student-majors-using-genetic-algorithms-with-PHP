<?php

require "functions.php";

$id = $_GET["id"];
if (hapus_mhs($id)>0) {

	echo "<script> 
    alert('Data Berhasil Dihapus');
    window.location='data_mhs.php';
    </script> ";
  } else {
    
    echo "<script> 
    alert('Data Gagal Dihapus');
    window.location='data_mhs.php';
    </script> ";
  }

 ?>