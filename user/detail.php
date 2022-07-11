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
            <a href="#" class="btn btn-dark mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Sewa Kamera</a>
        </div>
    </div>
    <p class="mb-2"><b>Deskripsi : </b> <br><?= $product['deskripsi']; ?></p>
    <pre class="mb-2 text-dark"><b>Kelengkapan : </b> <br><?= $product['kelengkapan']; ?></pre>
    <pre class="mb-2 text-dark"><b>Spesifikasi : </b> <br><?= $product['spek']; ?></pre>
</div>
<!-- Content - End -->

<?php require './template/footer.php' ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="produk" class="col-form-label">Nama Produk:</label>
                        <input type="text" class="form-control" id="produk" value="<?= $product['nama']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="produk" class="col-form-label">Harga Produk:</label>
                        <input type="text" class="form-control" id="produk" value="Rp. <?= number_format($product['harga'], 2) ?>/hari" readonly>
                    </div>
                    <div class="mb-3">
                        <!-- Quantity - Start -->
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-dark">Lama Sewa (hari)</p>
                                </div>
                                <div class="input-group w-auto justify-content-end align-items-center">
                                    <input id="kurangBtn" type="button" value="-" class="button-minus border rounded-circle icon-shape icon-sm mx-1 ">
                                    <input type="number" step="1" max="10" value="1" id="quantity" class="quantity-field border-0 text-center w-25">
                                    <input id="tambahBtn" type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm ">
                                </div>
                            </div>
                        </div>
                        <!-- Quantity - End -->
                        <div class="mb-3">
                            <label for="produk" class="col-form-label">Nama Penyewa:</label>
                            <input type="text" class="form-control" id="produk" value="">
                        </div>
                        <div class="mb-3">
                            <label for="produk" class="col-form-label">Alamat Penyewa:</label>
                            <textarea class="form-control" id="message-text" rows="3"></textarea>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Sewa</button>
            </div>
        </div>
    </div>
</div>

<script src="./js/script.js"></script>