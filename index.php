<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Rumah Sakit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS (optional) -->
    <style>
        body {
            background: linear-gradient(135deg, #e9f5ff, #ffffff);
        }
        .dashboard-card {
            transition: transform 0.2s ease-in-out;
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
        }
        .card-icon {
            font-size: 2.5rem;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Dashboard Sistem Informasi Rumah Sakit</h1>
            <p class="text-muted">Kelola data dokter, perawat, dan pasien dengan mudah</p>
        </div>

        <div class="row justify-content-center g-4">
            <!-- Dokter -->
            <div class="col-md-4">
                <a href="dokter/index.php" class="text-decoration-none">
                    <div class="card dashboard-card shadow-sm border-0 text-center p-4">
                        <div class="card-body">
                            <div class="card-icon text-primary mb-3">
                                <i class="bi bi-person-badge-fill"></i>
                            </div>
                            <h5 class="card-title text-dark">Data Dokter</h5>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Perawat -->
            <div class="col-md-4">
                <a href="perawat/index.php" class="text-decoration-none">
                    <div class="card dashboard-card shadow-sm border-0 text-center p-4">
                        <div class="card-body">
                            <div class="card-icon text-success mb-3">
                                <i class="bi bi-person-video2"></i>
                            </div>
                            <h5 class="card-title text-dark">Data Perawat</h5>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Pasien -->
            <div class="col-md-4">
                <a href="pasien/index.php" class="text-decoration-none">
                    <div class="card dashboard-card shadow-sm border-0 text-center p-4">
                        <div class="card-body">
                            <div class="card-icon text-danger mb-3">
                                <i class="bi bi-hospital-fill"></i>
                            </div>
                            <h5 class="card-title text-dark">Data Pasien</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
