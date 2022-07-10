<?php

require './functions.php';

$products = query('SELECT * FROM product ORDER BY id DESC LIMIT 3');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <style>
        .img-thumbnail {
            object-fit: cover;
            width: 350px;
            height: 350px;
        }
    </style>
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
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
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

    <!-- New - Start -->
    <div class="container mt-5">
        <h3 class="mt-5 mb-3">New Product</h3>
        <div class="row ">
            <!-- my php code which uses x-path to get results from xml query. -->
            <?php foreach ($products as $pro) : ?>
                <div class="col">
                    <div class="card-columns-fluid">
                        <div class="card mb-5 mr-3" style="width: 350px;">
                            <img src="./img/product/<?= $pro['gambar'] ?>" class="card-img-top img-thumbnail" alt="kamera">
                            <div class="card-body">
                                <h5 class="card-title"><?= $pro['nama']; ?></h5>
                                <p class="card-text">1 Hari - Rp. <?= number_format($pro['harga'], 2); ?></p>
                                <a href="./user/detail.php?id=<?= $pro['id']; ?>" class="btn btn-dark"><i class="fa-solid fa-camera-retro"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
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

    <?php require './user/template/footer.php' ?>