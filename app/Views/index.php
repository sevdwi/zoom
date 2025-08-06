<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= base_url('assets/business.png') ?>" type="image/png" sizes="16x16">
  <title><?= $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- DataTables Bootstrap 5 CSS -->
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">


  

  <style>
    body {
      background-image: url('<?= base_url('assets/bgd.webp') ?>');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      font-family: 'Segoe UI', sans-serif;
    }

    .card-glass {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(5px);
      border-radius: 15px;
      padding: 2rem;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .table thead {
      background-color: #0d6efd;
      color: white;
    }

    .table-hover tbody tr:hover {
      background-color: #f1f1f1;
    }

    .expired {
      background-color: #f8d7da !important;
      color: #842029 !important;
    }

    a {
      word-break: break-word;
    }
  </style>
</head>
<body>

<div class="container my-5">
  <div class="card-glass">
    <div class="text-center mb-4">
      <img src="<?= base_url('assets/business.png') ?>" alt="Zoom Icon" width="50" height="50" class="me-2">
      <h2 class="mt-2">Daftar Zoom Meeting Cilacap</h2>
    </div>

    <div class="text-end mb-3">
      <a href="<?= base_url('/login') ?>" class="btn btn-success">Login</a>
    </div>

    <div class="table-responsive">
    <table id="myTable" class="table table-bordered align-middle w-full table-auto border border-gray-300">
            <thead class="bg-blue-200">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Kegiatan</th>
                    <th class="border px-4 py-2">Pemohon</th>
                    <th class="border px-4 py-2">Tanggal</th>
                    <th class="border px-4 py-2">Jam</th>
                    <th class="border px-4 py-2">Link</th>
                    <th class="border px-4 py-2">Akun</th>
                    <th class="border px-4 py-2">Status</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($zoom as $row): ?>
                    <?php
                          $tanggalZoom = strtotime($row['tanggal'] . ' ' . $row['jam_mulai']); // Gabungkan tanggal dan jam
                          $sekarang = time();
                          $selisihDetik = $sekarang - $tanggalZoom;
                          $warna = ($selisihDetik > 86400) ? 'text-danger' : ''; // 86400 detik = 24 jam
                          $habis = ($selisihDetik > 86400) ? 'habis' : '';
                          $langsung = ($selisihDetik < 86400) ? 'berlangsung' : '';
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
                        <td class="border px-4 py-2 <?= $warna ?>">
                            <?= esc($row['tanggal']) ?>
                        </td>
                        <td class="border px-4 py-2 <?= $warna ?>">
                            <?= esc($row['jam_mulai']) ?>
                        </td>
                        <td class="border px-4 py-2">
                        <a href="<?= esc($row['link']) ?>"><?= esc($row['link']) ?></a>    
                        </td>
                        <td class="border px-4 py-2">
                            <?= esc($row['akun']) ?>   
                        </td>
                        <td class="border px-4 py-2">
                            <?= $habis ?> <?= $langsung ?> 
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>

</body>
</html>
