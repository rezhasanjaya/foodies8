<link href="../assets/css/style.css" rel="stylesheet">
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3><b>
                    <center>Tambah Tips</center>
                </b></h3>
            <hr>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="id_tips" value="<?php echo $tips['id_tips']; ?>">
                    <div class="form-group mt-3">
                        <label for="id_tips">Id Tips</label>
                        <input type="text" name="id_tips" id="id_tips" class="form-control" value="<?= $tips['id_tips'] ?>" disabled>
                        <div class="form-text text-danger"><?= form_error('id_tips'); ?></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="nama_tips">Nama Tips</label>
                        <input type="text" name="nama_tips" id="nama_tips" class="form-control" value="<?= $tips['nama_tips'] ?>">
                        <div class="form-text text-danger"><?= form_error('nama_tips'); ?></div>
                    </div>

                    <div>
                        <div class="form-group mt-3 ">
                            <label for="id_kategori_tips">Kategori</label>
                            <select class="form-select" name="id_kategori_tips" id="id_kategori_tips">
                                <?php foreach ($datakatg as $dtktg) : ?>
                                    <?php if ($dtktg->id_kategori == $resep['id_kategori']) : ?>
                                        <option value="<?= $dtktg->id_kategori_tips; ?>" selected><?= $dtktg->nama_kategori_tips; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $dtktg->id_kategori_tips ?>"><?= $dtktg->nama_kategori_tips ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="sumber">Sumber Tips</label>
                        <input type="text" name="sumber" id="sumber" class="form-control" value="<?= $tips['sumber'] ?>">
                        <div class="form-text text-danger"><?= form_error('sumber'); ?></div>
                    </div>


                    <div>
                        <div class="form-group mt-3 ">
                            <label for="media">Media</label>
                            <select class="form-select" name="media" id="media">
                                <option value="ig.png" <?php if ($tips['media'] == 'ig.png') echo 'selected'; ?>>Instagram</option>
                                <option value="fb.png" <?php if ($tips['media'] == 'fb.png') echo 'selected'; ?>>Facebook</option>
                                <option value="yt.png" <?php if ($tips['media'] == 'yt.png') echo 'selected'; ?>>Youtube</option>
                                <option value="tikt.png" <?php if ($tips['media'] == 'tikt.png') echo 'selected'; ?>>Tiktok</option>
                                <option value="email.png" <?php if ($tips['media'] == 'email.png') echo 'selected'; ?>>Email</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group mt-3">
                        <label for="penulis_tips">Penulis Tips</label>
                        <input type="text" name="penulis_tips" id="penulis_tips" class="form-control" value="<?= $tips['penulis_tips'] ?>">
                        <div class="form-text text-danger"><?= form_error('penulis_tips'); ?></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="langkah"><b>Tuliskan Langkah Tips</b></label>
                        <div class="form-floating">
                            <textarea class="form-control" name="langkah" id="langkah" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"><?= $tips['langkah'] ?></textarea>
                            <label for="floatingTextarea2">Langkah Tips</label>
                            <div class="form-text text-danger"><?= form_error('langkah'); ?></div>
                        </div>
                    </div>

                    <br>
                    <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url() ?>kelola_tips" class="btn btn-md btn-dark float-end">Kembali</a>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>