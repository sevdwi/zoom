<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?= base_url('assets/business.png') ?>" type="image/png" sizes="16x16">
    <title>Tambah Jadwal Zoom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light py-5">
    <div class="container">
        <div class="card shadow mx-auto" style="max-width: 700px;">
            <div class="card-body">
                <h1 class="card-title h4 mb-4">Tambah Jadwal Zoom</h1>

                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('/zoom/store') ?>" method="post">
                    <input type="hidden" name="nomor" value="<?= $nomorBaru ?>">

                    <div class="mb-3">
                        <label class="form-label">Kegiatan</label>
                        <input type="text" name="kegiatan" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pemohon</label>
                        <select name="pemohon" class="form-select">
                            <?php foreach ($pemohonList as $OPD): ?>
                                <option value="<?= $OPD ?>">
                                    <?= $OPD ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jam mulai</label>
                        <input type="time" name="jam_mulai" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <textarea name="link" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Akun</label>
                        <select name="akun" class="form-select">
                            <?php foreach ($akunList as $akun): ?>
                                <option value="<?= $akun ?>">
                                    <?= $akun ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('/zoom') ?>" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
