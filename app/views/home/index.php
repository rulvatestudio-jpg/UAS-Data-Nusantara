<div class="bg-primary text-white p-5 mb-5 text-center">
    <div class="container py-5">
        <h1 class="display-4 fw-bold">Data Terpadu Indonesia</h1>
        <p class="lead mb-4">Portal satu pintu untuk mengakses data kependudukan, ekonomi, dan wilayah di seluruh Nusantara.</p>
        <a href="#kategori" class="btn btn-light btn-lg text-primary fw-bold">Jelajahi Data</a>
    </div>
</div>

<div class="container mb-5">
    <div class="row text-center">
        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow-sm py-3">
                <div class="card-body">
                    <h2 class="text-primary fw-bold"><?= $data['statistik']['penduduk']; ?></h2>
                    <p class="text-muted">Total Penduduk</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow-sm py-3">
                <div class="card-body">
                    <h2 class="text-success fw-bold"><?= $data['statistik']['provinsi']; ?></h2>
                    <p class="text-muted">Provinsi</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow-sm py-3">
                <div class="card-body">
                    <h2 class="text-warning fw-bold"><?= $data['statistik']['pulau']; ?></h2>
                    <p class="text-muted">Pulau</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="kategori">
    <h3 class="mb-4 fw-bold border-bottom pb-2">Kategori Data Populer</h3>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <div class="card-body">
                    <h5 class="card-title fw-bold"><i class="fas fa-users text-primary me-2"></i>Kependudukan</h5>
                    <p class="card-text text-muted">Data sensus penduduk, kelahiran, kematian, dan migrasi antar wilayah.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <div class="card-body">
                    <h5 class="card-title fw-bold"><i class="fas fa-chart-line text-success me-2"></i>Ekonomi</h5>
                    <p class="card-text text-muted">Data pertumbuhan ekonomi, inflasi, ekspor-impor, dan harga pasar.</p>
                    <a href="#" class="btn btn-outline-success btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <div class="card-body">
                    <h5 class="card-title fw-bold"><i class="fas fa-map-marked-alt text-danger me-2"></i>Geografis</h5>
                    <p class="card-text text-muted">Data luas wilayah, batas daerah, dan potensi sumber daya alam.</p>
                    <a href="#" class="btn btn-outline-danger btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>