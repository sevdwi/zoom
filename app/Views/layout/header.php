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
      background-color: #f4f6f9;
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

    #myTable{
        color: white;
    }
  </style>
</head>