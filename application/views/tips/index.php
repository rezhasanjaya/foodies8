<link href="../assets/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="judul mt-3">
                <h2><b>Daftar Tips Memasak</b></h2>
                <br>
            </div>
            <div class="row">
                <div class="col">
                    <div class="search col-md-5">
                        <a href="<?= base_url() ?>kelola_tips/tambahtips"><button class="btn btn-warning btn-md-2"><b>Tambah Tips</b></button></a>
                    </div>
                </div>
                <div class="col">
                    <div class="search col-md-11 float-end">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Tips" name="keyword">
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
                            Tips <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (empty($tips)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Tips Tidak Ditemukan
                </div>
            <?php endif ?>
            <table class="table table-striped text-center mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Tips</th>
                        <th scope="col">ID Katips</th>
                        <th scope="col">Sumber</th>
                        <th scope="col">Penulis Tips</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($tips as $tips) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $tips['id_tips'] ?></td>
                            <td><?= $tips['nama_tips'] ?></td>
                            <td><?= $tips['id_kategori_tips'] ?></td>
                            <td><?= $tips['sumber'] ?></td>
                            <td><?= $tips['penulis_tips'] ?></td>
                            <td>
                                <a href="<?= base_url(); ?>kelola_tips/detail/<?= $tips['id_tips']; ?>"><span class="badge bg-success text-light">Detail</span></a>
                                <a href="<?= base_url(); ?>kelola_tips/edit/<?= $tips['id_tips']; ?>"><span class="badge bg-primary text-light">Edit</span></a>
                                <a href="<?= base_url(); ?>kelola_tips/hapus/<?= $tips['id_tips']; ?>" onclick="return confirm('Yakin Ingin Menghapus?');"><span class="badge bg-danger text-light">Hapus</span></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>