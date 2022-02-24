<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">


  <!-- Jquery -->
  <script src="<?= base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>


  <title><?php echo $judul; ?></title>
  <style>
    /* width */
    ::-webkit-scrollbar {
      width: 6px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
  </style>
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-fixed navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>Dashboard">
        <img src="assets/img/navbrand.png" alt="Foodies" width="100" height="45" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= base_url() ?>Dashboard"><b>Home</b></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= base_url() ?>resep"><b>Kelola Resep</b></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= base_url() ?>kategori"><b>Kelola Kategori</b></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= base_url() ?>kelola_tips"><b>Kelola Tips</b></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <b>Akun</b>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

              <li><a class="dropdown-item" href="<?= base_url() ?>Profile">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="<?= base_url() ?>Authadmin/logout" onclick="return confirm('Yakin Ingin Log Out?');">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
  </nav>