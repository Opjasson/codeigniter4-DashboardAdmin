<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Kategori Produk
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Tanggal Input</th>
                                <th>Fungsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach($daftar_kategori as $kategori) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $kategori->nama_kategori ?></td>
                                <td><?= $kategori->tanggal_input ?></td>
                                <td width="15%">
                                    <a href="" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Ubah</a>

                                    <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?= $this->endSection() ?>