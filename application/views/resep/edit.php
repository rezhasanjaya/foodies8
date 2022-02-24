<link href="../assets/css/style.css" rel="stylesheet">
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3><b>
                    <center>Tambah Resep</center>
                </b></h3>
            <hr>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="id_resep" value="<?php echo $resep['id_resep']; ?>">
                    <div class="form-group mt-3">
                        <label for="id_resep">ID Resep</label>
                        <input type="text" name="id_resep" id="id_resep" class="form-control" value="<?= $resep['id_resep'] ?>" disabled>
                        <div class="form-text text-danger"><?= form_error('id_kategori'); ?></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="judul_resep">Nama Kategori</label>
                        <input type="text" name="judul_resep" id="judul_resep" class="form-control" value="<?= $resep['judul_resep'] ?>">
                        <div class="form-text text-danger"><?= form_error('nama_kategori'); ?></div>
                    </div>


                    <div class="form-group mt-3">
                        <label for="penulis_artikel">Penulis Artikel</label>
                        <input type="text" name="penulis_artikel" id="penulis_artikel" placeholder="" class="form-control" value="<?= $resep['penulis_artikel'] ?>">

                    </div>

                    <div>
                        <div class="form-group mt-3 ">
                            <label for="jenis">Jenis</label>
                            <select class="form-select" name="jenis" id="jenis" value="<?= $resep['jenis'] ?>">
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group mt-3 ">
                            <label for="id_kategori">Kategori</label>
                            <select class="form-select" name="id_kategori" id="id_kategori">
                                <?php foreach ($datakatg as $dtktg) : ?>
                                    <?php if ($dtktg->id_kategori == $resep['id_kategori']) : ?>
                                        <option value="<?= $dtktg->id_kategori; ?>" selected><?= $dtktg->nama_kategori; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $dtktg->id_kategori ?>"><?= $dtktg->nama_kategori ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="sumber">Sumber</label>
                        <input type="text" name="sumber" id="sumber" placeholder="" class="form-control" value="<?= $resep['sumber'] ?>">
                        <div class="form-text text-danger"><?= form_error('sumber'); ?></div>
                    </div>

                    <div>
                        <div class="form-group mt-3 ">
                            <label for="media">Media</label>
                            <select class="form-select" name="media" id="media">
                                <option value="ig.png" <?php if ($resep['media'] == 'ig.png') echo 'selected'; ?>>Instagram</option>
                                <option value="fb.png" <?php if ($resep['media'] == 'fb.png') echo 'selected'; ?>>Facebook</option>
                                <option value="yt.png" <?php if ($resep['media'] == 'yt.png') echo 'selected'; ?>>Youtube</option>
                                <option value="tikt.png" <?php if ($resep['media'] == 'tikt.png') echo 'selected'; ?>>Tiktok</option>
                                <option value="email.png" <?php if ($resep['media'] == 'email.png') echo 'selected'; ?>>Email</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group mt-3">
                        <label for="isi_resep"><b>Tuliskan Resep</b></label>
                        <div class="form-floating">
                            <textarea class="form-control" name="isi_resep" id="isi_resep" value="<?= $resep['isi_resep'] ?>" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"><?= $resep['isi_resep'] ?></textarea>
                            <label for="floatingTextarea2">Resep</label>
                            <div class="form-text text-danger"><?= form_error('isi_resep'); ?></div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="langkah"><b>Tuliskan Langkah Pembuatan Resep</b></label>
                        <div class="form-floating">
                            <textarea class="form-control" name="langkah" id="langkah" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px"><?= $resep['langkah'] ?></textarea>
                            <label for="floatingTextarea2">Langkah - Langkah</label>
                            <div class="form-text text-danger"><?= form_error('langkah'); ?></div>
                        </div>
                    </div>

                    <br>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url() ?>resep" class="btn btn-md btn-dark float-end">Kembali</a>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>