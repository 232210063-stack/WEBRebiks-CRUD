<?php

namespace App\Controllers;

use App\Models\MerchandiseModel;

class Landing extends BaseController
{
    public function merchandiseDetail($id)
    {
        $model = new MerchandiseModel();
        $data['merchandise'] = $model->find($id);

        if (!$data['merchandise']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('landing/merchandise_detail', $data);
    }
}
