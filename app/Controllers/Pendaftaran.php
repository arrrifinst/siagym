<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Pendaftaran extends BaseController
{
    protected $memberModel;
    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function save()
    {
        $this->memberModel->save([
            'nama' => $this->request->getVar('nama'),
            'telp' => $this->request->getVar('telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'gender' => $this->request->getVar('gender'),
            'paket' => $this->request->getVar('paket')
        ]);
        session()->setFlashdata('note', 'Pendaftaran Anda telah terkirim.');
        return redirect()->to('/home/index');
    }
}
