<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>Detail | Shinakamana</title>
</head>
<body>
  <!-- {{-- Navbar --}} -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid mx-4">
      <a class="navbar-brand" href="/">Shinakamana</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                Top Anime
              </a>
              <ul class="dropdown-menu border-0">
                <li><a class="dropdown-item" href="/animeongoing">Anime On Going</a></li>
                <li><a class="dropdown-item" href="/animeterbaik">Anime Terbaik</a></li>
                <li><a class="dropdown-item" href="/animeterpopuler">Anime Terpopuler</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="item" href="#">Musim Anime</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="item" href="#">Jadwal Anime</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="item" href="#">Genre Anime</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="item" href="/about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="item" href="/login">Login</a>
            </li>
          </ul>
          <form class="d-flex mt-3 mt-lg-0" role="search">
            <input class="cari form-control me-2 border-0" type="search" placeholder="Search" id="search-input">
            <button class="btn-cari btn" type="submit" id="search-button"><i class="bi bi-search"></i></button>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <!-- {{-- Navbar End --}} -->

  <div class="container-fluid mt-4">
    <div class="row mx-2">
      <div class="col-lg-4 col-md-5 col-sm-12">
        <img src="img/sidebar/comment-4.jpg" width="300rem" class="rounded mb-3" alt="">
        <div class="card border-0" style="width: 20rem; height: 4rem;">
          <a href="#" class="text-decoration-none">
          <div class="card-body">
            <div class="row fs-5 info">
              <div class="col-10"><p>MyAnimeList</p></div>
              <div class="col-2"><i class="bi bi-box-arrow-up-right"></i></div>
            </div>
          </div>
        </a>
        </div>
        <div class="col mt-3 d-grid gap-2">
          <div>
            <p class="fs-5 judul">Tipe Anime</p>
            <p class="isi">TV (12 Eps) (24 Menit)</p>
          </div>
          <div>
            <p class="fs-5 judul">Status</p>
            <p class="isi">Sedang Tayang</p>
          </div>
          <div>
            <p class="fs-5 judul">Tanggal Tayang</p>
            <p class="isi">11 Oktober 2022 - 27 Desember 2022</p>
          </div>
          <div>
            <p class="fs-5 judul">Studio</p>
            <p class="isi">Mappa</p>
          </div>
          <div>
            <p class="fs-5 judul">Musim</p>
            <p><a href="#" class="text-decoration-none isi-link">Fall 2022</a></p>
          </div>
          <div>
            <p class="fs-5 judul">Genre</p>
            <p><a href="#" class="text-decoration-none isi-link">Action</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-7 col-sm-12">
        <h1 class="judul">Judul Anime</h1>
        <p class="fs-5 judul">Sinopsis</p>
        <p class="isi">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem explicabo beatae impedit perferendis, eligendi obcaecati voluptatem est, eum incidunt rerum necessitatibus aliquid? Laborum aut, earum facere adipisci, nisi laudantium a odio ut assumenda voluptate sed quisquam perferendis vel soluta asperiores exercitationem. Officiis eveniet ad doloremque, suscipit dolores magni pariatur cupiditate fugit molestiae! Eligendi eos repellendus magni. Dolorem eaque tempore illo facere ducimus, aspernatur optio et dignissimos porro facilis recusandae magni quod officiis sequi quo atque perferendis, perspiciatis odit cum quis. Maxime voluptates voluptatum, numquam omnis explicabo nulla temporibus et veniam, in eius error repudiandae tempore dolores hic debitis cupiditate dolor doloremque doloribus? Facilis soluta voluptatum, earum dolore tempore tempora nam illo quo excepturi neque unde commodi minima reiciendis, vitae corporis?</p>
        <p class="fs-5 judul">Tersedia di</p>
          <div class="row">
            <div class="col d-grid gap-2 fs-5">
              <div class="card border-0">
                <a href="#" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info">
                    <div class="col-10"><i class="bi bi-youtube"></i> Bilibili</div>
                    <div class="col-2"><i class="bi bi-box-arrow-up-right"></i></div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="#" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info">
                    <div class="col-10"><i class="bi bi-youtube"></i> Bilibili</div>
                    <div class="col-2"><i class="bi bi-box-arrow-up-right"></i></div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="#" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info">
                    <div class="col-10"><i class="bi bi-youtube"></i> Bilibili</div>
                    <div class="col-2"><i class="bi bi-box-arrow-up-right"></i></div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="#" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info">
                    <div class="col-10"><i class="bi bi-youtube"></i> Bilibili</div>
                    <div class="col-2"><i class="bi bi-box-arrow-up-right"></i></div>
                  </div>
                </div>
              </a>
              </div>
            </div>
            <div class="col d-grid gap-2 fs-5">
              <div class="card border-0">
                <a href="" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info">
                    <div class="col-10"><i class="bi bi-youtube"></i> Bilibili</div>
                    <div class="col-2"><i class="bi bi-box-arrow-up-right"></i></div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info">
                    <div class="col-10"><i class="bi bi-youtube"></i> Bilibili</div>
                    <div class="col-2"><i class="bi bi-box-arrow-up-right"></i></div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info">
                    <div class="col-10"><i class="bi bi-youtube"></i> Bilibili</div>
                    <div class="col-2"><i class="bi bi-box-arrow-up-right"></i></div>
                  </div>
                </div>
              </a>
              </div>
              <div class="card border-0">
                <a href="" class="text-decoration-none">
                <div class="card-body">
                  <div class="row info">
                    <div class="col-10"><i class="bi bi-youtube"></i> Bilibili</div>
                    <div class="col-2"><i class="bi bi-box-arrow-up-right"></i></div>
                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>
        <p class="fs-5 mt-4 judul">Tema Lagu</p>
          <div class="row">
            <div class="col-6 isi">
              <p class="">Opening</p>
              <p><a href="#" class="text-decoration-none isi-link">"SOUVENIR" by BUMP OF CHICKEN</a></p>
            </div>
            <div class="col-6 isi">
              <p class="">Ending</p>
              <p><a href="" class="text-decoration-none isi-link">"Shikisai (色彩)" by yama</a></p>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <footer class="py-3 my-4">
      <div class="grid text-center">
        <a href="#" class="scroll-up display-4 my-5 judul"><i class="bi bi-arrow-up-circle-fill"></i></a>
      </div>
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2" id="item">Musim Anime</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2" id="item">Jadwal Anime</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2" id="item">Genre Anime</a></li>
        <li class="nav-item"><a href="/about" class="nav-link px-2" id="item">About Us</a></li>
        <li class="nav-item"><a href="/login" class="nav-link px-2" id="item">Login</a></li>
      </ul>
      <p class="text-center"><a href="/" class="text-decoration-none navbar-brand">Shinakamana</a></p>
    </footer>
  </div>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>