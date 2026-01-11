<div class="container mt-5">
    <div class="card shadow-sm col-lg-8 mx-auto">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Form Edit Data Provinsi</h4>
        </div>
        <div class="card-body">
            <form action="<?= BASEURL; ?>/penduduk/ubah" method="post">
                
                <input type="hidden" name="id" value="<?= $data['pdd']['id']; ?>">

                <div class="mb-3">
                    <label for="provinsi" class="form-label">Nama Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" 
                        value="<?= $data['pdd']['provinsi']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="ibu_kota" class="form-label">Ibu Kota</label>
                    <input type="text" class="form-control" id="ibu_kota" name="ibu_kota" 
                        value="<?= $data['pdd']['ibu_kota']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="jumlah_penduduk" class="form-label">Jumlah Penduduk (Angka)</label>
                    <input type="number" class="form-control" id="jumlah_penduduk" name="jumlah_penduduk" 
                        value="<?= $data['pdd']['jumlah_penduduk']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="luas_wilayah" class="form-label">Luas Wilayah</label>
                    <input type="text" class="form-control" id="luas_wilayah" name="luas_wilayah" 
                        value="<?= $data['pdd']['luas_wilayah']; ?>" required>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?= BASEURL; ?>/penduduk" class="btn btn-secondary me-md-2">Batal</a>
                    <button type="submit" class="btn btn-warning">Update Data</button>
                </div>

            </form>
        </div>
    </div>
</div>