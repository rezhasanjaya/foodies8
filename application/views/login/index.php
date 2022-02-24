<br>
<br>
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
                <h2>Admin Login</h2>
            </center>
            <br>
            <form class="user" method="post" action="<?= base_url('Authadmin') ?>">
                <?= $this->session->flashdata('pesan'); ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" class="form-control" id="username">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" class="form-control" id="password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <br>
                <button class="w-100 btn btn-lg btn-warning" type="submit">
                    <h5 style="color:#222223">Masuk<h5>
                </button>
                <br>
                <small class="text">Daftar Admin? <a href="<?= base_url() ?>Authadmin/registrasi">Daftar disini</a></small>
            </form>
        </div>

    </div>
</div>