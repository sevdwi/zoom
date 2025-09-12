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
                    <th class="border px-4 py-2">Surat</th>
                    <th class="border px-4 py-2">Tanggal</th>
                    <th class="border px-4 py-2">Jam</th>
                    <th class="border px-4 py-2">Link</th>
                    <th class="border px-4 py-2">Akun</th>
                    <th class="border px-4 py-2">Status</th>
                    <!-- <th class="border px-4 py-2">tes</th> -->

                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($zoom as $row): ?>
                    <?php
                          $tanggalZoom = strtotime($row['tanggal'] . ' ' . $row['jam_mulai']); // Gabungkan tanggal dan jam
                          $sekarang = time();
                          $pembetulanWaktu = $sekarang + 25200;
                          $selisihDetik = $pembetulanWaktu - $tanggalZoom;
                          $warna = ($selisihDetik > 86400) ? 'text-danger' : ''; // 86400 detik = 24 jam
                          $habis = ($selisihDetik > 86400) ? '<span class="badge text-bg-danger">Habis</span>' : '';
                          $langsung = ($selisihDetik < 86400) ? '<span class="badge text-bg-success">Tersedia</span>' : '';
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
                        <a href="<?= esc($row['surat']) ?>"><span class="badge text-bg-primary">Link Surat</span></a>    
                        </td>
                        <td class="border px-4 py-2 <?= $warna ?>">
                            <?= esc($row['tanggal']) ?>
                        </td>
                        <td class="border px-4 py-2 <?= $warna ?>">
                            <?= esc($row['jam_mulai']) ?>
                        </td>
                        <td class="border px-4 py-2">
                        <a href="<?= esc($row['link']) ?>"><span class="badge text-bg-primary">Link</span></a>    
                        </td>
                        <td class="border px-4 py-2">
                            <?= esc($row['akun']) ?>   
                        </td>
                        <td class="border px-4 py-2">
                            <?= $habis ?> <?= $langsung ?> 
                        </td>
                        <!-- <td class="border px-4 py-2">
                           <?php  
                              /*   
                                  <?= $habis ?> -- <?= date('d-m-Y H:i:s',$sekarang) ?> -- <?= date('d-m-Y H:i:s',$pembetulanWaktu) ?> --<?= date('d-m-Y H:i:s',$tanggalZoom) ?> -- <?= $pembetulanWaktu ?> -- <?= $tanggalZoom ?> -- <?= $selisihDetik ?>
                               */   
                            ?>     
                        </td> -->


                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
  </div>
</div>
<div class=" container text-center card-glass">
<h2 class="text-black">Statistik Jadwal Zoom per OPD</h2>

<!-- Canvas tempat chart akan digambar -->
<canvas id="myChart" width="400" height="200"></canvas>

<script>
    // Ambil data dari PHP → convert ke array JS
    const labels = <?= json_encode(array_column($chartData, 'pemohon')) ?>;
    const values = <?= json_encode(array_column($chartData, 'total')) ?>;

    const ctx = document.getElementById('myChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar', // tipe chart: 'bar', 'line', 'pie', 'doughnut', dll
        data: {
            labels: labels,
            datasets: [{
                label: 'Jumlah Jadwal Zoom',
                data: values,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)'
                ],
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { 
                    position: 'top',
                    labels: {
                        color: 'black' // ubah warna teks legend
                    }
                },
                title: {
                    display: true,
                    text: 'Jumlah Jadwal Zoom per OPD',
                    color: 'black',
                    font: {
                        size: 20,
                        weight: 'bold'
                    }
                }
                
            },
            scales: {
                x: {
                    ticks: { color: 'red',
                        font: { size: 20, weight: 'bold' } 
                    } // warna label sumbu X
                },
                y: {
                    ticks: { color: 'black', 
                        font: { size: 20, weight: 'bold' }
                    }, // warna label sumbu Y
                    beginAtZero: true
                }
            }  
        }
    });
</script>
</div>

<div class="container copyright text-center text-white mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Diskominfo Cilacap</strong> <span>All Rights Reserved</span></p>
</div> 
<?= $this->include('layout/footer') ?>

