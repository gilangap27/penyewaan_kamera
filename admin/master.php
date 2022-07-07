<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Master Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <style>
        .badge a {
            color: white;
            text-decoration: none;
        }
    </style>

<body>

    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="./index.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fas fa-house fa-fw me-3"></i><span>Home</span>
                    </a>
                    <a href="./master.php" class="list-group-item list-group-item-action py-2 ripple active">
                        <i class="fas fa-toolbox fa-fw me-3"></i><span>Master</span>
                    </a>
                    <a href="./transaction.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-money-bill-1-wave fa-fw me-3"></i><span>Transaction</span></a>
                    <a href="./message.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-message fa-fw me-3"></i><span>Message</span></a>
                    <a href="./logout.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-right-from-bracket fa-fw me-3"></i><span>Logout</span></a>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <h3 class="navbar-brand">SewaKamera</h3>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="container p-4">
            <h3 class="mb-3">Master Page</h3>

            <!-- Table -->
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kamera</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kamera DSLR</td>
                        <td>Rp.100.000/hari</td>
                        <td>4</td>
                        <td>
                            <span class="badge bg-success"><a href="">Detail</a></span>
                            <span class="badge bg-warning"><a href="">Edit</a></span>
                            <span class="badge bg-danger"><a href="">Hapus</a></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Kamera Mirrorless</td>
                        <td>Rp.300.000/hari</td>
                        <td>20</td>
                        <td>
                            <span class="badge bg-success"><a href="">Detail</a></span>
                            <span class="badge bg-warning"><a href="">Edit</a></span>
                            <span class="badge bg-danger"><a href="">Hapus</a></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Kamera Action</td>
                        <td>Rp.500.000/hari</td>
                        <td>30</td>
                        <td>
                            <span class="badge bg-success"><a href="">Detail</a></span>
                            <span class="badge bg-warning"><a href="">Edit</a></span>
                            <span class="badge bg-danger"><a href="">Hapus</a></span>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </main>
    <!--Main layout-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>