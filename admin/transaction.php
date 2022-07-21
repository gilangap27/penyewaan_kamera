<?php include './templates/header.php' ?>

<?php
if (!isset($_SESSION['id_admin'])) {
    header("Location: ./index.php");
}

$pembayaran = query("SELECT * FROM pembayaran");
?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Transaksi</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Product</th>
                        <th>Lama</th>
                        <th>Total</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Cek jika data kosong -->
                    <?php if (!$pembayaran) : ?>
                        <tr>
                            <td colspan="8" class="text-center">Data Kosong</td>
                        </tr>
                    <?php endif; ?>
                    <!-- Looping -->
                    <?php foreach ($pembayaran as $pemb) : ?>
                        <?php $kamera = query("SELECT * FROM product WHERE id = " . $pemb['id_product'])[0];
                        ?>
                        <tr>
                            <td><?= $pemb['nama_penyewa']; ?></td>
                            <td><?= $kamera['nama']; ?></td>
                            <td><?= $pemb['lama_sewa']; ?></td>
                            <td>Rp.<?= number_format($pemb['total'], 2); ?></td>
                            <td><?= $pemb['tanggal_sewa']; ?></td>
                            <td><?= $pemb['tanggal_kembali']; ?></td>
                            <td>
                                <span class="badge text-white"><?= $pemb['status']; ?></span>
                            </td>
                            <td style="width: 125px;">
                                <?php if ($pemb['status'] == 'Pending') : ?>
                                    <span class="badge badge-primary"><a href="./detail_transaction.php?id=<?= $pemb['id'] ?>">Bayar</a></span>
                                <?php endif; ?>
                                <span class="badge badge-danger"><a href="" data-bs-toggle="modal" data-bs-target="#hapusModal">Delete</a></span>
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
                <a href="./delete_transaction.php?id=<?= $pemb['id'] ?>" type="button" class="btn btn-danger">Yakin</a>
            </div>
        </div>
    </div>
</div>

<?php include './templates/footer.php' ?>

<script>
    const badges = document.querySelectorAll('.badge');
    badges.forEach(badge => {
        switch (badge.textContent) {
            case "Pending":
                badge.classList.add('bg-warning');
                break;
            case "Canceled":
                badge.classList.add('bg-danger');
                break;
            case "Complete":
                badge.classList.add('bg-success');
                break;

            default:
                break;
        }
    });
</script>