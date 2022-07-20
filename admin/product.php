<?php include './templates/header.php' ?>

<?php
if (!isset($_SESSION['id_admin'])) {
    header("Location: ./index.php");
}

$products = query("SELECT * FROM product");
?>

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
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Cek jika data kosong -->
                    <?php if (!$products) : ?>
                        <tr>
                            <td colspan="4" class="text-center">Data Kosong</td>
                        </tr>
                    <?php endif; ?>
                    <!-- looping -->
                    <?php $i = 1;
                    foreach ($products as $pro) : ?>
                        <tr>
                            <td><?= $pro['nama']; ?></td>
                            <td>Rp. <?= $pro['harga']; ?></td>
                            <td><?= $pro['stok']; ?></td>
                            <td>
                                <span class="badge bg-success"><a class="badge-link" href="detail_product.php?id=<?= $pro['id']; ?>">Detail</a></span>
                                <span class=" badge bg-warning"><a class="badge-link" href="edit_product.php?id=<?= $pro['id']; ?>">Edit</a></span>
                                <span class="badge bg-danger"><a class="badge-link" href="" data-bs-toggle="modal" data-bs-target="#hapusModal">Hapus</a></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel">Anda yakin?</h5>
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus data ini!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                <a href="hapus.php?id=<?= $pro['id']; ?>" type="button" class="btn btn-danger">Yakin</a>
            </div>
        </div>
    </div>
</div>

<?php include './templates/footer.php' ?>