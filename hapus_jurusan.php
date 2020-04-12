<?php

require "functions.php";

$id_jurusan = $_GET["id_jurusan"];
if (hapus_jurusan($id_jurusan)>0) {

	echo "<script> 
    alert('Data Berhasil Dihapus');
    window.location='data_jurusan.php';
    </script> ";
  } else {
    
    echo "<script> 
    alert('Data Gagal Dihapus');
    window.location='data_jurusan.php';
    </script> ";
  }

 ?>