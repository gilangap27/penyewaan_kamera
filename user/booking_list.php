<?php require '../functions.php' ?>

<?php require './template/header.php' ?>

<?php $user = query('SELECT * FROM user WHERE id = ' . $_SESSION['id_user'])[0] ?>

<?php $pembayaran = query("SELECT * FROM pembayaran WHERE nama_penyewa = '" . $user['nama'] . "'") ?>

<div class="container py-3">
    <h4 class="mb-4">Booking List</h4>
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Kamera</th>
                <th scope="col">Harga</th>
                <th scope="col">Tanggal Sewa</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pembayaran as $pem) : ?>
                <?php $kamera = query("SELECT * FROM product WHERE id = " . $pem['id_product'])[0] ?>
                <tr>
                    <th scope="row">
                        <img src="../img/product/<?= $kamera['gambar'] ?>" alt="kamera" width="75px" height="75px">
                    </th>
                    <td class="align-middle">
                        <b><?= $kamera['brand'] ?></b>
                        <p><?= $kamera['nama'] ?></p>
                    </td>
                    <td style="vertical-align: middle;">Rp. <?= number_format($pem['total'], 2) ?></td>
                    <td style="vertical-align: middle;"><?= $pem['tanggal_sewa'] ?></td>
                    <td style="vertical-align: middle;">
                        <span class="badge"><?= $pem['status'] ?></span>
                    </td>
                    <td style="vertical-align: middle;">
                        <a href="booking_detail.php?id=<?= $pem['id'] ?>" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php require './template/footer.php' ?>

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