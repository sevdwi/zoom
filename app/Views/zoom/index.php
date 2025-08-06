<?= $this->include('layout/header') ?> 
<body>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 sidebar">
    <div class="d-flex align-items-center">
    <a class="navbar-brand" href="<?= base_url('/zoom') ?>">
      <img src="<?= base_url('assets/business.png') ?>" alt="Zoom Icon" width="40" height="40" class="me-2">
      <span class="fw-bold text-white">Jadwal Zoom Diskominfo</span>
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
      <h2 class="mb-4 text-white">Daftar Zoom Meeting</h2>

      <div class="table-responsive mt-4">
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
                        <div>
                            <a href="<?= base_url('/zoom/edit/' . $row['id']) ?>"
                                class="btn btn-warning mb-2">Edit</a>
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

<?= $this->include('layout/footer') ?> 

