@extends('layouts.main2')

@section('container')
<div class="container">
    <h1 id="merah" class="py-4 text-center ">Hasil Pencarian "Boruto"</h1>
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

<div class="container">
    <footer class="py-4">
      <div class="grid text-center">
        <a href="#" class="scroll-up display-4 my-5"><i class="bi bi-arrow-up-circle-fill"></i></a>
      </div>
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="/musim" class="nav-link px-2" id="item">Musim Anime</a></li>
        <li class="nav-item"><a href="/jadwal" class="nav-link px-2" id="item">Jadwal Anime</a></li>
        <li class="nav-item"><a href="/genre" class="nav-link px-2" id="item">Genre Anime</a></li>
        <li class="nav-item"><a href="/about" class="nav-link px-2" id="item">About Us</a></li>
        <li class="nav-item"><a href="/login" class="nav-link px-2" id="item">Login</a></li>
      </ul>
      <a href="#" class="text-decoration-none">
        <p class="text-center navbar-brand">Shinakamana</p>
      </a>
    </footer>
  </div>
@endsection