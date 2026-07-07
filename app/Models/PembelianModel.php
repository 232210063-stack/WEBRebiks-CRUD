<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianModel extends Model
{
    protected $table = 'pembelian';
    protected $allowedFields = ['item_id', 'nama', 'email', 'alamat', 'ukuran', 'jenis', 'status', 'jumlah', 'created_at'];



    protected $useTimestamps = false;
}
