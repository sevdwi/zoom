<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
 <meta charset="UTF-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title>Protal Berita Codeigniter</title> 
 
 <!-- Bootstrap CSS --> 
 <!-- <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />  -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head> 
 
<body> 
 
<?= $this->include('layout/navbar') ?> 
<?= $this->include('layout/header') ?> 
<?= $this->renderSection('content') ?> 
<?= $this->include('layout/footer') ?>
 
 <!-- Jquery dan Bootsrap JS --> 
 <!-- <script src="<?= base_url('js/jquery.min.js') ?>"></script> 
 <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>  -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
 
</body> 
 
</html> 