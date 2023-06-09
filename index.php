<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Ecom">
    <meta property="og:type" content="website">
    <title>Ecom</title>
    <!-- CSS link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font  link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!--Main Navigation-->
  <header>
    <div class="p-3 text-center bg-white border-bottom">
      <div class="container">
        <div class="row gy-3">
          <!-- Site icon -->
          <div class="col-lg-2 col-sm-4 col-4">
            <a href="#" target="_blank" class="float-start title">
              <h2> <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
              </svg> Eshop</h2> 
            </a>
          </div>
          <!-- Site icon -->

          <!-- Center elements -->
          <div class="order-lg-last col-lg-5 col-sm-8 col-8">
            <div class="d-flex float-end">
              <a href="" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-user-alt m-1 me-md-2"></i><p class="d-none d-md-block mb-0">Sign in</p> </a>
              <a href="" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-heart m-1 me-md-2"></i><p class="d-none d-md-block mb-0">Wishlist</p> </a>
              <a href="" class="border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-shopping-cart m-1 me-md-2"></i><p class="d-none d-md-block mb-0">My cart</p> </a>
            </div>
          </div>
          <!-- Center elements -->

          <!-- Search bar -->
          <div class="col-lg-5 col-md-12 col-12">
            <div class="input-group float-center">
              <div class="form-outline w-75">
                <input type="search" id="form1" class="form-control" placeholder="Search..."/>
              </div>
              <button type="button" class="btn btn-primary shadow-0">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
          <!-- Search bar -->
        </div>
      </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <!-- Container wrapper -->
      <div class="container justify-content-center justify-content-md-between">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PC/Mobile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Clothing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Furnitures</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sport</a>
            </li>
            <!-- Navbar dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                More
              </a>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#">Action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!--  Side Menu  -->
    <section class="mt-3">
      <div class="container">
        <main class="card p-3 shadow-2-strong">
          <div class="row">
            <div class="col-lg-3">
              <nav class="nav flex-column nav-pills mb-md-2">
                <a class="nav-link my-0 py-2 ps-3 bg-white" href="#">Electronics</a>
                <a class="nav-link my-0 py-2 ps-3 bg-white" href="#">Clothes and wear</a>
                <a class="nav-link my-0 py-2 ps-3 bg-white" href="#">Home interiors</a>
                <a class="nav-link my-0 py-2 ps-3 bg-white" href="#">Computer and tech</a>
                <a class="nav-link my-0 py-2 ps-3 bg-white" href="#">Tools, equipments</a>
                <a class="nav-link my-0 py-2 ps-3 bg-white" href="#">Sports and outdoor</a>
                <a class="nav-link my-0 py-2 ps-3 bg-white" href="#">Animal and pets</a>
                <a class="nav-link my-0 py-2 ps-3 bg-white" href="#">Machinery tools</a>
                <a class="nav-link my-0 py-2 ps-3 bg-white" href="#">Other products</a>
              </nav>
            </div>
            <!-- Slider -->
            <div class="col-lg-9">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/living-room.jpg" height="400px" class="d-block w-100" alt="Furniture">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="images/smart-devices.jpg" height="400px" class="d-block w-100" alt="Smart watch">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="images/tennis.jpg" height="400px" class="d-block w-100" alt="Sports">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div>
          </div>
        </main>
      </div>
    </section>

    <!-- Products -->
    <section>
      <div class="container my-5">
        <header class="mb-4">
          <h3>New products</h3>
        </header>

        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-0">
              <a href="#" class="img-wrap">
                <div class="mask" style="height: 50px;">
                  <div class="d-flex justify-content-start align-items-start h-100 m-2">
                    <h6><span class="badge bg-success pt-2">Offer</span></h6>
                  </div>
                </div>
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/12.webp" class="card-img-top" style="aspect-ratio: 1 / 1"> 
              </a>
              <div class="card-body p-0 pt-3">
                <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                <h5 class="card-title">$29.95</h5>
                <p class="card-text mb-0">GoPro action camera 4K</p>
                <p class="text-muted">
                  Model: X-200
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-0">
              <a href="#" class="img-wrap"> 
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/11.webp" class="card-img-top" style="aspect-ratio: 1 / 1"> 
              </a>
              <div class="card-body p-0 pt-2">
                <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                <h5 class="card-title">$590.00</h5>
                <p class="card-text mb-0">Canon EOS professional</p>
                <p class="text-muted">
                  Capacity: 128GB
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-0">
              <a href="#" class="img-wrap"> 
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/10.webp" class="card-img-top" style="aspect-ratio: 1 / 1"> 
              </a>
              <div class="card-body p-0 pt-2">
                <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                <h5 class="card-title">$29.95</h5>
                <p class="card-text mb-0">Modern product name here</p>
                <p class="text-muted">
                  Sizes: S, M, XL
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-0">
              <a href="#" class="img-wrap"> 
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/9.webp" class="card-img-top" style="aspect-ratio: 1 / 1"> 
              </a>
              <div class="card-body p-0 pt-2">
                <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                <h5 class="card-title">$1099.00</h5>
                <p class="card-text mb-0">Apple iPhone 13 Pro max</p>
                <p class="text-muted">
                  Color: Black, Memory: 128GB
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-0">
              <a href="#" class="img-wrap"> 
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/5.webp" class="card-img-top" style="aspect-ratio: 1 / 1"> 
              </a>
              <div class="card-body p-0 pt-2">
                <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                <h5 class="card-title">$29.95</h5>
                <p class="card-text mb-0">Modern product name here</p>
                <p class="text-muted">
                  Sizes: S, M, XL
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-0">
              <a href="#" class="img-wrap"> 
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/6.webp" class="card-img-top" style="aspect-ratio: 1 / 1"> 
              </a>
              <div class="card-body p-0 pt-2">
                <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                <h5 class="card-title">$29.95</h5>
                <p class="card-text mb-0">Modern product name here</p>
                <p class="text-muted">
                  Model: X-200
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-0">
              <a href="#" class="img-wrap"> 
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/7.webp" class="card-img-top" style="aspect-ratio: 1 / 1"> 
              </a>
              <div class="card-body p-0 pt-2">
                <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                <h5 class="card-title">$29.95</h5>
                <p class="card-text mb-0">Modern product name here</p>
                <p class="text-muted">
                  Sizes: S, M, XL
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-0">
              <a href="#" class="img-wrap"> 
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1"> 
              </a>
              <div class="card-body p-0 pt-2">
                <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                <h5 class="card-title">$29.95</h5>
                <p class="card-text mb-0">Modern product name here</p>
                <p class="text-muted">
                  Material: Jeans
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Products -->

  </main>
  
  <footer>

  </footer>
  <!-- Bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>