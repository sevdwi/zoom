<?php
namespace App\Models;

use CodeIgniter\Model;

class ZoomModel extends Model
{
    protected $table = 'jadwalzoom_tb';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nomor','kegiatan', 'pemohon','tanggal', 'jam_mulai', 'link','akun','created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}