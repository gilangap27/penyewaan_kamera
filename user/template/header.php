<?php
session_start();

require '../functions.php';
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
        pre {
            font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
        }

        .img-pre {
            object-fit: cover;
            width: 400px;
            height: 400px;
        }

        .img-thumbnail {
            object-fit: cover;
            width: 250px;
            height: 250px;
        }

        icon-shape {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            vertical-align: middle;
        }

        .icon-sm {
            width: 2rem;
            height: 2rem;

        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        li {
            list-style: none;
        }

        .labelexpanded {
            font-size: 12px;
        }

        .labelexpanded>input {
            display: none;
        }

        .labelexpanded input:checked+.radio-btns {
            background-color: #cfcfcf;
        }

        .radio-btns {
            height: 80px;
            border-radius: 10px;
            position: relative;
            text-align: center;
            padding: 5px 15px;
            cursor: pointer;
            float: left;
            margin-right: 15px;
        }

        .radio-btns>img {
            width: 100px;
        }

        .dropdown.no-arrow .dropdown-toggle::after {
            display: none
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
                        <a class="nav-link" href="../user/product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../user/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../user/contact.php">Contact</a>
                    </li>
                    <?php if (!isset($_SESSION['id_user'])) : ?>
                        <li class="nav-item mx-5">
                            <a class="btn btn-outline-dark" href="../login.php">Login</a>
                        </li>
                    <?php else : ?>
                        <?php $user = query('SELECT * FROM user WHERE id = ' . $_SESSION['id_user'])[0] ?>
                        <!-- Profile Nav - Start -->
                        <li class="nav-item dropdown no-arrow ms-5">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                                <img class="img-profile rounded-circle" src="../img/user/<?= $user['gambar'] ?>" width="30">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-list"></i> Booking List</a></li>
                                <li><a class="dropdown-item" href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- Profile Nav - End -->
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar - End -->