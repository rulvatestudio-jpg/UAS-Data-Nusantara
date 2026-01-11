<div class="container mt-5">
    <div class="row align-items-center mb-3">
        <div class="col-lg-6">
            <h3 class="fw-bold text-primary mb-0">Data Populasi Per Provinsi</h3>
            <p class="text-muted small mb-0">Kelola data kependudukan wilayah Indonesia</p>
        </div>
        
        <div class="col-lg-6 text-end">
            <?php if( isset($_SESSION['role']) && $_SESSION['role'] == 'admin' ) : ?>
                <a href="<?= BASEURL; ?>/penduduk/tambah" class="btn btn-primary shadow-sm rounded-pill px-4">
                    <i class="fas fa-plus-circle me-1"></i> Tambah Provinsi
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/penduduk/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari nama provinsi..." name="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit">Cari Data</button>
                    <a href="<?= BASEURL; ?>/penduduk" class="btn btn-outline-secondary">Reset</a>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow border-0 rounded-3">
                <div class="card-body p-0">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="py-3 ps-4">No</th>
                                <th class="py-3">Provinsi</th>
                                <th class="py-3">Ibu Kota</th>
                                <th class="py-3">Populasi</th>
                                <th class="py-3">Luas Wilayah</th>
                                <?php if( isset($_SESSION['role']) && $_SESSION['role'] == 'admin' ) : ?>
                                    <th class="py-3 text-center">Aksi</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if( empty($data['penduduk']) ) : ?>
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">
                                        <i class="fas fa-search fa-3x mb-3"></i><br>
                                        Data tidak ditemukan.
                                    </td>
                                </tr>
                            <?php endif; ?>

                            <?php $no = 1; ?>
                            <?php foreach( $data['penduduk'] as $row ) : ?>
                            <tr>
                                <td class="ps-4 fw-bold"><?= $no++; ?></td>
                                <td class="fw-bold text-primary"><?= $row['provinsi']; ?></td>
                                <td><?= $row['ibu_kota']; ?></td>
                                <td>
                                    <span class="badge bg-info text-dark rounded-pill px-3">
                                        <?= number_format($row['jumlah_penduduk'], 0, ',', '.'); ?>
                                    </span>
                                </td>
                                <td><?= $row['luas_wilayah']; ?></td>
                                
                                <?php if( isset($_SESSION['role']) && $_SESSION['role'] == 'admin' ) : ?>
                                    <td class="text-center">
                                        <a href="<?= BASEURL; ?>/penduduk/edit/<?= $row['id']; ?>" class="btn btn-sm btn-warning text-white me-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= BASEURL; ?>/penduduk/hapus/<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php if( $data['jumlahHalaman'] > 1 ) : ?>
    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            <nav>
              <ul class="pagination">
                
                <?php if( $data['halamanAktif'] > 1 ) : ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= BASEURL; ?>/penduduk?page=<?= $data['halamanAktif'] - 1; ?>">&laquo;</a>
                    </li>
                <?php endif; ?>

                <?php for( $i = 1; $i <= $data['jumlahHalaman']; $i++ ) : ?>
                    <?php if( $i == $data['halamanAktif'] ) : ?>
                        <li class="page-item active"><a class="page-link" href="<?= BASEURL; ?>/penduduk?page=<?= $i; ?>"><?= $i; ?></a></li>
                    <?php else : ?>
                        <li class="page-item"><a class="page-link" href="<?= BASEURL; ?>/penduduk?page=<?= $i; ?>"><?= $i; ?></a></li>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if( $data['halamanAktif'] < $data['jumlahHalaman'] ) : ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= BASEURL; ?>/penduduk?page=<?= $data['halamanAktif'] + 1; ?>">&raquo;</a>
                    </li>
                <?php endif; ?>

              </ul>
            </nav>
        </div>
    </div>
    <?php endif; ?>
    </div>