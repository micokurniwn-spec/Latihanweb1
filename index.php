<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota di Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Kota Indonesia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#biodata">Biodata</a></li>
                <li class="nav-item"><a class="nav-link" href="#latihan1">Latihan 1</a></li>
                <li class="nav-item"><a class="nav-link" href="#latihan2">Latihan 2</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-light py-5">
    <div class="container">
        <h1 class="display-6">Kota di Indonesia</h1>
        <p class="lead text-muted">Halaman ini menggunakan Bootstrap online dan tampilan yang lebih rapi.</p>
    </div>
</header>

<main class="container my-5">
    <?php
    $form_submitted = $_SERVER["REQUEST_METHOD"] === "POST";
    if ($form_submitted) {
        $nama = trim($_POST['nama'] ?? '');
        $no_hp = trim($_POST['no_hp'] ?? '');
        $ttl = trim($_POST['ttl'] ?? '');
        $nilai1 = isset($_POST['nilai_tugas_1']) ? (float) $_POST['nilai_tugas_1'] : 0;
        $nilai2 = isset($_POST['nilai_tugas_2']) ? (float) $_POST['nilai_tugas_2'] : 0;
        $total = $nilai1 + $nilai2;
    }
    ?>

    <section id="biodata" class="mb-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title">Biodata</h2>
                <p class="text-muted">Isi biodata di bawah ini untuk melihat hasilnya.</p>

                <form method="post" action="" class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required value="<?php echo htmlspecialchars($_POST['nama'] ?? ''); ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nomor HP</label>
                        <input type="tel" name="no_hp" class="form-control" required value="<?php echo htmlspecialchars($_POST['no_hp'] ?? ''); ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="ttl" class="form-control" required value="<?php echo htmlspecialchars($_POST['ttl'] ?? ''); ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nilai Tugas 1</label>
                        <input type="number" name="nilai_tugas_1" class="form-control" value="<?php echo htmlspecialchars($_POST['nilai_tugas_1'] ?? ''); ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nilai Tugas 2</label>
                        <input type="number" name="nilai_tugas_2" class="form-control" value="<?php echo htmlspecialchars($_POST['nilai_tugas_2'] ?? ''); ?>">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>

                <?php if ($form_submitted): ?>
                    <div class="alert alert-info mt-4" role="alert">
                        <h5 class="alert-heading">Hasil Pendaftaran</h5>
                        <p class="mb-1"><strong>Nama:</strong> <?php echo htmlspecialchars($nama); ?></p>
                        <p class="mb-1"><strong>No HP:</strong> <?php echo htmlspecialchars($no_hp); ?></p>
                        <p class="mb-1"><strong>TTL:</strong> <?php echo htmlspecialchars($ttl); ?></p>
                        <p class="mb-1"><strong>Nilai Tugas 1:</strong> <?php echo $nilai1; ?></p>
                        <p class="mb-1"><strong>Nilai Tugas 2:</strong> <?php echo $nilai2; ?></p>
                        <hr>
                        <p class="mb-0"><strong>Total Nilai:</strong> <?php echo $total; ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="latihan1" class="mb-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title">Latihan 1</h2>
                <p class="text-muted">Pilih kota untuk melihat informasi singkat.</p>

                <div class="btn-group flex-wrap mb-4" role="group">
                    <a href="#latihan1" class="btn btn-outline-primary city-btn active" onclick="showCity(event, 'jakarta', this)">Jakarta</a>
                    <a href="#latihan1" class="btn btn-outline-primary city-btn" onclick="showCity(event, 'depok', this)">Depok</a>
                    <a href="#latihan1" class="btn btn-outline-primary city-btn" onclick="showCity(event, 'surabaya', this)">Surabaya</a>
                    <a href="#latihan1" class="btn btn-outline-primary city-btn" onclick="showCity(event, 'bandung', this)">Bandung</a>
                    <a href="#latihan1" class="btn btn-outline-primary city-btn" onclick="showCity(event, 'medan', this)">Medan</a>
                    <a href="#latihan1" class="btn btn-outline-primary city-btn" onclick="showCity(event, 'yogyakarta', this)">Yogyakarta</a>
                </div>

                <div class="city-content" id="jakarta">
                    <h3>Jakarta</h3>
                    <p>Jakarta adalah ibu kota Indonesia yang menjadi pusat pemerintahan, bisnis, dan budaya.</p>
                    <p>Kota ini dikenal dengan Monas, pusat perbelanjaan, dan gedung-gedung tinggi di area Sudirman dan Thamrin.</p>
                </div>
                <div class="city-content d-none" id="depok">
                    <h3>Depok</h3>
                    <p>Depok adalah kota pendidikan di selatan Jakarta yang juga menjadi bagian dari wilayah Jabodetabek.</p>
                    <p>Universitas Indonesia adalah salah satu ikon utama kota ini.</p>
                </div>
                <div class="city-content d-none" id="surabaya">
                    <h3>Surabaya</h3>
                    <p>Surabaya adalah Kota Pahlawan dan pusat perdagangan di Jawa Timur.</p>
                    <p>Kota ini penting untuk industri, pelabuhan, dan jaringan transportasi antar pulau.</p>
                </div>
                <div class="city-content d-none" id="bandung">
                    <h3>Bandung</h3>
                    <p>Bandung dijuluki Paris van Java karena suasana kota yang sejuk dan budayanya yang kreatif.</p>
                    <p>Beragam wisata kuliner, factory outlet, dan arsitektur kolonial menjadi daya tariknya.</p>
                </div>
                <div class="city-content d-none" id="medan">
                    <h3>Medan</h3>
                    <p>Medan adalah ibu kota Sumatera Utara yang kaya akan budaya dan kuliner khas seperti durian dan bika ambon.</p>
                    <p>Kota ini juga menjadi pusat perdagangan di wilayah Sumatera.</p>
                </div>
                <div class="city-content d-none" id="yogyakarta">
                    <h3>Yogyakarta</h3>
                    <p>Yogyakarta dikenal sebagai Kota Pelajar dengan banyak pusat seni, budaya, dan candi bersejarah.</p>
                    <p>Candi Borobudur dan Prambanan berada di dekatnya, menjadikan Jogja tujuan wisata utama.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="latihan2" class="mb-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title">Latihan 2</h2>
                <p class="text-muted">Contoh tabel data kota untuk latihan menampilkan informasi secara terstruktur.</p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Keterangan Singkat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jakarta</td>
                                <td>DKI Jakarta</td>
                                <td>Ibu kota negara dan pusat pemerintahan.</td>
                            </tr>
                            <tr>
                                <td>Depok</td>
                                <td>Jawa Barat</td>
                                <td>Kota pendidikan bagian Jabodetabek.</td>
                            </tr>
                            <tr>
                                <td>Surabaya</td>
                                <td>Jawa Timur</td>
                                <td>Kota pelabuhan dan pusat perdagangan.</td>
                            </tr>
                            <tr>
                                <td>Bandung</td>
                                <td>Jawa Barat</td>
                                <td>Kota wisata kuliner dan fashion.</td>
                            </tr>
                            <tr>
                                <td>Yogyakarta</td>
                                <td>DI Yogyakarta</td>
                                <td>Kota pelajar dan budaya Jawa.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="bg-primary text-white text-center py-3">
    &copy; 2026 - Rich apel
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showCity(event, cityId, element) {
        event.preventDefault();
        document.querySelectorAll('.city-content').forEach(function(content) {
            content.classList.add('d-none');
        });
        document.getElementById(cityId).classList.remove('d-none');

        document.querySelectorAll('.city-btn').forEach(function(btn) {
            btn.classList.remove('active');
        });
        element.classList.add('active');
    }
</script>
</body>
</html>