<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= base_url('assets/business.png') ?>" type="image/png" sizes="16x16">
  <title> Jadwal Zoom Diskominfo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }
  </style>
</head>
<body>

      <h2 class="mb-4">Daftar Zoom Meeting</h2>
      <table>
            <thead class="bg-blue-200">
                <tr>
                    <th>No</th>
                    <th>Kegiatan</th>
                    <th>Pemohon</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Link</th>
                    <th>Akun</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($zoom as $row): ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= esc($row['kegiatan']) ?>
                        </td>
                        <td>
                            <?= esc($row['pemohon']) ?>
                        </td>
                        <td>
                            <?= esc($row['tanggal']) ?>
                        </td>
                        <td>
                            <?= esc($row['jam_mulai']) ?>
                        </td>
                        <td>
                        <a href="<?= esc($row['link']) ?>">klik disini</a>    
                        </td>
                        <td>
                            <?= esc($row['akun']) ?>   
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
