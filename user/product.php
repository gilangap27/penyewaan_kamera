<?php
require '../functions.php';

$products = query('SELECT * FROM product');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <style>
        .img-thumbnail {
            object-fit: cover;
            width: 250px;
            height: 250px;
        }
    </style>
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
                        <a class="nav-link active" href="../user/product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../user/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../user/contact.php">Contact</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="btn btn-outline-dark" href="../login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar - End -->

    <!-- Main - Start -->
    <main class="container">
        <!-- Search - Start -->
        <form action="" method="POST">
            <div class="input-group mb-3" style="width: 50%;">
                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username">
                <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
            </div>
        </form>
        <!-- Search - End -->

        <!-- Product - Start -->
        <div class="row ">
            <!-- my php code which uses x-path to get results from xml query. -->
            <?php foreach ($products as $pro) : ?>
                <div class="col-3">
                    <div class="card-columns-fluid">
                        <div class="card mb-5" style="width: 250px;">
                            <img src="../img/product/<?= $pro['gambar'] ?>" class="card-img-top img-thumbnail" alt="kamera">
                            <div class="card-body">
                                <h5 class="card-title"><?= $pro['nama']; ?></h5>
                                <p class="card-text">1 Hari - Rp. <?= number_format($pro['harga'], 2); ?></p>
                                <a href="detail.php?id=<?= $pro['id']; ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Product - End -->

    </main>
    <!-- Main - End -->

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