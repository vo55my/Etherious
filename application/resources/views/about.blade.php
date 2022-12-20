<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>About | Shinakamana</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" aria-label="Offcanvas navbar large">
        <div class="container-fluid mx-4">
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
                            <li><a class="dropdown-item" href="#">Anime On Going</a></li>
                            <li><a class="dropdown-item" href="#">Anime Terpopuler</a></li>
                            <li><a class="dropdown-item" href="#">Anime Terbaik</a></li>
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
                    <a class="nav-link active" id="item" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="item" href="/login">Login</a>
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
    
    <div class="container text-light">
        <h1 class="text-center py-4 judul">About Us</h1>
        <div class="row pb-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <img src="img/about/Etherious.png" width="300rem" class="mb-3" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 align-self-center fs-4" id="deskripsi">Tim Etherious adalah tim Web Developer yang beranggotakan 4 orang mahasiswa Teknik Informatika Universitas Pasundan Bandung yang terdiri dari 1 orang Project Leader, 1 orang Front-End Web Developer, dan 2 orang Back-End Web Developer.</div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-4">
                <img src="/img/about/hilmy.jpg" width="200" class="img-thumbnail rounded-circle">
                <h3 class="pt-3 judul">Dhaifullah Hilmy</h3>
                <h4 class="judul">Project Leader</h4>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.instagram.com/si_hilmy" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></p>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.github.com/vo55my" target="_blank"><i class="bi bi-github"></i> Github</a></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-4">
                <img src="/img/about/dimas2.jpeg" width="200" class="img-thumbnail rounded-circle">
                <h3 class="pt-3 judul">Dimas Prayuda</h3>
                <h4 class="judul">Front-End</h4>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.instagram.com/dimspryda_" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></p>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.github.com/dimasprayuda212" target="_blank"><i class="bi bi-github"></i> Github</a></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-4">
                <img src="/img/about/fresa.jpg" width="200" class="img-thumbnail rounded-circle">
                <h3 class="pt-3 judul">Fresabayu Anggoro</h3>
                <h4 class="judul">Back-End</h4>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.instagram.com/fresa.ba" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></p>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.github.com/fresaaaaa" target="_blank"><i class="bi bi-github"></i> Github</a></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-4">
                <img src="/img/about/Andrie.jpg" width="200" class="img-thumbnail rounded-circle">
                <h3 class="pt-3 judul">Andrie Firmansyah</h3>
                <h4 class="judul">Back-End</h4>
                <p><a class="pt-2 text-decoration-none isi-link"><i class="bi bi-instagram"></i> Instagram</a></p>
                <p><a class="pt-2 text-decoration-none isi-link" href="https://www.github.com/Andriefir" target="_blank"><i class="bi bi-github"></i> Github</a></p>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>