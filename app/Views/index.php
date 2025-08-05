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

<div class="container-fluid ms-5">
  <div class="row">
    <!-- Content -->
    <main class="col-md-10 content">
      <div class="text-center  align-items-center mb-4">
        <img src="<?= base_url('assets/business.png') ?>" alt="Zoom Icon" width="40" height="40" class="me-2">
        <h2>Daftar Zoom Meeting Cilacap</h2>
      </div>
      <div class="mb-4">
      <a href="<?= base_url('/login') ?>"
          class="btn btn-success">login</a> <br>
      </div>
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
