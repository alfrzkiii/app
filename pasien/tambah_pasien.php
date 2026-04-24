<?php include('../db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Tambah Pasien</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keluhan:</label>
            <input type="text" name="keluhan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Dokter:</label>
            <select name="id_dokter" class="form-select" required>
                <option value="">-- Pilih Dokter --</option>
                <?php
                $dokter = mysqli_query($conn, "SELECT * FROM dokter");
                while ($d = mysqli_fetch_assoc($dokter)) {
                    echo "<option value='{$d['id']}'>{$d['nama']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Perawat:</label>
            <select name="id_perawat" class="form-select" required>
                <option value="">-- Pilih Perawat --</option>
                <?php
                $perawat = mysqli_query($conn, "SELECT * FROM perawat");
                while ($p = mysqli_fetch_assoc($perawat)) {
                    echo "<option value='{$p['id']}'>{$p['nama']}</option>";
                }
                ?>
            </select>
        </div>
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $keluhan = $_POST['keluhan'];
        $id_dokter = $_POST['id_dokter'];
        $id_perawat = $_POST['id_perawat'];

        mysqli_query($conn, "INSERT INTO pasien (nama, keluhan, id_dokter, id_perawat) VALUES ('$nama', '$keluhan', $id_dokter, $id_perawat)");
        echo "<script>window.location='index.php';</script>";
    }
    ?>
</div>
</body>
</html>
