<?php
include('../db.php');
$data = mysqli_query($conn, "
    SELECT pasien.*, dokter.nama AS nama_dokter, perawat.nama AS nama_perawat
    FROM pasien
    LEFT JOIN dokter ON pasien.id_dokter = dokter.id
    LEFT JOIN perawat ON pasien.id_perawat = perawat.id
");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .card-header {
            background-color: #dc3545;
            color: white;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0"><i class="bi bi-hospital-fill me-2"></i>Data Pasien</h4>
            <a href="tambah_pasien.php" class="btn btn-light btn-sm">
                <i class="bi bi-plus-circle me-1"></i> Tambah Pasien
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped align-middle">
                <thead class="table-danger text-center">
                    <tr>
                        <th width="5%">ID</th>
                        <th>Nama</th>
                        <th>Keluhan</th>
                        <th>Dokter</th>
                        <th>Perawat</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($data)) : ?>
                    <tr>
                        <td class="text-center"><?= $row['id'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['keluhan'] ?></td>
                        <td><?= $row['nama_dokter'] ?? '<i class="text-muted">Tidak ada</i>' ?></td>
                        <td><?= $row['nama_perawat'] ?? '<i class="text-muted">Tidak ada</i>' ?></td>
                        <td class="text-center">
                            <a href="edit_pasien.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning me-1">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <a href="hapus_pasien.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash-fill"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a href="../index.php" class="btn btn-secondary mt-3">
                <i class="bi bi-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
</body>
</html>
