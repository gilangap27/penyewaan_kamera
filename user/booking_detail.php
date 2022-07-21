<?php require '../functions.php' ?>

<?php require './template/header.php' ?>

<?php

$id = $_GET['id'];

$pembayaran = query("SELECT * FROM pembayaran WHERE id = $id")[0];

$kamera = query("SELECT * FROM product WHERE id = " . $pembayaran['id_product'])[0];

?>

<!-- Content - Start -->
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="../img/product/62d75cabb573b.jpg" alt="kamera" width="250px" height="250px">
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <h6><?= $kamera['brand']; ?></h6>
                    <h5><?= $kamera['nama']; ?></h5>
                    <p>Harga : Rp. <?= number_format($kamera['harga'], 2); ?>/hari</p>
                </div>
                <div class="col align-self-center text-center">
                    <div>
                        <b>Status :</b> <span class="badge"><?= $pembayaran['status'] ?></span>
                    </div>
                    <?php if ($pembayaran['status'] == 'Pending') : ?>
                        <div class="mt-2">
                            <a href="<?= $ROOT ?>user/cancel_booking.php?id=<?= $id ?>" class="btn btn-danger"><i class="fa-solid fa-x"></i> Cancel Sewa</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <hr>
            <h4 class="mb-3">Detail Pembayaran</h4>
            <ul>
                <li>Lama Sewa : <?= $pembayaran['lama_sewa']; ?> hari</li>
                <li>Tanggal Penyewaan : <?= $pembayaran['tanggal_sewa']; ?></li>
                <li>Tanggal Kembali : <?= $pembayaran['tanggal_kembali']; ?></li>
                <li>Total : Rp. <?= number_format($pembayaran['total'], 2); ?></li>
                <li>Uang Muka (DP) : Rp. <?= number_format($pembayaran['dp'], 2); ?></li>
                <li>Total Pembayaran : Rp. <?= number_format($pembayaran['total'] - $pembayaran['dp'], 2); ?></li>
            </ul>
            <div class="mt-3">
                <a href="./booking_list.php" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
<!-- Content - End -->

<?php require './template/footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<?php
if ($_SESSION['canceled'] == true) {
?>
    <script>
        swal("Terima Kasih!", "Pembatalan sewa anda berhasil!", "success")
            .then(function() {
                window.location = "./booking_list.php";
            });
    </script>
<?php
    unset($_SESSION['canceled']);
}
?>

<script>
    const badges = document.querySelectorAll('.badge');
    badges.forEach(badge => {
        switch (badge.textContent) {
            case "Pending":
                badge.classList.add('text-bg-warning');
                break;
            case "Canceled":
                badge.classList.add('text-bg-danger');
                break;
            case "Complete":
                badge.classList.add('text-bg-success');
                break;

            default:
                break;
        }
    });
</script>