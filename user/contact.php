<?php require './template/header.php' ?>

<!-- Content - Start -->
<div class="container">
    <h2 class="text-center mb-4">Contact</h2>
    <div class="row">
        <div class="col">
            <img src="../img/contact.jpg" class="rounded" alt="contact" width="500px" height="700px">
        </div>
        <div class="col">
            <!-- Alamat - Start -->
            <div class="alamat">
                <h4>Alamat</h4>
                <p>Jl. Raya Kedung Baruk No.98, Kedung Baruk, Kec. Rungkut, Kota Surabaya, Jawa Timur 60298, Indonesia</p>
            </div>
            <!-- Alamat - End -->

            <!-- Kontak - Start -->
            <div class="kontak">
                <h4>Kontak</h4>
                <p>Telepon : (021) 234582121</p>
                <p>WA : (08) 123456789</p>
                <p>WA : (08) 987654321</p>
                <p>Email : sewakamera@gmail.com</p>
            </div>
            <!-- Kontak - End -->

            <!-- Form Pesan - Start -->
            <h4>Kirim Pesan</h4>
            <form action="contact.php" method="post">
                <div class="form-group mb-3">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group mb-3">
                    <label for="message">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
            <!-- Form Pesan - End -->

        </div>
    </div>
</div>
<!-- Content - End -->

<?php require './template/footer.php' ?>