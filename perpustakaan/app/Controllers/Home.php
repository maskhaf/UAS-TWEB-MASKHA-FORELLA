<?php
namespace App\Controllers;

use App\Models\BukuModel;

class Home extends BaseController {
     public function index()
    {
        $bukuModel = new BukuModel();
        $data['buku'] = $bukuModel->findAll();
        return view('home/index', $data);
    }
}
