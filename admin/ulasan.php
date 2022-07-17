<?php
session_start();

if (!isset($_SESSION['id_admin'])) {
    header("Location: ./index.php");
}

require '../functions.php';

$ulasan = query("SELECT * FROM ulasan");

?>

<?php include './templates/header.php' ?>

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