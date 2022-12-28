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
    <a class="navbar-brand fs-2 text-center text-decoration-none" id="title" href="/">Shinakamana</a>
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
              <h6 class="pt-2 user">Hello, Hilmy</h6>
            </li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 text-muted text-uppercase">
            <span class="activity">Your Activity</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#" id="menu">Edit Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#" id="menu">Anime List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#" id="menu">Reviews</a>
            </li>
          </ul>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 text-muted text-uppercase">
            <span class="activity">Menu</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#" id="menu">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none" href="#" id="menu">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- {{-- Anime List --}} -->
          <div class="container">
            <a href="#" class="text-decoration-none" id="item"><h3 class="my-3">Anime List<i class="bi bi-chevron-right"></i></h3></a>
            <div class="row ">
              <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                <div class="card text-center w-100 shadow-lg border-0" width="18rem">
                  <a href="#" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 href="#" class="card-title">Judul Anime</h5>
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
                  <a href="#" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 href="#" class="card-title">Judul Anime</h5>
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
                  <a href="#" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 href="#" class="card-title">Judul Anime</h5>
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
                  <a href="#" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 href="#" class="card-title">Judul Anime</h5>
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
                  <a href="#" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 href="#" class="card-title">Judul Anime</h5>
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
                  <a href="#" class="anime text-decoration-none">
                  <img src="img/sidebar/comment-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 href="#" class="card-title">Judul Anime</h5>
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
            <a href="#" class="text-decoration-none" id="item"><h3 class="mt-3">Reviews<i class="bi bi-chevron-right"></i></h3></a>
            <div class="card border-0">
              <div class="card-body">
                <div class="row align-items-center d-flex">
                  <div class="col-lg-2 col-md-6 col-sm-12 text-center">
                    <img src="img/trending/trend-1.jpg" width="500rem" height="600rem" class="rounded img-fluid" alt="">
                  </div>
                  <div class="col-lg-10 col-md-6 col-sm-12 pt-3">
                    <a href="#" class="card-title text-decoration-none h5" id="review">Judul Anime</a>
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