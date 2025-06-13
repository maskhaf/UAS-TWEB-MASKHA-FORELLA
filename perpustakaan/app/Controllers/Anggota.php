<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class Anggota extends BaseController
{
    public function index()
    {
        $model = new AnggotaModel();
        $data['title'] = 'Data Anggota';
        $data['anggota'] = $model->findAll();
        return view('anggota/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Anggota';

        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $rules = [
                'nama'   => 'required|min_length[3]',
                'alamat' => 'required',
                'no_hp'  => 'required|numeric|min_length[10]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $validation;
                return view('anggota/create', $data);
            }

            $model = new AnggotaModel();
            $model->save($this->request->getPost());
            session()->setFlashdata('success', 'Data anggota berhasil disimpan.');
            return redirect()->to('/anggota');
        }

        return view('anggota/create', $data);
    }

    public function edit($id)
    {
        $model = new AnggotaModel();
        $anggota = $model->find($id);
        $data = ['title' => 'Edit Anggota', 'anggota' => $anggota];

        return view('anggota/edit', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Edit Anggota';
        $model = new AnggotaModel();
        $anggota = $model->find($id);

        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $rules = [
                'nama'   => 'required|min_length[3]',
                'alamat' => 'required',
                'no_hp'  => 'required|numeric|min_length[10]',
            ];

            if (!$this->validate($rules)) {
                $data['anggota'] = $anggota;
                $data['validation'] = $validation;
                return view('anggota/edit', $data);
            }

            $model->update($id, $this->request->getPost());
            session()->setFlashdata('success', 'Data anggota berhasil diperbarui.');
            return redirect()->to('/anggota');
        }
    }

    public function delete($id)
    {
        $model = new AnggotaModel();
        $model->delete($id);
        session()->setFlashdata('success', 'Data anggota berhasil dihapus.');
        return redirect()->to('/anggota');
    }
}
