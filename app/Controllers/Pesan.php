<?php

namespace App\Controllers;

use App\Models\InboxModel;

class Pesan extends BaseController
{
    protected $inboxModel;
    public function __construct()
    {
        $this->inboxModel = new InboxModel();
    }

    public function save()
    {
        $this->inboxModel->save([
            'nama' => $this->request->getVar('nama'),
            'telepon' => $this->request->getVar('telepon'),
            'email' => $this->request->getVar('email'),
            'pesan' => $this->request->getVar('pesan')
        ]);
        session()->setFlashdata('notif', 'You send message for Armory');
        return redirect()->to('/home/index#contact');
    }
}
