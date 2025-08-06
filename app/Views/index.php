<?= $this->include('layout/header') ?> 
 
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

<?= $this->include('layout/footer') ?>

