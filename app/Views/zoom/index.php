<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= base_url('assets/business.png') ?>" type="image/png" sizes="16x16">
  <title><?= $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6f9;
    }
    .sidebar {
      height: 100vh;
      background-color: #343a40;
      padding-top: 1rem;
    }
    .sidebar a {
      color: #fff;
      padding: 10px 20px;
      display: block;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      padding: 2rem;
    }
    .table thead {
      background-color: #0d6efd;
      color: white;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 sidebar">
    <div class="d-flex align-items-center">
    <a class="navbar-brand" href="<?= base_url('/zoom') ?>">
      <img src="<?= base_url('assets/business.png') ?>" alt="Zoom Icon" width="40" height="40" class="me-2">
      <span class="fw-bold text-white">Zoom Panel</span>
    </div>
      <!-- <a href="#">Dashboard</a> -->
      <!-- <a href="#">Daftar Meeting</a>
      <a href="#">Buat Meeting</a> -->
      <a href="<?= base_url('/zoom/create') ?>"
          class="btn btn-success">Tambah Jadwal</a> <br>
      <a href="<?= base_url('/zoom/export/pdf') ?>"
          class="btn btn-secondary">Cetak PDF</a> <br>
      <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Logout</a>
    </nav>

    <!-- Content -->
    <main class="col-md-10 content">
      <h2 class="mb-4">Daftar Zoom Meeting</h2>

      <div class="table-responsive mt-4">
      <table class="table table-bordered align-middle w-full table-auto border border-gray-300">
            <thead class="bg-blue-200">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Kegiatan</th>
                    <th class="border px-4 py-2">Pemohon</th>
                    <th class="border px-4 py-2">Tanggal</th>
                    <th class="border px-4 py-2">Jam</th>
                    <th class="border px-4 py-2">Link</th>
                    <th class="border px-4 py-2">Akun</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($zoom as $row): ?>
                    <?php
                    // $kodeKlasifikasi = $row['kode_klaifikasi'];
                    // $angkaSaja = preg_replace("/[^0-9.]/", "", $kodeKlasifikasi);
                    ?>
                    <tr class="hover:bg-gray-100">
                        <td class="border px-4 py-2">
                            <?= $no++ ?>
                        </td>
                        <td class="border px-4 py-2">
                            <?= esc($row['kegiatan']) ?>
                        </td>
                        <td class="border px-4 py-2">
                            <?= esc($row['pemohon']) ?>
                        </td>
                        <td class="border px-4 py-2">
                            <?= esc($row['tanggal']) ?>
                        </td>
                        <td class="border px-4 py-2">
                            <?= esc($row['jam_mulai']) ?>
                        </td>
                        <td class="border px-4 py-2">
                        <a href="<?= esc($row['link']) ?>"><?= esc($row['link']) ?></a>    
                        </td>
                        <td class="border px-4 py-2">
                            <?= esc($row['akun']) ?>   
                        </td>
                        <td class="border px-4 py-2 text-center space-x-2">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="<?= base_url('/zoom/edit/' . $row['id']) ?>"
                                class="btn btn-warning">Edit</a>
                            <form action="<?= base_url('/zoom/delete/' . $row['id']) ?>" method="post" class="inline"
                                onsubmit="return confirm('Yakin ingin menghapus surat ini?');">
                                <?= csrf_field() ?>
                                <button type="submit"
                                    class="btn btn-danger ms-2">Hapus</button>
                            </form>                       
                        </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
      </div>
    </main>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
