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
  <title>Dashboard | Shinakamana</title>
</head>
<body>
  <header class="navbar flex-md-nowrap" id="head">
    <a class="navbar-brand fs-2 text-center text-decoration-none" id="title" href="#">Shinakamana</a>
    <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>
  
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <div class="position-sticky sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item text-center">
              <img src="img/favicon.png" width="180rem" class="img-fluid pt-4" alt="">
              <h4 class="pt-2 user">Hello, Hilmy</h4>
            </li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 text-muted text-uppercase">
            <span class="activity">Your Activity</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#" id="menu" data-bs-toggle="modal" data-bs-target="#profil">Edit Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#" id="menu" data-bs-toggle="modal" data-bs-target="#new">New Anime</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#" id="menu" data-bs-toggle="modal" data-bs-target="#genre">New Genre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#all-anime" id="menu">Anime</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#all-genre" id="menu">Genre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#anime-list" id="menu">Anime List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#reviews" id="menu">Reviews</a>
            </li>
          </ul>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 text-muted text-uppercase">
            <span class="activity">Menu</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="/home" id="menu">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="/logout" id="menu">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- Edit Profil -->
        <div class="modal fade" id="profil" tabindex="-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control profil border-0" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Foto Profil</label>
                    <input class="form-control profil border-0" type="file" id="formFile">
                  </div>                  
                </form>
              </div>
              <div class="modal-footer border-0">
                <button type="button" class="btn" id="batal" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn" id="simpan">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Edit Profil End -->

        <!-- New Anime -->
        <div class="modal fade" id="new" tabindex="-1">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Anime</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul Anime</label>
                    <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Tayang</label>
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Studio</label>
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Musim</label>
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Genre</label>
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-3">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jumlah Tayangan</label>
                        <input type="email" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tipe Anime</label>
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Rating Anime</label>
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Total Episode</label>
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Sinopsis</label>
                    <textarea type="text" class="form-control profil border-0" id="exampleFormControlInput1"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Link MyAnimeList</label>
                    <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Link Tema Lagu</label>
                    <div class="row">
                      <div class="col">
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                  </div>
                  <div>
                    <label for="exampleFormControlInput1" class="form-label">Link Nonton</label>
                    <div class="row">
                      <div class="col-6 mb-3">
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                      <div class="col-6 mb-3">
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                      <div class="col-6 mb-3">
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                      <div class="col-6 mb-3">
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 mb-3">
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                      <div class="col-6 mb-3">
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                      <div class="col-6 mb-3">
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                      <div class="col-6 mb-3">
                        <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Poster Anime</label>
                    <input class="form-control profil border-0" type="file" id="formFile">
                  </div>                  
                </form>
              </div>
              <div class="modal-footer border-0">
                <button type="button" class="btn" id="batal" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn" id="simpan">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- New Anime End -->

        <!-- Genre -->
        <div class="modal fade" id="genre" tabindex="-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Genre</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Genre</label>
                    <input type="text" class="form-control profil border-0" id="exampleFormControlInput1">
                  </div>
                </form>
              </div>
              <div class="modal-footer border-0">
                <button type="button" class="btn" id="batal" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn" id="simpan">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Genre End -->

        <!-- Anime -->
        <div class="container">
          <a href="#" class="text-decoration-none" id="item">
            <h3 id="all-anime" class="my-3">Anime<i class="bi bi-chevron-right"></i></h3>
          </a>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                  A
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                  B
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                  C
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                  D
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                  E
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                  F
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                  G
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight">
                  H
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine">
                  I
                </button>
              </h2>
              <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingTen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen">
                  J
                </button>
              </h2>
              <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingEleven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven">
                  K
                </button>
              </h2>
              <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingTwelve">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve">
                  L
                </button>
              </h2>
              <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingThirteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen">
                  M
                </button>
              </h2>
              <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingFourteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen">
                  N
                </button>
              </h2>
              <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingFiveteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveteen">
                  O
                </button>
              </h2>
              <div id="collapseFiveteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingSixteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen">
                  P
                </button>
              </h2>
              <div id="collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingSeventeen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen">
                  Q
                </button>
              </h2>
              <div id="collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingEightteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEightteen">
                  R
                </button>
              </h2>
              <div id="collapseEightteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingNineteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen">
                  S
                </button>
              </h2>
              <div id="collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingTwenty">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty">
                  T
                </button>
              </h2>
              <div id="collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingTwentyone">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyone">
                  U
                </button>
              </h2>
              <div id="collapseTwentyone" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingTwentytwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentytwo">
                  V
                </button>
              </h2>
              <div id="collapseTwentytwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingTwentythree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentythree">
                  W
                </button>
              </h2>
              <div id="collapseTwentythree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingTwentyfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyfour">
                  X
                </button>
              </h2>
              <div id="collapseTwentyfour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingTwentyfive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyfive">
                  Y
                </button>
              </h2>
              <div id="collapseTwentyfive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="headingTwentysix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentysix">
                  Z
                </button>
              </h2>
              <div id="collapseTwentysix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="anime">
                        <li>
                          <p>
                            <a href="/detail" class="text-decoration-none anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quos.</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Anime End -->

        <!-- Genre -->
        <div class="container">
          <a href="#" class="text-decoration-none" id="item">
            <h3 id="all-genre" class="my-3">Genre<i class="bi bi-chevron-right"></i></h3>
          </a>
          <table class="table table-bordered" id="cream">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Genre</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Action</td>
                <td>
                  <a href="" id="item"><i class="bi bi-info-square-fill"></i></a>
                  <a href="" id="item"><i class="bi bi-x-square-fill"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Comedy</td>
                <td>
                  <a href="" id="item"><i class="bi bi-info-square-fill"></i></a>
                  <a href="" id="item"><i class="bi bi-x-square-fill"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Horror</td>
                <td>
                  <a href="" id="item"><i class="bi bi-info-square-fill"></i></a>
                  <a href="" id="item"><i class="bi bi-x-square-fill"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Genre End -->

        <!-- {{-- Anime List --}} -->
          <div class="container">
            <a href="#" class="text-decoration-none" id="item">
              <h3 id="anime-list" class="my-3">Anime List<i class="bi bi-chevron-right"></i></h3>
            </a>
            <div class="row ">
              <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                <div class="card text-center w-100 shadow-lg border-0" width="18rem">
                  <a href="/detail" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Judul Anime</h5>
                  </a>
                  <hr>
                  <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
                    <div class="fs-6"><i class="bi bi-person-fill"></i><p>858rb</p></div>
                    <div class="fs-6"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
                    <div class="fs-6"><i class="bi bi-star-fill"></i><p>8.84</p></div>
                    <div class="fs-6"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
                  </div>
                </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                <div class="card text-center w-100 shadow-lg border-0" width="18rem">
                  <a href="/detail" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Judul Anime</h5>
                  </a>
                  <hr>
                  <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
                    <div class="fs-6"><i class="bi bi-person-fill"></i><p>858rb</p></div>
                    <div class="fs-6"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
                    <div class="fs-6"><i class="bi bi-star-fill"></i><p>8.84</p></div>
                    <div class="fs-6"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
                  </div>
                </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                <div class="card text-center w-100 shadow-lg border-0" width="18rem">
                  <a href="/detail" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Judul Anime</h5>
                  </a>
                  <hr>
                  <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
                    <div class="fs-6"><i class="bi bi-person-fill"></i><p>858rb</p></div>
                    <div class="fs-6"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
                    <div class="fs-6"><i class="bi bi-star-fill"></i><p>8.84</p></div>
                    <div class="fs-6"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
                  </div>
                </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                <div class="card text-center w-100 shadow-lg border-0" width="18rem">
                  <a href="/detail" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Judul Anime</h5>
                  </a>
                  <hr>
                  <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
                    <div class="fs-6"><i class="bi bi-person-fill"></i><p>858rb</p></div>
                    <div class="fs-6"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
                    <div class="fs-6"><i class="bi bi-star-fill"></i><p>8.84</p></div>
                    <div class="fs-6"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
                  </div>
                </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                <div class="card text-center w-100 shadow-lg border-0" width="18rem">
                  <a href="/detail" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Judul Anime</h5>
                  </a>
                  <hr>
                  <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
                    <div class="fs-6"><i class="bi bi-person-fill"></i><p>858rb</p></div>
                    <div class="fs-6"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
                    <div class="fs-6"><i class="bi bi-star-fill"></i><p>8.84</p></div>
                    <div class="fs-6"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
                  </div>
                </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                <div class="card text-center w-100 shadow-lg border-0" width="18rem">
                  <a href="/detail" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Judul Anime</h5>
                  </a>
                  <hr>
                  <div class="row row-cols-4 row-cols-sm-2 row-cols-md-2 mt-1">
                    <div class="fs-6"><i class="bi bi-person-fill"></i><p>858rb</p></div>
                    <div class="fs-6"><i class="bi bi-camera-video-fill"></i><p>TV</p></div>
                    <div class="fs-6"><i class="bi bi-star-fill"></i><p>8.84</p></div>
                    <div class="fs-6"><i class="bi bi-collection-fill"></i><p>12 Eps</p></div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        <!-- {{-- Anime List End --}} -->

        <!-- {{-- Review --}} -->
          <div class="container d-grid gap-3 pb-4">
            <a href="#" class="text-decoration-none" id="item">
              <h3 id="reviews" class="mt-3">Reviews<i class="bi bi-chevron-right"></i></h3>
            </a>
            <div class="card border-0">
              <div class="card-body">
                <div class="row align-items-center d-flex">
                  <div class="col-lg-2 col-md-6 col-sm-12 text-center">
                    <img src="img/trending/trend-1.jpg" width="500rem" height="600rem" class="rounded img-fluid" alt="">
                  </div>
                  <div class="col-lg-10 col-md-6 col-sm-12 pt-3">
                    <a href="/detail" class="card-title text-decoration-none h5" id="review">Judul Anime</a>
                    <p>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </p>
                    <blockquote class="blockquote fs-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, nesciunt quod modi voluptatem cum voluptates architecto. Vitae officiis officia laboriosam necessitatibus nemo aut assumenda quis voluptates iure, cumque doloremque quidem eaque sunt deserunt porro atque alias et enim ut voluptatibus eligendi ab. Dolore ab placeat rerum fuga, architecto harum inventore?</blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- {{-- Reviews End --}} -->
      </main>
    </div>
  </div>

  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>