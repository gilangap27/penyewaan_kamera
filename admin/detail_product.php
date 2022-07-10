<?php
require '../functions.php';

$id = $_GET['id'];

$product = query('SELECT * FROM product WHERE id = ' . $id)[0];

?>

<?php include './templates/header.php' ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Detail Product</h1>
</div>

<div class="card shadow mb-4 text-dark">
    <div class="card-body">
        <h4 class="mb-2"><?= $product['nama']; ?></h4>

        <img src="../img/product/<?= $product['gambar']; ?>" class="img-thumbnail mb-3" alt="kamera">

        <p class="mb-2"><b>Brand : </b> <?= $product['brand']; ?></p>
        <p class="mb-2"><b>Harga : </b> Rp. <?= number_format($product['harga'], 2); ?></p>
        <p class="mb-2"><b>Stok : </b> <?= $product['stok']; ?></p>
        <p class="mb-2"><b>Deskripsi : </b> <br><?= $product['deskripsi']; ?></p>
        <pre class="mb-2 text-dark"><b>Kelengkapan : </b> <br><?= $product['kelengkapan']; ?></pre>
        <pre class="mb-2 text-dark"><b>Spesifikasi : </b> <br><?= $product['spek']; ?></pre>

    </div>
</div>

<?php include './templates/footer.php' ?>