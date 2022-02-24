<link href="../assets/css/style.css" rel="stylesheet">
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3><b>
                    <center>Tambah Tips</center>
                </b></h3>
            <hr>
            <div class="card-body">
                <form method="post" action="<?= base_url('kelola_tips/tambahtips') ?>" enctype="multipart/form-data">

                    <div class="form-group mt-3">
                        <label for="id_tips">Id Tips</label>
                        <input type="text" name="id_tips" id="id_tips" class="form-control">
                        <div class="form-text text-danger"><?= form_error('id_tips'); ?></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="nama_tips">Nama Tips</label>
                        <input type="text" name="nama_tips" id="nama_tips" class="form-control">
                        <div class="form-text text-danger"><?= form_error('nama_tips'); ?></div>
                    </div>

                    <div>
                        <div class="form-group mt-3 ">
                            <label for="id_kategori_tips">Kategori</label>
                            <select class="form-select" name="id_kategori_tips" id="id_kategori_tips">
                                <option selected>Pilih Kategori</option>
                                <?php foreach ($datakatg as $dtktg) : ?>
                                    <option value="<?= $dtktg->id_kategori_tips ?>"><?= $dtktg->nama_kategori_tips ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="sumber">Sumber Tips</label>
                        <input type="text" name="sumber" id="sumber" class="form-control">
                        <div class="form-text text-danger"><?= form_error('sumber'); ?></div>
                    </div>

                    <div>
                        <div class="form-group mt-3 ">
                            <label for="media">Media</label>
                            <select class="form-select" name="media" id="media">
                                <option selected>Pilih Media</option>
                                <option value="ig.png">Instagram</option>
                                <option value="fb.png">Facebook</option>
                                <option value="yt.png">Youtube</option>
                                <option value="tikt.png">Tiktok</option>
                                <option value="email.png">Email</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="penulis_tips">Penulis Tips</label>
                        <input type="text" name="penulis_tips" id="penulis_tips" class="form-control">
                        <div class="form-text text-danger"><?= form_error('penulis_tips'); ?></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="langkah"><b>Tuliskan Langkah Tips</b></label>
                        <div class="form-floating">
                            <textarea class="form-control" name="langkah" id="langkah" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>
                            <label for="floatingTextarea2">Langkah Tips</label>
                            <div class="form-text text-danger"><?= form_error('langkah'); ?></div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <div class="mb-3">
                            <label class="form-label" for="imgvid">Gambar jpeg/png (Max 2MB)</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>

                    <br>
                    <button type="submit" name="tambah" value="upload" class="btn btn-primary">Tambah</button>
                    <button type="reset" name="reset" class="btn btn-secondary">Reset</button>
                    <a href="<?php echo base_url() ?>kelola_tips" class="btn btn-md btn-dark float-end">Kembali</a>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>