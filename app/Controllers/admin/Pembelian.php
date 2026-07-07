<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PembelianModel;
use App\Models\TiketModel;
use App\Models\MerchandiseModel;

class Pembelian extends BaseController
{
    public function index()
    {
        $pembelianModel = new PembelianModel();
        $tiketModel = new TiketModel();
        $merchandiseModel = new MerchandiseModel();

        $pembelian = $pembelianModel->findAll();

        foreach ($pembelian as &$row) {
            if ($row['jenis'] === 'tiket') {
                $tiket = $tiketModel->find($row['item_id']);
                $row['nama_item'] = $tiket ? $tiket['nama_laga'] : 'Tiket Tidak Ditemukan';
            } elseif ($row['jenis'] === 'merchandise') {
                $mch = $merchandiseModel->find($row['item_id']);
                $row['nama_item'] = $mch ? $mch['nama'] : 'Produk Tidak Ditemukan';
            } else {
                $row['nama_item'] = '-';
            }
        }

        return view('admin/pembelian', ['pembelian' => $pembelian]);
    }
}
