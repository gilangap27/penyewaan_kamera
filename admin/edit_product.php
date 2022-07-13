<?php
require '../functions.php';

$id = $_GET['id'];

$product = query('SELECT * FROM product WHERE id = ' . $id)[0];

if (isset($_POST["submit"])) {
    if (ubah_product($_POST) > 0) {
        echo "
			 <script>
				alert('data berhasil ditambahkan');
				document.location.href = './product.php';
			 </script>
			 ";
    } else {
        echo "
			 <script>
				alert('data gagal ditambahkan');
				document.location.href = './product.php';
			 </script>
			 ";
    }
}

?>

<?php require './templates/header.php' ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
</div>

<div class="card shadow mb-4 text-dark">
    <div class="card-body">

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $product["id"] ?>">
            <input type="hidden" name="gambarAwal" value="<?= $product['gambar']; ?>">

            <!-- Image Product -->
            <label class="form-label">Image Product</label>
            <div>
                <img src="../img/product/<?= $product['gambar']; ?>" class="img-thumbnail mb-3" alt="kamera" width="200px">
            </div>
            <div class="input-group mb-3">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" accept="image/*" name="gambar">
                <label class="custom-file-label" for="inputGroupFile01"><?= $product['gambar']; ?></label>
            </div>

            <!-- Name Product -->
            <label class="form-label">Name Product</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?= $product['nama']; ?>" name="nama" required>
            </div>

            <!-- Brand Product -->
            <label class="form-label">Brand</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?= $product['nama']; ?>" name="brand" required>
            </div>

            <!-- Description Product -->
            <label class="form-label">Description Product</label>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="5" name="deskripsi" required><?= $product['deskripsi']; ?></textarea>
            </div>

            <!-- Kelengkapan Product -->
            <label class="form-label">Kelengkapan Product</label>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="5" name="kelengkapan" required><?= $product['kelengkapan']; ?></textarea>
            </div>

            <!-- Spesifikasi Product -->
            <label class="form-label">Spesifikasi Product</label>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="5" name="spek" required><?= $product['spek']; ?></textarea>
            </div>

            <div class="row">
                <div class="col">
                    <!-- Price Product -->
                    <label class="form-label">Price Product</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="addon-wrapping">Rp. </span>
                        <input type="number" class="form-control" name="harga" value="<?= $product['harga']; ?>" required>
                    </div>
                </div>
                <div class="col">
                    <!-- Stock Product -->
                    <label class="form-label">Stock Product</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" value="<?= $product['stok']; ?>" name="stok" required>
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

<?php require './templates/footer.php' ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="application/javascript">
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>