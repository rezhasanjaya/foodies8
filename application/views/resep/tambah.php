<link href="../assets/css/style.css" rel="stylesheet">
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3><b>
                    <center>Tambah Resep</center>
                </b></h3>
            <hr>
            <div class="card-body">
                <form method="post" action="<?= base_url('resep/tulisresep') ?>" enctype="multipart/form-data">

                    <div class="form-group mt-3">
                        <label for="id_resep">ID Resep</label>
                        <input type="text" name="id_resep" id="id_resep" class="form-control">
                        <div class="form-text text-danger"><?= form_error('id_kategori'); ?></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="judul_resep">Judul Resep</label>
                        <input type="text" name="judul_resep" id="judul_resep" class="form-control">
                        <div class="form-text text-danger"><?= form_error('nama_kategori'); ?></div>
                    </div>


                    <div class="form-group mt-3">
                        <label for="penulis_artikel">Penulis Artikel</label>
                        <input type="text" name="penulis_artikel" id="penulis_artikel" placeholder="" class="form-control">
                        <div class="form-text text-danger"><?= form_error('penulis_artikel'); ?></div>
                    </div>

                    <div>
                        <div class="form-group mt-3 ">
                            <label for="jenis">Jenis</label>
                            <select class="form-select" name="jenis" id="jenis">
                                <option selected>Pilih Jenis</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group mt-3 ">
                            <label for="id_kategori">Kategori</label>
                            <select class="form-select" name="id_kategori" id="id_kategori">
                                <option selected>Pilih Kategori</option>
                                <?php foreach ($datakatg as $dtktg) : ?>
                                    <option value="<?= $dtktg->id_kategori ?>"><?= $dtktg->nama_kategori ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="sumber">Sumber</label>
                        <input type="text" name="sumber" id="sumber" placeholder="" class="form-control">
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
                        <label for="isi_resep"><b>Tuliskan Resep</b></label>
                        <div class="form-floating">
                            <textarea class="form-control" name="isi_resep" id="isi_resep" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>
                            <label for="floatingTextarea2">Resep</label>
                            <div class="form-text text-danger"><?= form_error('isi_resep'); ?></div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="langkah"><b>Tuliskan Langkah Pembuatan Resep</b></label>
                        <div class="form-floating">
                            <textarea class="form-control" name="langkah" id="langkah" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px"></textarea>
                            <label for="floatingTextarea2">Langkah - Langkah</label>
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
                    <a href="<?php echo base_url() ?>resep" class="btn btn-md btn-dark float-end">Kembali</a>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>