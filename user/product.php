<?php require '../functions.php' ?>

<?php require './template/header.php' ?>

<?php
$products = query('SELECT * FROM product WHERE stok > 0');

if (isset($_POST["cari"])) {
    $products = cari($_POST['keyword']);
}

?>


<!-- Main - Start -->
<main class="container">
    <!-- Search - Start -->
    <form action="" method="POST">
        <div class="input-group mb-3" style="width: 50%;">
            <input type="text" class="form-control" name="keyword" placeholder="Search" aria-label="Recipient's username" autocomplete="off">
            <button class="btn btn-dark" name="cari" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<?php
if ($_SESSION['pembayaran'] == true) {
?>
    <script>
        swal("Selamat!", "Pembayaran anda berhasil!", "success")
            .then(function() {
                window.location = "./product.php";
            });
    </script>
<?php
    unset($_SESSION['pembayaran']);
}

?>