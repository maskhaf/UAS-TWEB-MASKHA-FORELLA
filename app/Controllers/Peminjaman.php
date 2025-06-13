<?php
namespace App\Controllers;

use App\Models\PeminjamanModel;
use App\Models\BukuModel;
use App\Models\AnggotaModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class Peminjaman extends BaseController {
    public function index() {
        $model = new PeminjamanModel();
        $data['title'] = 'Data Peminjaman';
        $data['peminjaman'] = $model->getAll();
        return view('peminjaman/index', $data);
    }

    public function create() {
        $bukuModel = new BukuModel();
        $anggotaModel = new AnggotaModel();

        if ($this->request->getMethod() === 'post') {
            $buku_id = $this->request->getPost('buku_id');
            $buku = $bukuModel->find($buku_id);

            if ($buku['stok'] <= 0) {
                return redirect()->back()->with('error', 'Stok buku habis!');
            }

            $bukuModel->update($buku_id, ['stok' => $buku['stok'] - 1]);

            $model = new PeminjamanModel();
            $model->save($this->request->getPost());

            session()->setFlashdata('success', 'Data peminjaman berhasil disimpan.');
            return redirect()->to('/peminjaman');
        }

        $data['title'] = 'Tambah Peminjaman';
        $data['buku'] = $bukuModel->findAll();
        $data['anggota'] = $anggotaModel->findAll();
        return view('peminjaman/create', $data);
    }

    public function kembali($id) {
        $model = new PeminjamanModel();
        $bukuModel = new BukuModel();

        $pinjam = $model->find($id);
        if ($pinjam && $pinjam['status'] === 'dipinjam') {
            $model->update($id, ['status' => 'kembali']);
            $buku = $bukuModel->find($pinjam['buku_id']);
            $bukuModel->update($buku['id'], ['stok' => $buku['stok'] + 1]);
            session()->setFlashdata('success', 'Buku berhasil dikembalikan.');
        }

        return redirect()->to('/peminjaman');
    }

    public function cetak() {
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->getAll();
        $html = view('peminjaman/cetak', $data);

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('laporan_peminjaman.pdf', ['Attachment' => false]);
    }
}
