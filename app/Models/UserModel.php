<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user_tb';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','username', 'password'];
    public $timestamps = false;
}