<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#222223" />
                </svg>

                <div class=" container">
                    <div class="carousel-caption text-start">
                        <h1>Temukan Resepmu.</h1>
                        <p>Cari Resep Masakanmu Sesuai Selera DiFoodies!</p>
                        <p><a class="btn btn-lg btn-warning" href="<?= base_url('makananuser'); ?>">Jelajahi</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#222228" />
                </svg>

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Ajukan Resepmu</h1>
                        <p>Eksperimen Resepmu Sendiri, dan Bagikan Ke Semua Orang DiFoodies</p>
                        <p><a class="btn btn-lg btn-warning" href="<?= base_url('ajukan'); ?>">Ajukan</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#222230" />
                </svg>

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Tips dan Trik.</h1>
                        <p>Tingkat Skill Memasakmu Dengan Berbagai Trik yang Ada Di Foodies</p>
                        <p><a class="btn btn-lg btn-warning" href="<?= base_url('tips'); ?>">Cari Tips</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- START THE FEATURETTES -->
        <div class="container px-2 py-2" id="custom-cards">
            <h2 class="pb-2 border-bottom"><b>5 Resep Terbaru</b></h2>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <?php if (empty($resep)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data Resep Tidak Ditemukan
                    </div>
                <?php endif ?>
                <?php foreach ($resep as $rsp) : ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= base_url() . 'imgvid/' . $rsp['imgvid'] ?>" class="img-responsive">
                            <div class="card-body">
                                <h5 class="card-title"><?= $rsp['judul_resep']; ?></h5>
                                <?= $rsp['penulis_artikel']; ?> <br>
                                <?= $rsp['sumber']; ?> <img src="<?= base_url() . 'assets/img/' . $rsp['media']; ?>" width="16" height="16" class="img-responsive">
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <!-- /END THE FEATURETTES -->
</main>