<style>
    body {
        background-color: #fee440;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>


<div class="container col-xl-9 col-xxl-8 px-3 py-4">
    <div class="row p-1 mt-1 mx-auto col-lg-7 pb-0 pe-lg-0 pt-lg-5 align-items-center bg-light rounded-3 border shadow">
        <div class="col p-3 p-lg-5 pt-lg-1">
            <center>

                <h1><b>Foodies</b></h1>
                <h2>Admin Register</h2>
            </center>
            <br>
            <form class="user" method="post" action="<?= base_url('Authadmin/registrasi') ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?= set_value('username'); ?>">
                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="col mb-3">
                        <label for="password1" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password1" id="password1">
                        <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <select class="form-select mb-2" name='jenis_kelamin' aria-label="Default select example" id='jenis_kelamin'>
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="LK">Laki - Laki</option>
                        <option value="PR">Perempuan</option>
                    </select>
                    <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button class="w-100 btn btn-lg btn-warning" type="submit">
                    <h6 style="color:#222223"><b>Daftar</b></h6>
                </button>
                <br>
                <small class="text">Sudah Punya Akun? <a href="<?= base_url() ?>Authadmin">Masuk disini</a></small>
            </form>
        </div>

    </div>
</div>