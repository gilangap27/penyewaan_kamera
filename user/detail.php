<?php

require '../functions.php';

$id = $_GET['id'];

$product = query('SELECT * FROM product WHERE id = ' . $id)[0];

?>

<?php require './template/header.php' ?>

<!-- Content - Start -->
<div class="container">
    <div class="row">
        <div class="col-5">
            <img src="../img/product/<?= $product['gambar']; ?>" class="img-pre mb-3" alt="kamera">
        </div>
        <div class="col">
            <p class="mt-3 mb-0"><?= $product['brand']; ?></p>
            <h3 class="mb-2"><?= $product['nama']; ?></h3>
            <h5 class="mt-3">Harga : <br>Rp. <?= number_format($product['harga'], 2); ?>/hari</h5>
            <h6>Stok : <?= $product['stok']; ?></h6>
            <a href="#" class="btn btn-dark mt-3">Sewa Kamera</a>
        </div>
    </div>
    <p class="mb-2"><b>Deskripsi : </b> <br><?= $product['deskripsi']; ?></p>
    <pre class="mb-2 text-dark"><b>Kelengkapan : </b> <br><?= $product['kelengkapan']; ?></pre>
    <pre class="mb-2 text-dark"><b>Spesifikasi : </b> <br><?= $product['spek']; ?></pre>
</div>
<!-- Content - End -->

<?php require './template/footer.php' ?>