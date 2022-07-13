<?php

require '../functions.php';

$pembayaran = query("SELECT * FROM pembayaran");

?>

<?php include './templates/header.php' ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Transaction</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Product</th>
                        <th>Lama Sewa</th>
                        <th>Total</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
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
                            <td>
                                <span class="badge badge-primary"><a href="./edit_transaction.php?id=<?= $pemb['id'] ?>">Edit</a></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include './templates/footer.php' ?>

<script>
    const badges = document.querySelectorAll('.badge');
    badges.forEach(badge => {
        console.log(badge.textContent);
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