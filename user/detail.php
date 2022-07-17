<?php require './template/header.php' ?>

<?php

$id = $_GET['id'];

$product = query('SELECT * FROM product WHERE id = ' . $id)[0];

if (isset($_SESSION['id_user'])) {
    $user = query('SELECT * FROM user WHERE id = ' . $_SESSION['id_user'])[0];
}

?>

<style>
    * {
        box-sizing: border-box;
    }

    .rating {
        display: flex;
        justify-content: start;
        overflow: hidden;
        flex-direction: row-reverse;
        position: relative;
    }

    .rating-0 {
        filter: grayscale(100%);
    }

    .rating>input {
        display: none;
    }

    .rating>label {
        cursor: pointer;
        width: 40px;
        height: 40px;
        margin-top: auto;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 76%;
        transition: .3s;
    }

    .rating>input:checked~label,
    .rating>input:checked~label~label {
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
    }


    .rating>input:not(:checked)~label:hover,
    .rating>input:not(:checked)~label:hover~label {
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
    }
</style>

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
            <?php if (isset($_SESSION['id_user'])) : ?>
                <buttobutton class="btn btn-dark mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Sewa Kamera</buttobutton>
            <?php else : ?>
                <button class="btn btn-dark mt-3" data-bs-toggle="modal" disabled><i class="fa-solid fa-lock"></i> Sewa Kamera</button>
                <p class="mt-2 text-danger">Kamu harus login untuk bisa sewa</p>
            <?php endif; ?>
        </div>
    </div>
    <!-- Toogle Tab - Start -->
    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <a class="nav-link text-dark active" data-bs-toggle="tab" href="#msg">Overview</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="tab" href="#pro">Ulasan</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="msg">
                <p class="mb-2"><b>Deskripsi : </b> <br><?= $product['deskripsi']; ?></p>
                <pre class="mb-2 text-dark"><b>Kelengkapan : </b> <br><?= $product['kelengkapan']; ?></pre>
                <pre class="mb-2 text-dark"><b>Spesifikasi : </b> <br><?= $product['spek']; ?></pre>
            </div>
            <div class="tab-pane container fade" id="pro">
                <!-- Form Ulasan - Start -->
                <h4>Ulasan</h4>
                <p>Kirim ulasan anda terkait produk ini</p>
                <?php if (isset($_SESSION['id_user'])) : ?>
                    <form action="./tambah_ulasan.php" method="post">
                        <input type="hidden" name="id_kamera" value="<?= $product['id'] ?>">
                        <input type="hidden" name="id_user" value="<?= $user['id'] ?>">
                        <div class="form-group mb-3">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" value="<?= $user['nama'] ?>">
                        </div>
                        <!-- Star Rating - Start -->
                        <p class="mb-0">Rating</p>
                        <div class="feedback">
                            <div class="rating mb-3">
                                <input type="radio" name="rating" id="rating-5" value="5">
                                <label for="rating-5"></label>
                                <input type="radio" name="rating" id="rating-4" value="4">
                                <label for="rating-4"></label>
                                <input type="radio" name="rating" id="rating-3" value="3">
                                <label for="rating-3"></label>
                                <input type="radio" name="rating" id="rating-2" value="2">
                                <label for="rating-2"></label>
                                <input type="radio" name="rating" id="rating-1" value="1">
                                <label for="rating-1"></label>
                            </div>
                        </div>
                        <!-- Star Rating - End -->
                        <div class="form-group mb-3">
                            <label for="message">Ulasan</label>
                            <textarea class="form-control" id="message" name="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                    </form>
                <?php else : ?>
                    <p class="text-danger">Kamu harus login untuk bisa mengirim ulasan</p>
                <?php endif; ?>
                <!-- Form Ulasan - End -->
            </div>
        </div>
    </div>
    <!-- Toogle Tab - End -->
</div>
<!-- Content - End -->

<?php require './template/footer.php' ?>

<?php if (isset($_SESSION['id_user'])) : ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Menu Sewa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./sewa.php" method="POST">
                        <input type="hidden" class="form-control" name="id_kamera" value="<?= $product['id']; ?>">
                        <div class="mb-3">
                            <label for="produk" class="col-form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="produk" value="<?= $product['nama']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="produk" class="col-form-label">Harga Produk</label>
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
                                        <input id="kurangBtn" type="button" value="-" class="button-minus border bg-dark text-white rounded-circle icon-shape icon-sm mx-1 ">
                                        <input type="number" step="1" max="10" value="1" id="quantity" class="quantity-field border-0 text-center w-25" name="lama_sewa">
                                        <input id="tambahBtn" type="button" value="+" class="button-plus border bg-dark text-white rounded-circle icon-shape icon-sm ">
                                    </div>
                                </div>
                            </div>
                            <!-- Quantity - End -->
                            <div class="mb-3">
                                <label for="produk" class="col-form-label">Tanggal Sewa</label>
                                <input type="date" class="form-control" name="tanggal_sewa" id="produk" value="<?= date('Y-m-d') ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="produk" class="col-form-label">Email Penyewa</label>
                                <input type="email" class="form-control" name="email" id="produk" value="<?= $user['email'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="produk" class="col-form-label">Nama Penyewa</label>
                                <input type="text" class="form-control" name="nama" id="produk" value="<?= $user['nama'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="produk" class="col-form-label">Alamat Penyewa</label>
                                <textarea class="form-control" name="alamat" id="message-text" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark">Booking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif ?>

    <script src="../js/script.js"></script>