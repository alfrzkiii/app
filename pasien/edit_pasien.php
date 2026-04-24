<?php
include('../db.php');
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pasien WHERE id=$id"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Edit Pasien</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keluhan:</label>
            <input type="text" name="keluhan" value="<?= $data['keluhan'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Dokter:</label>
            <select name="id_dokter" class="form-select" required>
                <?php
                $dokter = mysqli_query($conn, "SELECT * FROM dokter");
                while ($d = mysqli_fetch_assoc($dokter)) {
                    $selected = ($d['id'] == $data['id_dokter']) ? 'selected' : '';
                    echo "<option value='{$d['id']}' $selected>{$d['nama']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Perawat:</label>
            <select name="id_perawat" class="form-select" required>
                <?php
                $perawat = mysqli_query($conn, "SELECT * FROM perawat");
                while ($p = mysqli_fetch_assoc($perawat)) {
                    $selected = ($p['id'] == $data['id_perawat']) ? 'selected' : '';
                    echo "<option value='{$p['id']}' $selected>{$p['nama']}</option>";
                }
                ?>
            </select>
        </div>
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $keluhan = $_POST['keluhan'];
        $id_dokter = $_POST['id_dokter'];
        $id_perawat = $_POST['id_perawat'];
        mysqli_query($conn, "UPDATE pasien SET nama='$nama', keluhan='$keluhan', id_dokter=$id_dokter, id_perawat=$id_perawat WHERE id=$id");
        echo "<script>window.location='index.php';</script>";
    }
    ?>
</div>
</body>
</html>
