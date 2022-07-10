<?php
require '../functions.php';

$products = query("SELECT * FROM product");

?>


<?php require './templates/header.php' ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Product</h1>

<a href="./add_product.php" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Add new product</a>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- looping -->
                    <?php $i = 1;
                    foreach ($products as $pro) : ?>
                        <tr>
                            <td><?= $pro['nama']; ?></td>
                            <td>Rp. <?= $pro['harga']; ?></td>
                            <td><?= $pro['stok']; ?></td>
                            <td>
                                <span class="badge bg-success"><a href="detail_product.php?id=<?= $pro['id']; ?>">Detail</a></span>
                                <span class=" badge bg-warning"><a href="edit_product.php?id=<?= $pro['id']; ?>">Edit</a></span>
                                <span class="badge bg-danger"><a href="hapus.php?id=<?= $pro['id']; ?>" onclick="return confirm ('apakah anda yakin?');">Hapus</a></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require './templates/footer.php' ?>