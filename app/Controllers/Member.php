<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Member extends BaseController
{
    protected $memberModel;
    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function index()
    {
        // $member = $this->memberModel->findAll();

        $data = [
            'title' => 'Membership',
            'member' => $this->memberModel->getMember()
        ];
        return view('membership/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Membership',
            'member' => $this->memberModel->getMember($id)
        ];
        return view('membership/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Formulir Member',
            'validation' => \Config\Services::validation()
        ];
        return view('membership/create', $data);
    }

    public function save()
    {
        // VALIDASI INPUT
        if (!$this->validate([
            'nama' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'gender' => 'required',
            'paket' => 'required',
            'tanggal' => 'required',
        ])) {
            return redirect()->to('/member/create')->withInput();
        }

        $this->memberModel->save([
            'nama' => $this->request->getVar('nama'),
            'telp' => $this->request->getVar('telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'gender' => $this->request->getVar('gender'),
            'paket' => $this->request->getVar('paket'),
            'tanggal' => $this->request->getVar('tanggal')
        ]);

        session()->setFlashdata('Message', 'Data baru ditambahkan');

        return redirect()->to('/member/index');
    }


    public function delete($id)
    {
        $this->memberModel->delete($id);
        session()->setFlashdata('Message', 'Data berhasil dihapus');
        return redirect()->to('/member/index');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data',
            'validation' => \Config\Services::validation(),
            'member' => $this->memberModel->getMember($id)
        ];
        return view('membership/edit', $data);
    }

    public function update($id)
    {
        $this->memberModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'telp' => $this->request->getVar('telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'gender' => $this->request->getVar('gender'),
            'paket' => $this->request->getVar('paket'),
            'tanggal' => $this->request->getVar('tanggal'),
            'status' => $this->request->getVar('status')
        ]);

        session()->setFlashdata('Message', 'Data berhasil diperbarui');

        return redirect()->to('/member/index');
    }
}
