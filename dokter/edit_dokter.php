<?php
include('../db.php');
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM dokter WHERE id=$id"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Edit Dokter</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Spesialisasi:</label>
            <input type="text" name="spesialisasi" value="<?= $data['spesialisasi'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>No. Telp:</label>
            <input type="text" name="no_telp" value="<?= $data['no_telp'] ?>" class="form-control" required>
        </div>
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $spesialisasi = $_POST['spesialisasi'];
        $no_telp = $_POST['no_telp'];
        mysqli_query($conn, "UPDATE dokter SET nama='$nama', spesialisasi='$spesialisasi', no_telp='$no_telp' WHERE id=$id");
        echo "<script>window.location='index.php';</script>";
    }
    ?>
</div>
</body>
</html>
