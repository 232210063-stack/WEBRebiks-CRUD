<?php

namespace App\Models;

use CodeIgniter\Model;

class MerchandiseModel extends Model
{
    protected $table = 'merchandise';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'deskripsi', 'harga', 'stok', 'gambar'];

}
