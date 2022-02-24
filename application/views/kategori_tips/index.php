<link href="../assets/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="judul mt-3">
                <h2><b>Daftar Kategori</b></h2>
                <h5>(Tips)</h5>
                <br>
            </div>

            <div class="row">
                <div class="col">
                    <a href="<?= base_url() ?>katips/tambah"><button class="btn btn-warning btn-md-2"><b>Tambah Kategori</b></button></a>
                    <a href="<?= base_url() ?>kategori"><button class="btn btn-mt-1 btn-warning btn-md-2"><b>Kategori Resep</b></button></a>
                </div>
                <div class="col">
                    <div class="search col-md-11 float-end">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Kategori" name="keyword">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-warning" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data Kategori <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (empty($katips)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Kategori Tidak Ditemukan
                </div>
            <?php endif ?>
            <table class="table table-striped text-center mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                    foreach ($katips as $kts) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $kts['id_kategori_tips'] ?></td>
                            <td><?= $kts['nama_kategori_tips'] ?></td>

                            <td>
                                <a href="<?= base_url(); ?>katips/edit/<?= $kts['id_kategori_tips']; ?>"><span class="badge bg-primary text-light">Edit</span></a>
                                <a href="<?= base_url(); ?>katips/hapus/<?= $kts['id_kategori_tips']; ?>" onclick="return confirm('Yakin Ingin Menghapus?');"><span class="badge bg-danger text-light">Hapus</span></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>