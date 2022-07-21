<?php include './templates/header.php' ?>

<?php
if (!isset($_SESSION['id_admin'])) {
    header("Location: ./index.php");
}

$pendapatan = query("SELECT SUM(total) AS total FROM pembayaran")[0];
$kamera = query("SELECT COUNT(*) AS total FROM product")[0];
$pelanggan = query("SELECT COUNT(*) AS total FROM pembayaran")[0];
$pending = query("SELECT COUNT(*) AS total FROM pembayaran WHERE status = 'Pending'")[0];
?>


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Earnings</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($pendapatan['total'], 2); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-coins fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Customers Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Customers</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pelanggan['total']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-person fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kamera Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Camera</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kamera['total']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-camera fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pending['total']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center bg-white p-5">
    <h1>Welcome Admin</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis molestiae vel autem quam cumque omnis nulla vitae illo ut possimus, debitis odit eius, cum eligendi laudantium? Ut nam alias vero, architecto, velit cum cumque sapiente quam aliquam exercitationem totam veritatis laborum eos accusamus iusto? Enim fugiat debitis repellat odio velit inventore officia. Aut nemo, harum ullam laborum, nobis nulla voluptates reprehenderit et, vitae natus officiis consequuntur! Vitae illo maxime praesentium optio reprehenderit unde tenetur odit debitis laborum deleniti ipsum blanditiis tempore laudantium laboriosam soluta fugiat sint labore, qui eveniet, consectetur amet voluptatum! Numquam beatae voluptates quasi adipisci, nisi distinctio nihil!</p>
</div>

<!-- Content Row -->

<?php include './templates/footer.php' ?>