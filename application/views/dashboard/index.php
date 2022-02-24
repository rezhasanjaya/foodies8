<link href="assets/css/setail.css" rel="stylesheet">


<main>
    <h1 class="visually-hidden">Dashboard</h1>
    <div class="p-5">
        <div class="container-fluid py-2">
            <div class="px-4 py-5 my-5 text-center">
                <h1 class="display-5 fw-bold">Foodies</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="mb-4">Halo <b><?= $user['username']; ?></b><br>
                        Selamat Datang Di Foodies
                        <br>
                        <br>

                    <h1>Lihat Statistik Foodies &#8595;</h1>

                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="p-1 mb-4 rounded-3">
        <div class="container-fluid py-1">
            <div class="px-4 py-5 my-5">
                <div class="row mt-1 row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Resep</h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('resep');
                                    echo $this->db->count_all_results();
                                    ?> Resep
                                </h6>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">

                            <div class="card-body">
                                <h5 class="card-title">Jumlah Pengunjung Situs</h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                </h6>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Tips</h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('tips');
                                    echo $this->db->count_all_results();
                                    ?> Tips
                                </h6>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>