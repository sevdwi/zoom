<?php
namespace App\Models;

use CodeIgniter\Model;

class OpdModel extends Model
{
    protected $table = 'opd_tb';          // nama tabel di database
    protected $primaryKey = 'id_opd';  // primary key
    protected $allowedFields = ['nama_opd']; // kolom yang boleh diakses
}