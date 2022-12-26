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
  <title>Shinakamana</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid mx-4">
        <a class="navbar-brand" href="#">Shinakamana</a>
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
                <input class="cari form-control me-2 border-0" type="search" placeholder="Search" id="search-input">
                <button class="btn-cari btn" type="submit" id="search-button"><i class="bi bi-search"></i></button>
            </form>
            </div>
        </div>
    </div>
  </nav>

  <div class="container">
    <h1 id="merah" class="py-4 text-center">Jadwal Anime</h1>
    <div class="row mt-3">
      <h6 id="merah"><i class="bi bi-clock-fill"></i> Waktu yang ditampilkan adalah jadwal waktu perdana di Jepang</h6>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
              Senin
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
              Selasa
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
              Rabu
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
              Kamis
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
              Jumat
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
              Sabtu
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
              Minggu
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card border-0">
                    <div class="card-body">
                      <div class="row align-items-center d-flex justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                          <img src="img/trending/trend-1.jpg" width="400rem" class="rounded img-fluid" alt="">
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 fs-6">
                          <p class="pt-2 fs-5"><a href="#" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a></p>
                          <div class="row row-cols-12 row-cols-md-12 row-cols-sm-12 d-flex justify-content-center">
                            <div><i class="bi bi-person-fill"></i> 858rb</div>
                            <div><i class="bi bi-star-fill"></i> 8.84</div>
                            <div><i class="bi bi-clock-fill"></i> 05.00 WIB</div>
                          </div>
                        </div>
                      </div>
                    </div>
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
    <footer class="py-3 my-4">
      <div class="grid text-center">
        <a href="#" class="scroll-up display-4 my-5"><i class="bi bi-arrow-up-circle-fill"></i></a>
      </div>
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2" id="item">Musim Anime</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2" id="item">Jadwal Anime</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2" id="item">Genre Anime</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2" id="item">About Us</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2" id="item">Login</a></li>
      </ul>
      <a href="#" class="text-decoration-none"><p class="text-center navbar-brand">Shinakamana</p></a>
    </footer>
  </div>
  <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>