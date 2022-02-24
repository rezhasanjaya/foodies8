<main class="container">
    <hr>
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
            <center>
                <img src="<?php echo base_url() . 'imgvid/' . $tips['imgvid'] ?>" style="vertical-align:middle" width="50%" height="50%" class="img-responsive">
            </center>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h6>ID Tips : <?= $tips['id_tips']; ?> - ID Kategori :
                <?= $tips['id_kategori_tips']; ?></h6>
            <hr>
            <h3 class="card-title"><?= $tips['nama_tips']; ?></h3>

            <h6>Penulis : <?= $tips['penulis_tips']; ?></h6>

            <h6 class="pb-4 mb-4 border-bottom">Sumber : <?= $tips['sumber']; ?> <img src="<?= base_url() . 'assets/img/' . $tips['media'] ?>" width="16" height="16" class="img-responsive"></h6>
            <p class="card-text"><?= nl2br($tips['langkah']); ?></p>
        </div>

    </div>
    </div>

</main>