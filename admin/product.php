<?php require './templates/header.php' ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Product</h1>

<!-- DataTales Example -->
<a href="" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Add new product</a>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kamera Action</td>
                        <td>Rp.100.000/hari</td>
                        <td>14</td>
                        <td>
                            <span class="badge bg-success"><a href="">Detail</a></span>
                            <span class="badge bg-warning"><a href="">Edit</a></span>
                            <span class="badge bg-danger"><a href="">Hapus</a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Kamera Mirroless</td>
                        <td>Rp.300.000/hari</td>
                        <td>16</td>
                        <td>
                            <span class="badge bg-success"><a href="">Detail</a></span>
                            <span class="badge bg-warning"><a href="">Edit</a></span>
                            <span class="badge bg-danger"><a href="">Hapus</a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Kamera DSLR</td>
                        <td>Rp.500.000/hari</td>
                        <td>10</td>
                        <td>
                            <span class="badge bg-success"><a href="">Detail</a></span>
                            <span class="badge bg-warning"><a href="">Edit</a></span>
                            <span class="badge bg-danger"><a href="">Hapus</a></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require './templates/footer.php' ?>