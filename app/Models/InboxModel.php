<?php

namespace App\Models;

use CodeIgniter\Model;

class InboxModel extends Model
{
    protected $table = 'inbox';
    protected $useTimestamps = true;

    protected $allowedFields = ['nama', 'telepon', 'email', 'pesan'];


    public function getInbox($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
