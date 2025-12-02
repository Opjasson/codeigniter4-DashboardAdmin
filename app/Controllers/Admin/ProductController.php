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

    public function store()
    {
        // ambil slug
        $slug = url_title($this->request->getPost('nama_kategori'), '-', TRUE);

        // simpan data ke database
        $data = [
            'nama_kategori' => esc($this->request->getPost('nama_kategori')),
            'slug_kategori' => $slug
        ];

        $this->KategoriModel->insert($data);

        return redirect()->back()->with('success', 'Data Kategori Berhasil Ditambahkan!');
    }
}
