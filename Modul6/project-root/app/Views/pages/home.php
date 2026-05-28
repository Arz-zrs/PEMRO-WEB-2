<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">

        <div class="text-center mb-4">
            <h1 class="fw-bold">Welcome, Visitor</h1>
            <p class="text-muted">Profil Singkat Saya.</p>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <div class="d-flex align-items-center gap-3 mb-3">
                    <img src="<?= esc($profile['gambar']) ?>" alt="Profile photo of <?= esc($profile['nama']) ?>"
                        class="rounded-circle border border-3 border-primary" width="60" height="60">
                    <div>
                        <h5 class="mb-0 fw-semibold"><?= esc($profile['nama']) ?></h5>
                        <span class="badge bg-secondary"><?= esc($profile['nim']) ?></span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>