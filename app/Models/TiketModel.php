<?php

namespace App\Models;

use CodeIgniter\Model;

class TiketModel extends Model
{
    protected $table = 'tiket';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_laga', 'tanggal', 'lokasi', 'harga', 'stok'];
}
