<?php

namespace App\Controllers;

use App\Models\InboxModel;

class Inbox extends BaseController
{
    protected $inboxModel;
    public function __construct()
    {
        $this->inboxModel = new InboxModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Inbox',
            'inbox' => $this->inboxModel->getInbox()
        ];
        return view('message/index', $data);
    }

    public function delete($id)
    {
        $this->inboxModel->delete($id);
        session()->setFlashdata('Message', 'Data berhasil dihapus');
        return redirect()->to('/inbox/index');
    }
}
