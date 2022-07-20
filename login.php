<?php require './functions.php'; ?>

<?php require './user/template/header.php'; ?>

<div class="container text-center" style="width: 500px;">
    <h2 class="my-5">Login Page</h2>
    <form action="" method="POST">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" name="email" class="form-control" placeholder="Email address" required />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" name="password" class="form-control" placeholder="Password" required />
        </div>

        <!-- Submit button -->
        <button type="submit" name="login" class="btn btn-dark btn-block mb-4">Sign in</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Not a member? <a class="register" href="./register.php">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>
        </div>
    </form>
</div>

<?php require './user/template/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<?php
if (isset($_POST['login'])) {
    if (cek_login($_POST)) {
?>
        <script>
            swal("Selamat!", "Login anda berhasil!", "success")
                .then(function() {
                    window.location = "./index.php";
                });
        </script>
    <?php
    } else {
    ?>
        <script>
            swal("Maaf!", "Login anda gagal!", "error")
                .then(function() {
                    window.location = "./login.php";
                });
        </script>
<?php
    }
}
?>