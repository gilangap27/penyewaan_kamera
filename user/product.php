<?php
require '../functions.php';

$products = query('SELECT * FROM product');

?>

<?php require './template/header.php' ?>

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
                            <a href="detail.php?id=<?= $pro['id']; ?>" class="btn btn-dark"><i class="fa-solid fa-camera-retro"></i> Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Product - End -->

</main>
<!-- Main - End -->

<?php require './template/footer.php' ?>