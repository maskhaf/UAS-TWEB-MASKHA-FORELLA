<?php
namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\AnggotaModel;
use App\Models\PeminjamanModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $bukuModel = new BukuModel();
        $anggotaModel = new AnggotaModel();
        $peminjamanModel = new PeminjamanModel();

        $data = [
            'title'   => 'Dashboard',
            'buku'    => $bukuModel->countAllResults(),
            'anggota' => $anggotaModel->countAllResults(),
            'pinjam'  => $peminjamanModel->where('status', 'dipinjam')->countAllResults(),
            'kembali' => $peminjamanModel->where('status', 'kembali')->countAllResults(),
        ];

        return view('dashboard/index', $data);
    }
}
