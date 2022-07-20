<?php include './templates/header.php' ?>

<?php
if (!isset($_SESSION['id_admin'])) {
    header("Location: ./index.php");
}

$ulasan = query("SELECT * FROM ulasan");
?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Message</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Product</th>
                        <th>Rating</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Cek jika data kosong -->
                    <?php if (!$ulasan) : ?>
                        <tr>
                            <td colspan="5" class="text-center">Data Kosong</td>
                        </tr>
                    <?php endif; ?>
                    <!-- Looping -->
                    <?php foreach ($ulasan as $ul) : ?>
                        <?php $kamera = query("SELECT * FROM product WHERE id=" . $ul['id_product'])[0] ?>
                        <?php $user = query("SELECT * FROM user WHERE id=" . $ul['id_user'])[0] ?>
                        <tr>
                            <td><?= $user['nama']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><?= $kamera['nama']; ?></td>
                            <td><?= $ul['rating']; ?> Star</td>
                            <td><?= $ul['pesan']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include './templates/footer.php' ?>