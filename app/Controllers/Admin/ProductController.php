<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Product',
        ];

        return view('admin/product/index', $data);
    }

    public function kategori()
    {
        $data = [
            'title' => 'Daftar Kategori Product',
            'daftar_kategori' => $this->KategoriModel->findAll(),
        ];

        return view('admin/product/kategori', $data);
    }
}
