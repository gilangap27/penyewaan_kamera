<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar - Start -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top my-4">
        <div class="container">
            <a class="navbar-brand" href="./index.php">SewaKamera</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user/product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user/contact.php">Contact</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="btn btn-outline-dark" href="./login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar - End -->

    <!-- Carousel - Start -->
    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/carousel.jpg" class="d-block w-100 rounded" height="500" alt="kamera">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel - End -->

    <!-- Feature - Start -->
    <div class="container my-5 py-4 rounded" style="background-color: rgba(199, 199, 199, 0.2)">
        <div class="row">
            <div class="col text-center">
                <img src="./img/fast.svg" alt="fast" style="width: 150px;">
                <div class="mt-5">
                    <h5 class="card-title mb-3">Pengiriman Cepat</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
            <div class="col text-center">
                <img src="./img/24-hour.svg" class="card-img-top" alt="24 hours" style="width: 150px;">
                <div class="mt-5">
                    <h5 class="card-title mb-3">Pelayanan 24 Jam</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
            <div class="col text-center">
                <img src="./img/5-star.svg" class="card-img-top" alt="5 star" style="width: 150px;">
                <div class="mt-5">
                    <h5 class="card-title mb-3">Mudah Digunakan</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature - End -->

    <!-- Favorite - Start -->
    <div class="container mt-5">
        <h3 class="mt-5 mb-3">Favorite Product</h3>
        <div class="card-group">
            <div class="card me-3">
                <img src="./img/kamera1.jpg" class="card-img-top" alt="kamera">
                <div class="card-body">
                    <h5 class="card-title">Camera</h5>
                    <p class="card-text">1 day - Rp. 100.000,00</p>
                    <a href="#" class="btn btn-dark"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a>
                </div>
            </div>
            <div class="card me-3">
                <img src="./img/kamera1.jpg" class="card-img-top" alt="kamera">
                <div class="card-body">
                    <h5 class="card-title">Camera</h5>
                    <p class="card-text">1 day - Rp. 100.000,00</p>
                    <a href="#" class="btn btn-dark"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a>
                </div>
            </div>
            <div class="card">
                <img src="./img/kamera1.jpg" class="card-img-top" alt="kamera">
                <div class="card-body">
                    <h5 class="card-title">Camera</h5>
                    <p class="card-text">1 day - Rp. 100.000,00</p>
                    <a href="#" class="btn btn-dark"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Favorite - End -->

    <!-- New - Start -->
    <div class="container mt-5">
        <h3 class="mt-5 mb-3">New Product</h3>
        <div class="card-group">
            <div class="card me-3">
                <img src="./img/kamera2.jpg" class="card-img-top" alt="kamera">
                <div class="card-body">
                    <h5 class="card-title">Camera</h5>
                    <p class="card-text">1 day - Rp. 100.000,00</p>
                    <a href="#" class="btn btn-dark"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a>
                </div>
            </div>
            <div class="card me-3">
                <img src="./img/kamera2.jpg" class="card-img-top" alt="kamera">
                <div class="card-body">
                    <h5 class="card-title">Camera</h5>
                    <p class="card-text">1 day - Rp. 100.000,00</p>
                    <a href="#" class="btn btn-dark"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a>
                </div>
            </div>
            <div class="card">
                <img src="./img/kamera2.jpg" class="card-img-top" alt="kamera">
                <div class="card-body">
                    <h5 class="card-title">Camera</h5>
                    <p class="card-text">1 day - Rp. 100.000,00</p>
                    <a href="#" class="btn btn-dark"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- New - End -->

    <!-- Testimoni - Start -->
    <div class="container my-5 py-4 rounded" style="background-color: rgba(199, 199, 199, 0.2)">
        <h3 class="text-center mb-4">Testimoni</h3>
        <div class="row">
            <div class="col text-center">
                <img src="./img/profile_temp.jpg" class="rounded-circle" alt="profile" style="width: 150px;">
                <div class="mt-5">
                    <h5 class="mb-3">Profile 1</h5>
                    <p>
                        <i class="fas fa-quote-left fa-xl text-primary"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dolorum doloribus magnam tempore officiis, pariatur nihil quasi eum voluptatum sunt! Soluta ullam culpa saepe sit eveniet inventore atque assumenda voluptatem ut ipsum libero, repellat nulla sequi rerum aliquid quos? Reiciendis?
                        <i class="fas fa-quote-right fa-xl text-primary"></i>
                    </p>
                </div>
            </div>
            <div class="col text-center">
                <img src="./img/profile_temp.jpg" class="rounded-circle" alt="profile" style="width: 150px;">
                <div class="mt-5">
                    <h5 class="mb-3">Profile 2</h5>
                    <p>
                        <i class="fas fa-quote-left fa-xl text-primary"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dolorum doloribus magnam tempore officiis, pariatur nihil quasi eum voluptatum sunt! Soluta ullam culpa saepe sit eveniet inventore atque assumenda voluptatem ut ipsum libero, repellat nulla sequi rerum aliquid quos? Reiciendis?
                        <i class="fas fa-quote-right fa-xl text-primary"></i>
                    </p>
                </div>
            </div>
            <div class="col text-center">
                <img src="./img/profile_temp.jpg" class="rounded-circle" alt="profile" style="width: 150px;">
                <div class="mt-5">
                    <h5 class="mb-3">Profile 3</h5>
                    <p>
                        <i class="fas fa-quote-left fa-xl text-primary"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dolorum doloribus magnam tempore officiis, pariatur nihil quasi eum voluptatum sunt! Soluta ullam culpa saepe sit eveniet inventore atque assumenda voluptatem ut ipsum libero, repellat nulla sequi rerum aliquid quos? Reiciendis?
                        <i class="fas fa-quote-right fa-xl text-primary"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimoni - End -->

    <!-- Footer - Start -->
    <footer class="text-center text-lg-start" style="background-color: rgba(29, 29, 29, 0.2)">

        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto my-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">SewaKamera</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam possimus deleniti ipsa veniam
                        aliquid culpa. Suscipit pariatur modi, dolor natus quibusdam dolorem laboriosam amet blanditiis
                        quasi aperiam neque placeat dolores.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 my-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p><i class="fas fa-home mr-3"></i> Surabaya, Indonesia</p>
                    <p><i class="fas fa-envelope mr-3"></i> sewakamera@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> 08 123 456 789</p>
                    <p><i class="fas fa-phone mr-3"></i> 08 987 654 321</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Copyright: SewaKamera
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer - End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>