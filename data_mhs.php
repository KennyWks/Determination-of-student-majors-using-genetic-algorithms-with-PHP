<?php
require "functions.php";

$data = tabel("SElECT * FROM mhs");
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
          <a class="nav-link" href="data_mhsTI.php">Data Mahasiswa TI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data_mhsSI.php">Data Mahasiswa SI</a>
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
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb mt-3">
          <li>
            <a href="metode_ag.php" class="btn btn-primary">Seleksi</a>
            <a href="kosongkan_tabel.php" class="btn btn-primary">Kosongkan Tabel Mahasiswa</a>
          </li>
        </ol>

        <!-- Example DataTables Card-->
        <div class="card mb-2">
          <div class="card-header">
            <i class="fa fa-table"></i> Tabel Calon Mahasiswa</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No.Urut</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nilai Test Masuk</th>
                    <th>Nilai UN/US</th>
                    <th>Bobot Jurusan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No.Urut</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nilai Test Masuk</th>
                    <th>Nilai UN/US</th>
                    <th>Bobot Jurusan</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $i = 1 ?>
                  <?php foreach ($data as $tabel) : ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $tabel["id_mhs"] ?></td>
                      <td><?= $tabel["nama"] ?></td>
                      <td><?= $tabel["nilai_test"] ?></td>
                      <td><?= $tabel["nilai_un"] ?></td>
                      <td><?= $tabel["jurusan"] ?></td>
                      <td>
                        <a href="ubah_mhs.php?id=<?= $tabel["id"] ?>" class="btn btn-primary">Ubah</a></button>
                        <a href="hapus_mhs.php?id=<?= $tabel["id"] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a></button>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Sumber : Database Calon Mahasiswa</div>
        </div>
      </div>
    </div>

  </div>
  </div>
  </div>


  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin-datatables.min.js"></script>

</body>

</html>