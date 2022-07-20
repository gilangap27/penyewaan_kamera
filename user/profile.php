<?php require '../functions.php' ?>

<?php require './template/header.php' ?>

<style>
    a {
        text-decoration: none;
        cursor: pointer;
    }

    .img-profile {
        object-fit: cover;
        width: 150px;
        height: 150px;
    }
</style>

<?php $user = query('SELECT * FROM user WHERE id = ' . $_SESSION['id_user'])[0] ?>

<section>
    <div class="container py-5">
        <h2 class="mb-3">Profile</h2>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4 h-100">
                    <div class="card-body text-center">
                        <img src="<?= $ROOT ?>img/user/<?= $user['gambar']; ?>" alt="avatar" class="rounded-circle img-profile my-3">
                        <div class="d-flex justify-content-center mb-2">
                            <a href="<?= $ROOT ?>user/edit_profile.php" class="text-primary"><i class="fa-solid fa-pen-to-square"></i> Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card mb-4 h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $user['nama']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $user['email']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No. HP</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $user['noHP']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $user['alamat']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require './template/footer.php' ?>