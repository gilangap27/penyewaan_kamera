<!-- Footer - Start -->
<footer class="text-center text-lg-start" style="background-color: rgba(29, 29, 29, 0.2)">

    <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto my-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold">SewaKamera</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                <p>
                    SewaKamera adalah jasa penyewaan peralatan foto yang penuh dengan dedikasi yang didirikan pada 04-06-2022. SewaKamera menyediakan berbagai kamera, lensa, dan aksesoris untuk kebutuhan hobi serta pekerjaan anda, dengan harga yang terjangkau dan pelayanan dari hati untuk anda.
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 my-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold">Alamat</h6>
                <p>Jl. Raya Kedung Baruk No.98, Kedung Baruk, Kec. Rungkut, Kota Surabaya, Jawa Timur 60298, Indonesia</p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 Copyright: SewaKamera
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer - End -->

<!-- Modal -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutLabel">Logout</h5>
            </div>
            <div class="modal-body">
                Anda yakin ingin logout dari akun ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= $ROOT ?>/logout.php" type="button" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>