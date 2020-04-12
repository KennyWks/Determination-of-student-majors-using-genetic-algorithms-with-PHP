<?php
require "functions.php";

$data = tabel("SElECT * FROM jurusan");
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

    <div class="container">
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item active">Data Jurusan di Sekolah (SMA/SMK)</li>
                </ol>
                <!-- Example DataTables Card-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Tabel Jurusan</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.Urut</th>
                                        <th>Jenis Sekolah</th>
                                        <th>Nama Jurusan</th>
                                        <th>Bobot Jurusan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No.Urut</th>
                                        <th>Jenis Sekolah</th>
                                        <th>Nama Jurusan</th>
                                        <th>Bobot Jurusan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($data as $tabel) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $tabel["jenis_sekolah"] ?></td>
                                            <td><?= $tabel["nama_jurusan"] ?></td>
                                            <td><?= $tabel["bobot_jurusan"] ?></td>
                                            <td>
                                                <a href="ubah_jurusan.php?id_jurusan=<?= $tabel["id_jurusan"] ?>" class="btn btn-primary">Ubah</a></button>
                                                <a href="hapus_jurusan.php?id_jurusan=<?= $tabel["id_jurusan"] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a></button>
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