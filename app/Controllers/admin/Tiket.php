<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TiketModel;

class Tiket extends BaseController
{
    protected $tiketModel;

    public function __construct()
    {
        $this->tiketModel = new TiketModel();
    }

    public function index()
    {
        $data = [
            'tiket' => $this->tiketModel->findAll(),
            'tipe' => 'tiket'
        ];

        return view('admin/dashboard', $data);
    }

    // ... fungsi lain create/edit/delete dsb


    public function create()
    {
        return view('/admin/tiket/create');
    }

    public function store()
    {
        $model = new TiketModel();
        $model->save([
            'nama_laga' => $this->request->getPost('nama_laga'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'lokasi'    => $this->request->getPost('lokasi'),
            'harga'     => $this->request->getPost('harga'),
            'stok'      => $this->request->getPost('stok'),
        ]);
        return redirect()->to('/admin/tiket');
    }

    public function edit($id)
    {
        $model = new TiketModel();
        $data['tiket'] = $model->find($id);
        return view('/admin/tiket/edit', $data);
    }

    public function update($id)
    {
        $model = new TiketModel();
        $model->update($id, [
            'nama_laga' => $this->request->getPost('nama_laga'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'lokasi'    => $this->request->getPost('lokasi'),
            'harga'     => $this->request->getPost('harga'),
            'stok'      => $this->request->getPost('stok'),
        ]);
        return redirect()->to('/admin/tiket');
    }

    public function delete($id)
    {
        $model = new TiketModel();
        $model->delete($id);
        return redirect()->to('/admin/tiket');
    }
public function dashboard()
{
    if (!session()->get('admin_logged_in')) {
        return redirect()->to('/login');
    }

    $model = new \App\Models\TiketModel();
    $data['tiket'] = $model->findAll();
    $data['tipe'] = 'tiket';
    return view('admin/dashboard', $data);
}
}
