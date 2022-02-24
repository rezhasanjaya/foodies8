<div class="container">
    <div class="row mt-3">
        <div class="col-md-12 offset-md-0">
            <div class="judul mt-3">
                <h2><b>Daftar Resep</b></h2>
                <br>
            </div>

            <div class="row">
                <div class="col">
                    <div class="search col-md-5">
                        <a href="<?= base_url() ?>resep/tulisresep"><button class="btn btn-warning btn-md-2"><b>Tulis Resep</b></button></a>
                    </div>
                </div>
                <div class="col">
                    <div class="search col-md-11 float-end">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Resep" name="keyword">
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
                            Resep <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (empty($resep)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Resep Tidak Ditemukan
                </div>
            <?php endif ?>
            <table class="table table-striped text-center mt-3">
                <thead>
                    <tr>

                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Judul Resep</th>
                        <th scope="col">Penulis Artikel</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">ID Kategori</th>
                        <th scope="col">Sumber</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                    foreach ($resep as $rsp) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $rsp['id_resep'] ?></td>
                            <td><?= $rsp['judul_resep'] ?></td>
                            <td><?= $rsp['penulis_artikel'] ?></td>
                            <td><?= $rsp['jenis'] ?></td>
                            <td><?= $rsp['id_kategori'] ?></td>
                            <td><?= $rsp['sumber'] ?></td>
                            <td>
                                <a href="<?= base_url(); ?>resep/detail/<?= $rsp['id_resep']; ?>"><span class="badge bg-success text-light">Detail</span></a>
                                <a href="<?= base_url(); ?>resep/edit/<?= $rsp['id_resep']; ?>"><span class="badge bg-primary text-light">Edit</span></a>
                                <a href="<?= base_url(); ?>resep/hapus/<?= $rsp['id_resep']; ?>" onclick="return confirm('Yakin Ingin Menghapus?');"><span class="badge bg-danger text-light">Hapus</span></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>