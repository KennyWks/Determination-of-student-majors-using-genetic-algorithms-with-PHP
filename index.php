<?php

require "functions.php";

$data = tabel("SElECT * FROM jurusan");

if (isset($_POST["tambah_mhs"])) {

    if (tambah_mhs($_POST) > 0) {
        echo "<script> 
    alert('Data Berhasil Ditambahkan');
     window.location='data_mhs.php';
    </script> ";
    } else {
        echo "<script> 
    alert('Data Gagal Ditambahkan');
     window.location='data_mhs.php';
    </script>";
    }
}

if (isset($_POST["tambah_jurusan"])) {
    if (tambah_jurusan($_POST) > 0) {
        echo "<script> 
    alert('Data Berhasil Ditambahkan');
     window.location='data_jurusan.php';
    </script> ";
    } else {
        echo "<script> 
    alert('Data Gagal Ditambahkan');
     window.location='data_jurusan.php';
    </script>";
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
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#myModalMhs">Tambah Calon Mahasiswa</a>

                    <!-- The Modal Tambah Data Calon Mhs -->
                    <div class="modal fade" id="myModalMhs">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Form Data</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="id_mhs">ID Calon Mahasiswa</label>
                                            <input type="number" class="form-control" id="id_mhs" name="id_mhs" placeholder="ID Calon Mahasiswa">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama Calon Mahasiswa</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Calon Mahasiswa">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="nilai_un">Nilai Rata2 Ujian Nasional/Ujian Sekolah Calon Mahasiswa</label>
                                                <input type="number" class="form-control" id="nilai_un" name="nilai_un" placeholder="Nilai UN/US">
                                                <div class="form-group">
                                                    <label for="nilai_test">Nilai Masuk Calon Mahasiswa</label>
                                                    <input type="number" class="form-control" id="nilai_test" name="nilai_test" placeholder="Nilai Test Masuk">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-f">
                                            <label for="jurusan">Pilih Jurusan Di Sekolah Asal</label>
                                            <select class="form-control" name="jurusan" id="jurusan">
                                                <?php foreach ($data as $tabel) : ?>
                                                    <option value="<?= $tabel['bobot_jurusan']; ?>"><?= $tabel['nama_jurusan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" name="tambah_mhs" class="btn btn-success">Tambah</button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#myModalJurusan">Tambah Jurusan</a>

                    <!-- The Modal Tambah Jurusan-->
                    <div class="modal fade" id="myModalJurusan">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Form Jurusan</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="jenis_sekolah">Pilih Sekolah Asal</label>
                                            <select class="form-control" name="jenis_sekolah" id="jenis_sekolah">
                                                <option>SMA</option>
                                                <option>SMK</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_jurusan">Nama Jurusan</label>
                                            <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" placeholder="Nama Jurusan">
                                        </div>
                                        <div class="form-group">
                                            <label for="bobot_jurusan">Bobot Jurusan</label>
                                            <select class="form-control" name="bobot_jurusan" id="bobot_jurusan">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select> </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" name="tambah_jurusan" class="btn btn-success">Tambah</button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                </div>
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

    <div class="container">
        <header class="jumbotron my-3">
            <h1 class="lead"> Selamat Datang!</h1>
            <h3 class="display-5">Aplikasi Penentuan Jurusan Bagi Mahasiswa Baru Dengan Algoritma Genetika</h3>
            <p class="btn btn-primary btn-lg">Studi Kasus : STIKOM Uyelindo Kupang</p>
        </header>

        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/flowchart-metode.png" alt="" width="100%" height="350">
                    <div class="carousel-caption">
                        <h3>Cara Kerja Algoritma Genetika</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/flowchart-metode.png" alt="" width="100%" height="350">
                    <div class="carousel-caption">
                        <h3>Flowchart Sistem Aplikasi</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/step-ag.png" alt="" width="100%" height="350">
                    <div class="carousel-caption">
                        <h3>Contoh Mutasi & Persilangan</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div>
            <br>
            <div class="container">
                <h3>Sekilas tentang Algoritma Genetika.</h3>
                <br>
                <p class="alert alert-danger">Apa itu Algoritma Genetika?</p>
                <p class="alert alert-success">Algoritma genetika adalah algoritma komputasi yang diinspirasi teori evolusi yang kemudian diadopsi menjadi algoritma komputasi untuk mencari solusi suatu permasalahan dengan cara yang lebih alamiah. Salah satu aplikasi algoritma genetika adalah pada permasalahan optimasi kombinasi, yaitu mendapatkan suatu nilai solusi optimal terhadap suatu permasalahan yang mempunyai banyak kemungkinan solusi. Di bawah ini akan dibahas teori dasar Algoritma Genetika beserta contoh aplikasinya dalam menyelesaikan suatu permasalahan optimasi kombinasi sederhana.</p>
                <p class="alert alert-danger">Bagaimana cara kerja Algoritma Genetika?</p>
                <ul class="alert alert-primary">
                    <p>1. Tentukan populasi awal secara acak,</p>
                    <p>2. Evaluasi setiap kromosom dalam populasi tersebut menggunakan fungsi yang cocok,</p>
                    <p>3. Pilih satu set kromosom untuk menjadi "orang tua" dan kemudian salin kromosom baru menggunakan crossover dan operator mutasi,</p>
                    <p>4. Evaluasi kromosom baru ini menggunakan fungsi yang cocok pada kromosom,</p>
                    <p>5. Jika kriteria tercapai, berhenti lalu pergi ke langkah ke-3.</p>

                </ul>
            </div>

        </div>
    </div>
    </div>
</body>

</html>