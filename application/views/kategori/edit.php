<link href="../assets/css/style.css" rel="stylesheet">
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3><b>
                    <center>Tambah Kategori Resep</center>
                </b></h3>
            <hr>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="id_kategori" value="<?php echo $kategori['id_kategori']; ?>">
                    <div class="form-group mt-3">
                        <label for="id_kategori">Id Kategori</label>
                        <input type="text" name="id_kategori" id="id_kategori" class="form-control" value="<?= $kategori['id_kategori'] ?>" disabled>
                        <div class="form-text text-danger"><?= form_error('id_kategori'); ?></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="<?= $kategori['nama_kategori'] ?>">
                        <div class="form-text text-danger"><?= form_error('nama_kategori'); ?></div>
                    </div>

                    <br>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    <button type="reset" name="reset" class="btn btn-secondary">Reset</button>
                    <a href="<?php echo base_url() ?>kategori" class="btn btn-md btn-dark float-end">Kembali</a>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>