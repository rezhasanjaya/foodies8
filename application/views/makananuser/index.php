<link href="../assets/css/setail.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="makanan">
                <div class="container py-3">
                    <div class="container px-4 py-4" id="hanging-icons">
                        <div class="row">
                            <div class="col">
                                <h2 class="pb-2 "><b>Daftar Resep Makanan</b></h2>
                            </div>
                            <div class="col">
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
                        <hr>
                        <?php if (empty($resep)) : ?>
                            <div class="alert alert-danger" role="alert">
                                Resep Belum Tersedia </div>
                        <?php endif ?>
                        <div class="row g-4 row-cols-1 row-cols-lg-3">

                            <?php
                            $i = 1;
                            foreach ($resep as $rsp) :
                            ?>
                                <div class="col d-flex align-items-start">
                                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php echo base_url() . 'imgvid/' . $rsp['imgvid'] ?>" class="card-img-top" alt="gambar1">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $rsp['judul_resep'] ?></h5>
                                            <p class="card-text">
                                                <td><?= $rsp['penulis_artikel'] ?></td><br>
                                                <td><?= $rsp['sumber'] ?></td>
                                            </p>
                                            <a href="<?= base_url(); ?>makananuser/lihat/<?= $rsp['id_resep']; ?>"><button class="btn btn-outline-warning btn-md-2"><b>Lihat Resep</b></button></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>