<main class="container">
    <hr>
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
            <center>
                <img src="<?php echo base_url() . 'imgvid/' . $resep['imgvid'] ?>" style="vertical-align:middle" width="50%" height="50%" class="img-responsive">
            </center>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-md-8">
            <hr>
            <h3 class="card-title"><?= $resep['judul_resep']; ?></h3>

            <h6>Penulis : <?= $resep['penulis_artikel']; ?></h6>

            <h6 class="pb-4 mb-4 border-bottom">Sumber : <?= $resep['sumber']; ?> <img src="<?= base_url() . 'assets/img/' . $resep['media'] ?>" width="16" height="16" class="img-responsive"></h6>
            <p class="card-text"><?= nl2br($resep['langkah']); ?></p>
        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <div class="bahan">
                        <h4>Bahan Resep</h4>
                        <p class="card-text"><?= nl2br($resep['isi_resep']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>