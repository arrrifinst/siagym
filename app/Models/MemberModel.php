<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'member';
    protected $useTimestamps = true;

    protected $allowedFields = ['nama', 'telp', 'email', 'alamat', 'pekerjaan', 'gender', 'paket', 'tanggal', 'status'];


    public function getMember($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
