<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image">
  <title>Halaman Utama | Shinakamana</title>
  <style>
    .carousel-caption,
    .genre {
      color: #FFBD69;
    }

    .nav-link {
      color: #FF6363;
    }

    .hero,
    .hero:hover {
      background-color: #543864;
      color: #FFBD69;
    }

    .h5,
    .h5:hover {
      color: #202040;
    }

    .offcanvas-header {
      background-color: #202040;
    }

    .offcanvas-body {
      background-color: #543864;
    }

    .scroll-up,
    .scroll-up:hover {
      color: #FF6363;
    }
  </style>
</head>
<body>
  {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg" aria-label="Offcanvas navbar large">
      <div class="container">
        <a class="navbar-brand" href="#">Shinakamana</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Top Anime
                </a>
                <ul class="dropdown-menu border-0">
                  <li><a class="dropdown-item" href="/animeongoing">Anime On Going</a></li>
                  <li><a class="dropdown-item" href="#">Anime Terpopuler</a></li>
                  <li><a class="dropdown-item" href="#">Anime Terbaik</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" style="color : #FF6363" href="#">Musim Anime</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" style="color : #FF6363" href="#">Jadwal Anime</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" style="color : #FF6363" href="#">Genre Anime</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" style="color : #FF6363" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" style="color : #FF6363" href="/login">Login</a>
              </li>
            </ul>
            <form class="d-flex mt-3 mt-lg-0" role="search">
              <input class="cari form-control me-2 border-0" type="search" placeholder="Search" aria-label="Search" id="search-input">
              <button class="btn-cari btn" type="submit" id="search-button"><i class="bi bi-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    {{-- Navbar End --}}

    {{-- Hero --}}
    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="container mt-4 mb-4">
        <div class="carousel-inner">
        <div class="carousel-item active text-center">
          <img src="/img/hero/hero-1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption text-start">
              <a href="" class="text-decoration-none"><p class="genre">Genre Anime</p></a>
              <h1>Judul Anime</h1>
              <p class="text-truncate">Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg hero shadow-lg" href="#">Tonton Sekarang</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item text-center">
          <img src="/img/hero/hero-1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <a href="" class="text-decoration-none"><p class="genre">Genre Anime</p></a>
              <h1>Judul Anime</h1>
              <p class="text-truncate">Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg hero shadow-lg" href="#">Tonton Sekarang</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item text-center">
          <img src="/img/hero/hero-1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption text-end">
              <a href="#" class="text-decoration-none"><p class="genre">Genre Anime</p></a>
              <h1>Judul Anime</h1>
              <p class="text-truncate">Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg hero shadow-lg" href="#">Tonton Sekarang</a></p>
            </div>
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
    {{-- Hero End --}}

    {{-- Product 1 --}}
    <div class="container">
      <a href="#" class="text-decoration-none text-danger"><h3 class="mb-2">Anime Fall 2022<i class="bi bi-chevron-right"></i></h3></a>
      <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-6 my-2">
          <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
            <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
            <hr>
            <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
              <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
              <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
              <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
              <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 my-2">
          <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
            <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
            <hr>
            <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
              <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
              <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
              <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
              <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 my-2">
          <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
            <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
            <hr>
            <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
              <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
              <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
              <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
              <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 my-2">
          <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
            <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
            <hr>
            <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
              <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
              <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
              <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
              <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 my-2">
          <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
            <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
            <hr>
            <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
              <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
              <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
              <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
              <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 my-2">
          <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
            <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
            <hr>
            <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
              <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
              <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
              <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
              <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  {{-- Product 1 End --}}

  {{-- Product 2 --}}
  <div class="container my-3">
    <a href="#" class="text-decoration-none text-danger"><h3 class="mb-2">Anime Sedang Tayang<i class="bi bi-chevron-right"></i></h3></a>
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  {{-- Product 2 End --}}

  {{-- Product 3 --}}
  <div class="container">
    <a href="#" class="text-decoration-none text-danger"><h3 class="mb-2">Anime Terpopuler<i class="bi bi-chevron-right"></i></h3></a>
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 my-2">
        <div class="card text-center w-100 shadow-lg" style="width: 18rem;">
          <img src="/img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-title text-decoration-none h5">Judul Anime</a>
          <hr>
          <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
            <div class="fs-5"><i class="bi bi-person-fill"></i><p>858rb</p></div>
            <div class="fs-5"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
            <div class="fs-5"><i class="bi bi-star-fill"></i><p>8.84</p></div>
            <div class="fs-5"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  {{-- Product 3 End --}}

    {{-- Footer --}}
    <div class="container">
      <footer class="py-3 my-4">
        <div class="grid text-center">
          <a href="/" class="scroll-up display-4 my-5"><i class="bi bi-arrow-up-circle-fill"></i></a>
        </div>
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Musim Anime</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Jadwal Anime</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Genre Anime</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About Us</a></li>
          <li class="nav-item"><a href="/login" class="nav-link px-2 text-muted">Login</a></li>
        </ul>
        <a href="/" class="text-decoration-none"><p class="text-center text-muted brand">Shinakamana</p></a>
      </footer>
    </div>
    {{-- Footer End --}}

  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
