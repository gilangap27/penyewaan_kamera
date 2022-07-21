<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= $ROOT ?>css/user.css">
</head>

<body>
    <!-- Navbar - Start -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top my-4">
        <div class="container">
            <a class="navbar-brand" href="<?= $ROOT ?>">SewaKamera</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= $ROOT ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $ROOT ?>user/product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $ROOT ?>user/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $ROOT ?>user/contact.php">Contact</a>
                    </li>
                    <?php if (!isset($_SESSION['id_user'])) : ?>
                        <li class="nav-item mx-5">
                            <a class="btn btn-outline-dark" href="<?= $ROOT ?>login.php">Login</a>
                        </li>
                    <?php else : ?>
                        <?php $user = query('SELECT * FROM user WHERE id = ' . $_SESSION['id_user'])[0] ?>
                        <!-- Profile Nav - Start -->
                        <li class="nav-item dropdown no-arrow ms-5">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                                <img class="rounded-circle" src="<?= $ROOT ?>/img/user/<?= $user['gambar'] ?>" width="30" height="30" style="object-fit: cover;">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="<?= $ROOT ?>user/profile.php"><i class="fa-solid fa-user"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="<?= $ROOT ?>user/booking_list.php"><i class="fa-solid fa-list"></i> Booking List</a></li>
                                <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- Profile Nav - End -->
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar - End -->