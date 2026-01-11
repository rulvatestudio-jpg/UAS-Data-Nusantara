<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <h3 class="text-center fw-bold text-primary mb-4">LOGIN DULU</h3>
                    
                    <form action="<?= BASEURL; ?>/login/prosesLogin" method="post">
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" name="login" class="btn btn-primary fw-bold">MASUK SEKARANG</button>
                        </div>

                    </form>
                    
                    <div class="mt-3 text-center">
                        <small class="text-muted">
                            Akun Demo:<br>
                            <strong>Admin:</strong> admin / admin123<br>
                            <strong>User:</strong> user / user123
                        </small>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>