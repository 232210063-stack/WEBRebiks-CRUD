<?php

namespace App\Controllers;

use App\Models\TiketModel;
use App\Models\MerchandiseModel;
use App\Models\PembelianModel;

class Home extends BaseController
{
    protected $tiketModel;
    protected $merchandiseModel;
    protected $pembelianModel;

    public function __construct()
    {
        $this->tiketModel = new TiketModel();
        $this->merchandiseModel = new MerchandiseModel();
        $this->pembelianModel = new PembelianModel();
    }

    // Halaman landing kosong (HOME NAV)
    public function index()
    {
        return view('landing/index');
    }

    // Halaman daftar MERCHANDISE
    public function merchandise()
    {
        $data['merchandise'] = $this->merchandiseModel->findAll();
        return view('landing/merchandise', $data);
    }

    // Detail MERCHANDISE
    public function detailMerchandise($id)
    {
        $item = $this->merchandiseModel->find($id);
        if (!$item) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Produk tidak ditemukan.');
        }
        return view('landing/merchandise_detail', ['merchandise' => $item]);
    }

    // Form Pembelian MERCHANDISE
    public function formPembelian($id)
    {
        $item = $this->merchandiseModel->find($id);
        if (!$item) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view('landing/form_pembelian', ['item' => $item]);
    }

    // Simpan Pembelian MERCHANDISE
public function simpanPembelian()
{
    $id = $this->request->getPost('item_id'); // ini ID merchandise yang dibeli
    $jumlah = (int) $this->request->getPost('jumlah');
    $item = $this->merchandiseModel->find($id);

    

    // Validasi stok
    if (!$item || $jumlah <= 0 || $item['stok'] < $jumlah) {
        session()->setFlashdata('stok_habis', 'Stok tidak mencukupi.');
        return redirect()->to('/landing/merchandise');
    }

    // Kurangi stok
    $this->merchandiseModel->update($id, [
        'stok' => $item['stok'] - $jumlah
    ]);

    // Simpan pembelian
    $this->pembelianModel->insert([
        'item_id'    => $id,
        'nama'       => $this->request->getPost('nama'),
        'email'      => $this->request->getPost('email'),
        'alamat'     => $this->request->getPost('alamat'),
        'ukuran'     => $this->request->getPost('ukuran'),
        'jenis'      => 'merchandise',
        'jumlah'     => $jumlah,
        'status'     => 'Sudah Dibayar',
        'created_at' => date('Y-m-d H:i:s')
    ]);

    return redirect()->to('/landing/konfirmasi');
}



    // Halaman Konfirmasi
    public function konfirmasiPembelian()
    {
        return view('landing/konfirmasi');
    }

    // =====================================
    // BAGIAN TIKET USER SIDE
    // =====================================

    // Halaman daftar tiket
    public function tiket()
    {
        $data['tiket'] = $this->tiketModel->findAll();
        return view('landing/tiket', $data);
    }

    // Form beli tiket
    public function formBeliTiket($id)
    {
        $tiket = $this->tiketModel->find($id);
        if (!$tiket) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view('landing/form_beli_tiket', ['tiket' => $tiket]);
    }

    // Simpan pembelian tiket
public function simpanTiket()
{
    $id = $this->request->getPost('item_id');// ID tiket
    $tiket = $this->tiketModel->find($id);

    // Cek stok
    if (!$tiket || $tiket['stok'] <= 0) {
        echo "<script>alert('Tiket sudah habis (Sold Out).');window.history.back();</script>";
        return;
    }

    // Simpan pembelian
    $this->pembelianModel->insert([
        'item_id'    => $id,
        'nama'       => $this->request->getPost('nama'),
        'email'      => $this->request->getPost('email'),
        'alamat'     => $this->request->getPost('alamat'),
        'ukuran'     => null,
        'jenis'      => 'tiket',
        'status'     => 'Sudah Dibayar',
        'created_at' => date('Y-m-d H:i:s')
    ]);

    // Kurangi stok
    $this->tiketModel->update($id, [
        'stok' => $tiket['stok'] - 1
    ]);

    return redirect()->to('/landing/konfirmasi-tiket');
}


    public function konfirmasiPembelianTiket()
{
    return view('landing/konfirmasi_tiket');
}

}
