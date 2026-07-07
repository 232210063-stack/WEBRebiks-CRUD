<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MerchandiseModel;

class Merchandise extends BaseController
{
    protected $merchandiseModel;

    public function __construct()
    {
        $this->merchandiseModel = new MerchandiseModel();
    }

    public function index()
    {
        $data = [
            'merchandise' => $this->merchandiseModel->findAll(), //
            'tipe' => 'merchandise' 
        ];

        return view('admin/dashboard', $data); // kembali ke dashboard.php yang menyesuaikan tampilan
    }
    
    // Form tambah merchandise
    public function create()
    {
        $data['title'] = 'Tambah Merchandise';
        return view('admin/merchandise/create', $data);
    }

    // Simpan merchandise baru
    public function store()
    {
        $file = $this->request->getFile('gambar');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads', $newName);;
        }

        $model = new MerchandiseModel();
        $model->insert([
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'gambar' => $newName ?? null
        ]);
        return redirect()->to('/admin/merchandise')->with('success', 'Data berhasil ditambahkan');
    }

    // Form edit
    public function edit($id)
    {
        $data['title'] = 'Edit Merchandise';
        $data['item'] = $this->merchandiseModel->find($id);

        return view('admin/merchandise/edit', $data);
    }

    // Update data
    public function update($id)
    {
    $data = [
        'id' => $id,
        'nama' => $this->request->getPost('nama'),
        'deskripsi' => $this->request->getPost('deskripsi'),
        'harga' => $this->request->getPost('harga'),
        'stok' => $this->request->getPost('stok'),
    ];

    // Proses upload gambar jika ada
    $fileGambar = $this->request->getFile('gambar');
    if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
        $namaBaru = $fileGambar->getRandomName();
        $fileGambar->move('uploads', $namaBaru);
        $data['gambar'] = $namaBaru;
    }

    $this->merchandiseModel->save($data);
        return redirect()->to('/admin/merchandise')->with('success', 'Data berhasil diupdate');
    }

    // Hapus
    public function delete($id)
    {
    // Ambil data merchandise terlebih dahulu untuk cek file gambar
    $item = $this->merchandiseModel->find($id);

    // Hapus gambar dari folder jika ada
    if (!empty($item['gambar'])) {
        $path = 'uploads/' . $item['gambar'];
        if (file_exists($path)) {
            unlink($path); // hapus file
        }
    }

    // Hapus data dari database
    $this->merchandiseModel->delete($id);
    return redirect()->to('/admin/merchandise')->with('success', 'Data dan gambar berhasil dihapus');
}

public function dashboard()
{
    $model = new \App\Models\MerchandiseModel();
    $data['tipe'] = 'merchandise'; // penanda ini data merchandise
    $data['merchandise'] = $model->findAll(); // ambil semua data merchandise
    return view('admin/dashboard', $data); // tampilkan dashboard umum
}
}