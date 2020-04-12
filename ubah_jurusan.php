<?php

require "functions.php";

$id_jurusan = $_GET["id_jurusan"];
$data = tabel("SELECT * FROM jurusan WHERE id_jurusan = $id_jurusan")[0];

if (isset($_POST["submit"])) {

    if (ubah_jurusan($_POST) > 0) {
        echo "<script> 
    alert('Data Berhasil Diubah');
     window.location='data_jurusan.php';
    </script> ";
    } else {
        echo "<script> 
    alert('Data Gagal Diubah');
     window.location='data_jurusan.php';
    </script> ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>16120057</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
        <a class="navbar-brand" href="#">16120057</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data_mhs.php">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data_jurusan.php">Data Jurusan</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <h2 style="text-align:center;">Form Ubah Data</h2>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-4">

                                    <div class="login-panel panel panel-default">
                                        <br>

                                        <div class="panel-body">
                                            <div id="loading" style="text-align: center"></div>
                                            <form name="mhs" action="" id="mhs" method="post">

                                                <fieldset>
                                                    <div class="form-group">
                                                        <label for="jenis_sekolah">Pilih Sekolah Asal</label>
                                                        <select class="form-control" name="jenis_sekolah" id="jenis_sekolah">
                                                            <option>SMA</option>
                                                            <option>SMK</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_jurusan">Nama Jurusan</label>
                                                        <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="<?= $data['nama_jurusan'] ?>" placeholder="Nama Jurusan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="bobot_jurusan">Bobot Jurusan</label>
                                                        <select class="form-control" name="bobot_jurusan" id="bobot_jurusan">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                        </div>
                                        <input type="hidden" name="id_jurusan" id="id" value="<?= $data['id_jurusan'] ?>">

                                        <button type="submit" class="btn btn-lg btn-success btn-block" id="submit" name="submit" onclick="return confirm('Apakah Anda yakin ingin mengubah data?')">Ubah</button>
                                        </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>