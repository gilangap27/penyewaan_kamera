<?php require './templates/header.php' ?>

<?php
if (!isset($_SESSION['id_admin'])) {
    header("Location: ./index.php");
}

$id = $_GET['id'];

$pembayaran = query('SELECT * FROM pembayaran WHERE id = ' . $id)[0];
$kamera = query('SELECT * FROM product WHERE id = ' . $pembayaran['id_product'])[0];
?>


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Detail Transaksi</h1>
</div>

<div class="card shadow mb-4 text-dark">
    <div class="card-body">

        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="row">
                <div class="col">
                    <!-- Name -->
                    <b>Nama Penyewa : </b>
                    <p><?= $pembayaran['nama_penyewa']; ?></p>
                </div>
                <div class="col">
                    <!-- Email -->
                    <b>Nama Penyewa : </b>
                    <p><?= $pembayaran['email_penyewa']; ?></p>
                </div>
            </div>
            <!-- Alamat -->
            <b>Alamat Penyewa : </b>
            <p><?= $pembayaran['alamat']; ?></p>
            <div class="row">
                <div class="col-6">
                    <!-- Name Product -->
                    <b>Nama Product : </b>
                    <p><?= $kamera['nama']; ?></p>
                </div>
                <div class="col-2">
                    <!-- Lama Sewa -->
                    <b>Lama Sewa : </b>
                    <p><?= $pembayaran['lama_sewa']; ?></p>
                </div>
                <div class="col">
                    <!-- Total Sewa -->
                    <b>Tanggal Sewa : </b>
                    <p><?= $pembayaran['tanggal_sewa']; ?></p>
                </div>
                <div class="col">
                    <!-- Total Sewa -->
                    <b>Tanggal Kembali : </b>
                    <p><?= $pembayaran['tanggal_kembali']; ?></p>
                </div>
            </div>

            <hr>
            <h3>Pembayaran</h3>
            <div class="row">
                <div class="col">
                    <!-- Total Sewa -->
                    <b>Total Sewa : </b>
                    <p>Rp. <?= number_format($pembayaran['total'], 2); ?></p>
                </div>
                <div class="col">
                    <!-- DP Sewa -->
                    <b>Uang Muka (DP) : </b>
                    <p>Rp. <?= number_format($pembayaran['dp'], 2); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Total Bayar -->
                    <b>Total Sewa : </b>
                    <p>Rp. <?= number_format($pembayaran['total'] - $pembayaran['dp'], 2); ?></p>
                </div>
                <div class="col">
                    <!-- Bayar Sewa -->
                    <label class="form-label"><b>Bayar</b></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp. </span>
                        <input type="number" class="form-control" name="bayar" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <a href="./transaction.php" class="btn btn-secondary">Cancel</a>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<?php
if (isset($_POST['submit'])) {
    if (detail_pembayaran($_POST) > 0) {
?>
        <script>
            swal("Selamat!", "Pembayaran berhasil!<br><?php if (isset($_SESSION['kembalian'])) {
                                                            echo "Kembalian anda Rp. " . number_format($_SESSION['kembalian'], 2);
                                                            unset($_SESSION['kembalian']);
                                                        } ?>", "success")
                .then(function() {
                    window.location = "./transaction.php";
                });
        </script>
    <?php
    } else {
    ?>
        <script>
            swal("Maaf!", "Pembayaran tidak sesuai!", "error")
                .then(function() {
                    window.location = "./detail_transaction.php?id=<?= $id ?>";
                });
        </script>
<?php
    }
}
?>

<?php require './templates/footer.php' ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="application/javascript">
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>