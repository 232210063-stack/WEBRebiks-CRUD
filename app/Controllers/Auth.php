<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }

    public function doLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adminModel = new AdminModel();
        $admin = $adminModel->where('username', $username)->first();

        if ($admin && $password === $admin['password']) {
            session()->set('admin_logged_in', true);
            return redirect()->to('/admin');
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
public function dashboard()
{
    if (!session()->get('admin_logged_in')) {
        return redirect()->to('/login');
    }

    // Ambil data merchandise dari model
    $merchandiseModel = new \App\Models\MerchandiseModel();
    $data['merchandise'] = $merchandiseModel->findAll();

    return view('admin/dashboard', $data);
}
}
// app/Controllers/Auth.php