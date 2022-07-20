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
                    <label class="form-label">Name Penyewa</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="<?= $pembayaran['nama_penyewa']; ?>" readonly>
                    </div>
                </div>
                <div class="col">
                    <!-- Email -->
                    <label class="form-label">Email Penyewa</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="<?= $pembayaran['email_penyewa']; ?>" readonly>
                    </div>
                </div>
            </div>
            <!-- Alamat -->
            <label class="form-label">Alamat Penyewa</label>
            <div class="input-group mb-3">
                <textarea type="text" class="form-control" rows="3" readonly><?= $pembayaran['alamat']; ?></textarea>
            </div>
            <div class="row">
                <div class="col-6">
                    <!-- Name Product -->
                    <label class="form-label">Nama Product</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="<?= $kamera['nama']; ?>" readonly>
                    </div>
                </div>
                <div class="col-2">
                    <!-- Lama Sewa -->
                    <label class="form-label">Lama Sewa</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="<?= $pembayaran['lama_sewa']; ?>" readonly>
                    </div>
                </div>
                <div class="col">
                    <!-- Total Sewa -->
                    <div class="input-group mb-3">
                        <label class="form-label">Tanggal Sewa</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" value="<?= $pembayaran['tanggal_sewa'] ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <h3>Pembayaran</h3>
            <div class="row">
                <div class="col">
                    <!-- Total Sewa -->
                    <label class="form-label">Total Sewa</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp. </span>
                        <input type="text" class="form-control" value="<?= $pembayaran['total']; ?>" readonly>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="col">
                    <!-- DP Sewa -->
                    <label class="form-label">Uang Muka (DP)</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp. </span>
                        <input type="text" class="form-control" value="<?= $pembayaran['dp']; ?>" readonly>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Total Bayar -->
                    <label class="form-label">Total Bayar</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp. </span>
                        <input type="text" class="form-control" value="<?= $pembayaran['total'] - $pembayaran['dp']; ?>" readonly>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="col">
                    <!-- Bayar Sewa -->
                    <label class="form-label">Bayar</label>
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
            swal("Selamat!", "Pembayaran berhasil!", "success")
                .then(function() {
                    window.location = "./transaction.php";
                });;
        </script>
    <?php
    } else {
        var_dump("gagal");
    ?>
        <script>
            swal("Maaf!", "Pembayaran tidak sesuai!", "error")
                .then(function() {
                    window.location = "./detail_transaction.php?id=<?= $id ?>";
                });;
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