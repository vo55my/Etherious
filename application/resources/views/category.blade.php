<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Halaman Category | Shinakamana</title>
</head>

<body>
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
                  <a class="nav-link active" id="item" href="/musim">Musim Anime</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="item" href="/jadwal">Jadwal Anime</a>
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

      <div class="container">
        <h1 id="merah" class="py-4 text-center">Genre Anime/Action</h1>
        <div class="row">
          <div class="col">
            <div class="card border-0">
              <div class="card-body">
                <div class="row align-items-center d-flex justify-content-center">
                  <div class="col-lg-3 col-md-6 col-sm-12 text-center pb-2">
                    <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                  </div>
                  <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                    <p class="fs-5">
                      <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                    </p>
                    <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                      <div><i class="bi bi-person-fill"></i> 858rb</div>
                      <div><i class="bi bi-star-fill"></i> 8.84</div>
                      <div><i class="bi bi-collection-fill"></i> 12 Eps</div>
                      <div><i class="bi bi-calendar-fill"></i> 01 Okt 2022</div>
                      <div>
                        <a href="#" class="anime"><i class="bi bi-instagram pe-2"></i></a>
                        <a href="#" class="anime"><i class="bi bi-twitter pe-2"></i></a>
                        <a href="#" class="anime"><i class="bi bi-twitch pe-2"></i></a>
                        <a href="#" class="anime"><i class="bi bi-youtube pe-2"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0">
              <div class="card-body">
                <div class="row align-items-center d-flex justify-content-center">
                  <div class="col-lg-3 col-md-6 col-sm-12 text-center pb-2">
                    <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                  </div>
                  <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                    <p class="fs-5">
                      <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                    </p>
                    <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                      <div><i class="bi bi-person-fill"></i> 858rb</div>
                      <div><i class="bi bi-star-fill"></i> 8.84</div>
                      <div><i class="bi bi-collection-fill"></i> 12 Eps</div>
                      <div><i class="bi bi-calendar-fill"></i> 01 Okt 2022</div>
                      <div>
                        <a href="#" class="anime"><i class="bi bi-instagram pe-2"></i></a>
                        <a href="#" class="anime"><i class="bi bi-twitter pe-2"></i></a>
                        <a href="#" class="anime"><i class="bi bi-twitch pe-2"></i></a>
                        <a href="#" class="anime"><i class="bi bi-youtube pe-2"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <nav class="mt-5">
        <ul class="pagination justify-content-center">
          <li class="page-item"><a class="page-link border-0" href="#" id="page"><i class="bi bi-caret-left-fill"></i></a></li>
          <li class="page-item"><a class="page-link border-0" href="#" id="page">1</a></li>
          <li class="page-item"><a class="page-link border-0" href="#" id="page">2</a></li>
          <li class="page-item"><a class="page-link border-0" href="#" id="page">3</a></li>
          <li class="page-item"><a class="page-link border-0" href="#" id="page">4</a></li>
          <li class="page-item"><a class="page-link border-0" href="#" id="page">5</a></li>
          <li class="page-item"><a class="page-link border-0" href="#" id="page">6</a></li>
          <li class="page-item"><a class="page-link border-0" href="#" id="page">7</a></li>
          <li class="page-item"><a class="page-link border-0" href="#" id="page">8</a></li>
          <li class="page-item"><a class="page-link border-0" href="#" id="page">9</a></li>
          <li class="page-item"><a class="page-link border-0" href="#" id="page">10</a></li>
          <li class="page-item"><a class="page-link border-0" href="#" id="page"><i class="bi bi-caret-right-fill"></i></a></li>
        </ul>
      </nav>

      <div class="container">
        <footer class="py-4">
          <div class="grid text-center">
            <a href="#" class="scroll-up display-4 my-5"><i class="bi bi-arrow-up-circle-fill"></i></a>
          </div>
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/musim" class="nav-link px-2" id="item">Musim Anime</a></li>
            <li class="nav-item"><a href="/jadwal" class="nav-link px-2" id="item">Jadwal Anime</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2" id="item">Genre Anime</a></li>
            <li class="nav-item"><a href="/about" class="nav-link px-2" id="item">About Us</a></li>
            <li class="nav-item"><a href="/login" class="nav-link px-2" id="item">Login</a></li>
          </ul>
          <a href="#" class="text-decoration-none">
            <p class="text-center navbar-brand">Shinakamana</p>
          </a>
        </footer>
      </div>