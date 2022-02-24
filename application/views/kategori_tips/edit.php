<link href="../assets/css/style.css" rel="stylesheet">
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3><b>
                    <center>Tambah Kategori Tips</center>
                </b></h3>
            <hr>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="id_kategori_tips" value="<?php echo $katips['id_kategori_tips']; ?>">
                    <div class="form-group mt-3">
                        <label for="id_kategori_tips">Id Kategori</label>
                        <input type="text" name="id_kategori_tips" id="id_kategori_tips" class="form-control" value="<?= $katips['id_kategori_tips'] ?>" disabled>
                        <div class="form-text text-danger"><?= form_error('id_kategori_tips'); ?></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="nama_kategori_tips">Nama Kategori</label>
                        <input type="text" name="nama_kategori_tips" id="nama_kategori_tips" class="form-control" value="<?= $katips['nama_kategori_tips'] ?>">
                        <div class="form-text text-danger"><?= form_error('nama_kategori_tips'); ?></div>
                    </div>

                    <br>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    <button type="reset" name="reset" class="btn btn-secondary">Reset</button>
                    <a href="<?php echo base_url() ?>katips" class="btn btn-md btn-dark float-end">Kembali</a>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>