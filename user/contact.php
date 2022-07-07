<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar - Start -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top my-4">
        <div class="container">
            <a class="navbar-brand" href="../index.php">SewaKamera</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../user/product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../user/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../user/contact.php">Contact</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="btn btn-outline-dark" href="../login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar - End -->

    <!-- Content - Start -->
    <div class="container">
        <h2 class="text-center mb-4">Contact</h2>
        <div class="row">
            <div class="col">
                <img src="../img/contact.jpg" class="rounded" alt="contact" width="500px" height="700px">
            </div>
            <div class="col">
                <!-- Alamat - Start -->
                <div class="alamat">
                    <h4>Alamat</h4>
                    <p>Jl. Raya Kedung Baruk No.98, Kedung Baruk, Kec. Rungkut, Kota Surabaya, Jawa Timur 60298, Indonesia</p>
                </div>
                <!-- Alamat - End -->

                <!-- Kontak - Start -->
                <div class="kontak">
                    <h4>Kontak</h4>
                    <p>Telepon : (021) 234582121</p>
                    <p>WA : (08) 123456789</p>
                    <p>WA : (08) 987654321</p>
                    <p>Email : sewakamera@gmail.com</p>
                </div>
                <!-- Kontak - End -->

                <!-- Form Pesan - Start -->
                <h4>Kirim Pesan</h4>
                <form action="contact.php" method="post">
                    <div class="form-group mb-3">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="message">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
                <!-- Form Pesan - End -->

            </div>
        </div>
    </div>
    <!-- Content - End -->

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