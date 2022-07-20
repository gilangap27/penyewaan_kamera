<?php require './functions.php'; ?>

<?php require './user/template/header.php'; ?>

<?php $products = query('SELECT * FROM product ORDER BY id DESC LIMIT 3'); ?>

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
                        <img src="./img/product/<?= $pro['gambar'] ?>" class="card-img-top" alt="kamera">
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
    <h3 class="text-center mb-4">Ulasan</h3>
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


<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            </div>
            <div class="modal-body">
                Select "Logout" below if you are ready to end your current session.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="./user/logout.php" type="button" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
</div>