<div class="container mt-5">
    <div class="card shadow-sm col-lg-8 mx-auto">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Form Tambah Data Provinsi</h4>
        </div>
        <div class="card-body">
            <form action="<?= BASEURL; ?>/penduduk/simpan" method="post">
                
                <div class="mb-3">
                    <label for="provinsi" class="form-label">Nama Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Contoh: Jawa Tengah" required>
                </div>

                <div class="mb-3">
                    <label for="ibu_kota" class="form-label">Ibu Kota</label>
                    <input type="text" class="form-control" id="ibu_kota" name="ibu_kota" placeholder="Contoh: Semarang" required>
                </div>

                <div class="mb-3">
                    <label for="jumlah_penduduk" class="form-label">Jumlah Penduduk (Angka)</label>
                    <input type="number" class="form-control" id="jumlah_penduduk" name="jumlah_penduduk" placeholder="Contoh: 36000000" required>
                </div>

                <div class="mb-3">
                    <label for="luas_wilayah" class="form-label">Luas Wilayah</label>
                    <input type="text" class="form-control" id="luas_wilayah" name="luas_wilayah" placeholder="Contoh: 32.800 km²" required>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?= BASEURL; ?>/penduduk" class="btn btn-secondary me-md-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>

            </form>
        </div>
    </div>
</div>