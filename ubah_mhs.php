<?php

require "functions.php";

$id = $_GET["id"];
$data = tabel("SELECT * FROM mhs WHERE id = $id")[0];
$form = tabel("SELECT * FROM jurusan");

if (isset($_POST["submit"])) {

    if (ubah_mhs($_POST) > 0) {
        echo "<script> 
    alert('Data Berhasil Diubah');
     window.location='data_mhs.php';
    </script> ";
    } else {
        echo "<script> 
    alert('Data Gagal Diubah');
     window.location='data_mhs.php';
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
                                                        <label for="id_mhs">ID Calon Mahasiswa</label>
                                                        <input type="number" class="form-control" id="id_mhs" name="id_mhs" placeholder="ID Calon Mahasiswa" value="<?= $data['id_mhs'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Nama Calon Mahasiswa</label>
                                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Calon Mahasiswa" value="<?= $data['nama'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label for="nilai_un">Nilai Rata2 Ujian Nasional/Ujian Sekolah Calon Mahasiswa</label>
                                                            <input type="number" class="form-control" id="nilai_un" name="nilai_un" placeholder="Nilai UN/US" value="<?= $data['nilai_un'] ?>">
                                                            <div class="form-group">
                                                                <label for="nilai_test">Nilai Masuk Calon Mahasiswa</label>
                                                                <input type="number" class="form-control" id="nilai_test" name="nilai_test" value="<?= $data['nilai_test'] ?>" placeholder="Nilai Test Masuk">
                                                            </div>
                                                        </div>
                                                        <label for="jurusan">Pilih Jurusan Di Sekolah Asal</label>
                                                        <select class="form-control" name="jurusan" id="jurusan">
                                                            <?php foreach ($form as $tabel) : ?>
                                                                <option value="<?= $tabel['bobot_jurusan']; ?>"><?= $tabel['nama_jurusan']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                        </div>
                                        <input type="hidden" name="id" id="id" value="<?= $data['id'] ?>">

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