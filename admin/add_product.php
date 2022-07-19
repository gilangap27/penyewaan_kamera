<?php include './templates/header.php' ?>

<?php
if (!isset($_SESSION['id_admin'])) {
    header("Location: ./index.php");
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
</div>

<div class="card shadow mb-4 text-dark">
    <div class="card-body">

        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Image Product -->
            <label class="form-label">Image Product</label>
            <div class="input-group mb-3">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" accept="image/*" name="gambar" required>
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>

            <!-- Name Product -->
            <label class="form-label">Name Product</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="nama" required>
            </div>

            <!-- Brand Product -->
            <label class="form-label">Brand</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="brand" required>
            </div>

            <!-- Description Product -->
            <label class="form-label">Description Product</label>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="5" name="deskripsi" required></textarea>
            </div>

            <!-- Kelengkapan Product -->
            <label class="form-label">Kelengkapan Product</label>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="5" name="kelengkapan" required></textarea>
            </div>

            <!-- Spesifikasi Product -->
            <label class="form-label">Spesifikasi Product</label>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="5" name="spek" required></textarea>
            </div>

            <div class="row">
                <div class="col">
                    <!-- Price Product -->
                    <label class="form-label">Price Product</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="addon-wrapping">Rp. </span>
                        <input type="number" class="form-control" name="harga" required>
                    </div>
                </div>
                <div class="col">
                    <!-- Stock Product -->
                    <label class="form-label">Stock Product</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="stok" required>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <a href="./product.php" class="btn btn-secondary">Cancel</a>
                <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<?php
if (isset($_POST['submit'])) {
    if (tambah_product($_POST)) {
?>
        <script>
            swal("Selamat!", "Data berhasil ditambahkan!", "success")
                .then(function() {
                    window.location = "./product.php";
                });;
        </script>
    <?php
    } else {
    ?>
        <script>
            swal("Maaf!", "Data gagal ditambahkan!", "error")
                .then(function() {
                    window.location = "./add_product.php";
                });;
        </script>
<?php
    }
}
?>

<?php include './templates/footer.php' ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="application/javascript">
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>