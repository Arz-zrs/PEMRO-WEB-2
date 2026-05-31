<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">

        <div class="text-center mb-4">
            <h1 class="fw-bold">Profile</h1>
            <p class="text-body-secondary">Profil Saya.</p>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <!-- basic info -->
                <div class="text-center mb-4">
                    <img src="<?= esc($profile['gambar']) ?>" alt="Profile photo of <?= esc($profile['nama']) ?>"
                        class="rounded border border-3 border-secondary mb-3" width="150" height="200">
                    <h4 class="fw-bold mb-1"><?= esc($profile['nama']) ?></h4>
                    <span class="badge bg-dark px-3 py-2">
                        <?= esc($profile['nim']) ?>
                    </span>
                </div>

                <hr>

                <!-- Details table -->
                <table class="table table-borderless mb-0">
                    <tbody>

                        <tr>
                            <th class="text-body-secondary" style="width:35%">
                                Program Studi
                            </th>
                            <td><?= esc($profile['prodi']) ?></td>
                        </tr>

                        <tr>
                            <th class="text-body-secondary align-top">
                                Hobi
                            </th>
                            <td>
                                <?php foreach ($profile['hobi'] as $hobby): ?>
                                    <span class="badge bg-info text-dark me-1 mb-1">
                                        <?= esc($hobby) ?>
                                    </span>
                                <?php endforeach; ?>
                            </td>
                        </tr>

                        <tr>
                            <th class="text-body-secondary align-top">
                                Skill
                            </th>
                            <td>
                                <?php foreach ($profile['skill'] as $s): ?>
                                    <span class="badge bg-success text-white me-1 mb-1">
                                        <?= esc($s) ?>
                                    </span>
                                <?php endforeach; ?>
                            </td>
                        </tr>

                        <tr>
                            <th class="text-body-secondary align-top">
                                Pengalaman Organisasi
                            </th>
                            <td>
                                <?php foreach ($profile['pengalaman'] as $exp): ?>
                                    <?php if (isset($exp['organisasi'])): ?>
                                        <div class="mb-2">
                                            <strong><?= esc($exp['organisasi']) ?></strong>
                                            <span class="text-body-secondary">-<br> <?= esc($exp['posisi']) ?></span>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-body-secondary align-top">
                                Prestasi Lomba
                            </th>
                            <td>
                                <?php foreach ($profile['pengalaman'] as $exp): ?>
                                    <?php if (isset($exp['lomba'])): ?>
                                        <div class="mb-2">
                                            <strong><?= esc($exp['lomba']) ?></strong>
                                            <span class="text-body-secondary">-<br> <?= esc($exp['prestasi']) ?></span>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>