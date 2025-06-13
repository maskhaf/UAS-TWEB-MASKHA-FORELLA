<?php
namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $allowedFields = ['buku_id', 'anggota_id', 'tgl_pinjam', 'tgl_kembali', 'status'];

    public function getAll()
    {
        return $this->select('peminjaman.*, buku.judul AS judul_buku, anggota.nama AS anggota_nama')
                    ->join('buku', 'buku.id = peminjaman.buku_id')
                    ->join('anggota', 'anggota.id = peminjaman.anggota_id')
                    ->findAll();
    }
}
