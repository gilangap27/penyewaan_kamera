<?php require '../functions.php' ?>

<?php require './template/header.php' ?>

<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        cursor: inherit;
        display: block;
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
        <h2 class="mb-3">Edit Profile</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?= $user['id']; ?>" name="id">
            <input type="hidden" value="<?= $user['gambar']; ?>" name="gambarAwal">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="<?= $ROOT ?>img/user/<?= $user['gambar']; ?>" alt="avatar" class="rounded-circle img-profile my-3" id="gambar">
                            <div class="d-flex justify-content-center mb-4">
                                <span class="btn btn-outline-primary btn-file">
                                    <i class="fa-solid fa-pen"></i> Upload Gambar <input type="file" name="gambar" onchange="loadFile(event)">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card mb-4 h-100">
                        <div class="card-body">
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Nama -->
                                <label for="nama-input" class="form-label">Nama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nama-input" aria-describedby="basic-addon3" name="nama" placeholder="Masukkan nama anda" value="<?= $user['nama']; ?>">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label for="email-input" class="form-label">Email</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="email-input" aria-describedby="basic-addon3" name="email" placeholder="Masukkan email anda" value="<?= $user['email']; ?>">
                                    </div>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label for="hp-input" class="form-label">No. HP</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="hp-input" aria-describedby="basic-addon3" name="noHP" placeholder="Masukkan no. HP anda" value="<?= $user['noHP']; ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- Alamat -->
                            <div class="mb-3">
                                <label for="alamat-input" class="form-label">Alamat</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="alamat-input" aria-describedby="basic-addon3" name="alamat" placeholder="Masukkan alamat anda" rows="4"><?= $user['alamat']; ?></textarea>
                                </div>
                            </div>

                            <!-- Save changes button-->
                            <a href="<?= $ROOT ?>user/profile.php" class="btn btn-secondary mt-3" type="button">Batal</a>
                            <button class="btn btn-primary mt-3" type="submit" name="submit">Simpan</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    var loadFile = function(event) {
        var image = document.getElementById('gambar');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

<?php require './template/footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<?php
if (isset($_POST['submit'])) {
    if (ubah_profile($_POST) > 0) {
?>
        <script>
            swal("Selamat!", "Data berhasil diupdate!", "success")
                .then(function() {
                    window.location = "./profile.php";
                });;
        </script>
    <?php
    } else {
    ?>
        <script>
            swal("Maaf!", "Data gagal diupdate!", "error")
                .then(function() {
                    window.location = "./edit_profile.php";
                });;
        </script>
<?php
    }
}
?>