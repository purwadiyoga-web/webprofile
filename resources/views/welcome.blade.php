<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga BK - Layanan Bimbingan Konseling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --madrasah-green: #2e7d32; }
        .bg-green { background-color: var(--madrasah-green); }
        .text-green { color: var(--madrasah-green); }
        .hero { padding: 100px 0; background: #f1f8e9; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-green shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">YOGA BK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                    <li class="nav-nav-item"><a class="nav-link" href="/layanan">Layanan</a></li>
                    <li class="nav-nav-item"><a class="nav-link" href="/artikel">Artikel</a></li>
                    <li class="nav-nav-item"><a class="nav-link btn btn-warning text-dark ms-lg-3" href="/student/forum">Forum Siswa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold text-green">Selamat Datang di Hub Konseling Digital</h1>
            <p class="lead mb-4">Layanan Bimbingan dan Konseling MTsN 6 Tulungagung <br> Bersama Bapak Purwadi Yoga Satwika, S.Pd</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="/booking/create" class="btn btn-success btn-lg px-4 gap-3 shadow">Booking Konseling</a>
                <a href="/kotak-rahasia" class="btn btn-outline-success btn-lg px-4">Kotak Rahasia</a>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <h3 class="h5 fw-bold">Materi Layanan</h3>
                            <p class="text-muted small">Eksplorasi artikel bimbingan pribadi, sosial, belajar, dan karir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <h3 class="h5 fw-bold">Media Interaktif</h3>
                            <p class="text-muted small">Belajar lebih seru dengan konten interaktif berbasis GAS.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <h3 class="h5 fw-bold">Forum Siswa</h3>
                            <p class="text-muted small">Ruang diskusi aman dan nyaman antar teman madrasah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 bg-light border-top">
        <div class="container text-center">
            <p class="mb-0 text-muted">© 2026 Yoga BK - Purwadi Yoga Satwika, S.Pd. Dibuat dengan Laravel.</p>
        </div>
    </footer>

</body>
</html>