<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController {
    public function index()
    {
        $model = new BukuModel();
        $data['title'] = 'Data Buku';
        $data['buku'] = $model->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $model = new BukuModel();
            $model->save($this->request->getPost());
            session()->setFlashdata('success', 'Data buku berhasil disimpan.');
            return redirect()->to('/buku');
        }
        return view('buku/create', ['title' => 'Tambah Buku']);
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $buku = $model->find($id);
        return view('buku/edit', ['title' => 'Edit Buku', 'buku' => $buku]);
    }

    public function update($id)
    {
        if ($this->request->getMethod() === 'post') {
            $model = new BukuModel();
            $model->update($id, $this->request->getPost());
            session()->setFlashdata('success', 'Data buku berhasil diperbarui.');
            return redirect()->to('/buku');
        }
    }

    public function delete($id)
    {
    $model = new BukuModel();

    try {
        $model->delete($id);
        session()->setFlashdata('success', 'Data buku berhasil dihapus.');
    } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
        if (strpos($e->getMessage(), 'foreign key constraint fails') !== false) {
            session()->setFlashdata('error', 'Data buku tidak dapat dihapus karena sedang digunakan pada tabel peminjaman.');
        } else {
            session()->setFlashdata('error', 'Terjadi kesalahan saat menghapus data buku.');
        }
    }

    return redirect()->to('/buku');
    }
}
