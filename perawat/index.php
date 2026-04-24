<?php
include('../db.php');
$data = mysqli_query($conn, "SELECT * FROM perawat");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Perawat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f8fef8;
        }
        .card-header {
            background-color: #198754;
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
            <h4 class="mb-0"><i class="bi bi-person-video2 me-2"></i>Data Perawat</h4>
            <a href="tambah_perawat.php" class="btn btn-light btn-sm">
                <i class="bi bi-plus-circle me-1"></i> Tambah Perawat
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped align-middle">
                <thead class="table-success text-center">
                    <tr>
                        <th width="5%">ID</th>
                        <th>Nama</th>
                        <th>Spesialisasi</th>
                        <th>No. Telp</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($data)) : ?>
                    <tr>
                        <td class="text-center"><?= $row['id'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['spesialisasi'] ?></td>
                        <td><?= $row['no_telp'] ?></td>
                        <td class="text-center">
                            <a href="edit_perawat.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning me-1">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <a href="hapus_perawat.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
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
